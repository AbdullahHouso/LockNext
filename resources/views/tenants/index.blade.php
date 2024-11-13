<x-layout>
    <x-card title="Tenants" buttonTitle="Register New Tenant" buttonPath="/tenants/add">
        <div class="overflow-x-auto rounded-lg border">
            <table class="w-full text-base text-gray-500">
                <thead class="text-sm text-gray-700 bg-gray-50">
                <tr class="font-bold">
                    <th class="px-6 py-3">Name</th>
                    <th class="px-6 py-3">Mobile</th>
                    <th class="px-6 py-3">Email</th>
                    <th class="px-6 py-3">Room</th>
                    <th class="px-6 py-3">Start Date</th>
                    <th class="px-6 py-3">End Date</th>
                    <th class="px-6 py-3">Status</th>
                    <th class="px-6 py-3">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tenants as $tenant)
                <tr class="odd:bg-white even:bg-gray-50 border-b font-base text-sm">
                    <th class="px-6 py-4 text-black">{{$tenant->user->name}}</th>
                    <th class="px-6 py-4">{{$tenant->user->mobile}}</th>
                    <th class="px-6 py-4">{{$tenant->user->email}}</th>
                    <th class="px-6 py-4">{{$tenant->unit->name}}</th>
                    <th class="px-6 py-4">{{$tenant->contract_start_date}}</th>
                    <th class="px-6 py-4">{{$tenant->contract_end_date}}</th>
                    <th class="px-6 py-4">
                        @php
                        $status = '';
                        switch ($tenant->status) {
                        case 'active':
                        $status = 'bg-green-500';
                        break;
                        case 'pending':
                        $status = 'bg-yellow-500';
                        break;
                        case 'rejected':
                        $status = 'bg-red-500';
                        break;
                        default:
                        $status = 'bg-gray-500';
                        break;
                        }
                        @endphp
                        <p class="{{$status}} text-white text-xs px-2 py-1 rounded-full">{{ucfirst($tenant->status)}}</p>
                    </th>
                    <th class="px-6 py-4">
                        <a href="/tenants/{{$tenant->id}}" class="text-blue-600">Manage</a>
                    </th>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </x-card>
</x-layout>
