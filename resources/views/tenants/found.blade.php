<x-layout>
    <x-card title="Register New Tenant">
        <div class="grid grid-cols-3 mb-5">
            <div>
                <div class="text-lg font-bold text-emerald-800">Name</div>
                <div>{{$user->name}}</div>
            </div>
            <div>
                <div class="text-lg font-bold text-emerald-800">Email</div>
                <div>{{$user->email}}</div>
            </div>
            <div>
                <div class="text-lg font-bold text-emerald-800">Mobile</div>
                <div>{{$user->mobile}}</div>
            </div>
        </div>
        <form action="/tenants/add" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{$user->id}}">
            <x-select id="unit_id" label="Unit" :options="$units"/>
            <x-input id="contract_start_date" type="date" label="Contract Start Date"/>
            <x-input id="contract_end_date" type="date" label="Contract End Date"/>
            <x-button :submit="true" title="Send Request" color="bg-emerald-600"/>
        </form>
    </x-card>
</x-layout>
