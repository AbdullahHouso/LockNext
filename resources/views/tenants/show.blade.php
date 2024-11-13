<x-layout>
    <x-card title="View Tenant">
        <div class="grid grid-cols-4 gap-4 mb-5">
            @if(session('success'))
            <div class="col-span-4">
                <p class="text-emerald-800 py-3">{{session('success')}}/p>
            </div>
            @endif
            <div>
                <div class="text-lg font-bold text-emerald-800">Name</div>
                <div>{{$tenant->user->name}}</div>
            </div>
            <div>
                <div class="text-lg font-bold text-emerald-800">National ID</div>
                <div>{{$tenant->user->national_id}}</div>
            </div>
            <div>
                <div class="text-lg font-bold text-emerald-800">Mobile</div>
                <div>0{{$tenant->user->mobile}}</div>
            </div>
            <div>
                <div class="text-lg font-bold text-emerald-800">Email</div>
                <div>{{$tenant->user->email}}</div>
            </div>
            <div>
                <div class="text-lg font-bold text-emerald-800">Unit</div>
                <div>{{$tenant->unit->name}}</div>
            </div>
            <div>
                <div class="text-lg font-bold text-emerald-800">Contract Start Date</div>
                <div>{{$tenant->contract_start_date}}</div>
            </div>
            <div>
                <div class="text-lg font-bold text-emerald-800">Contract End Date</div>
                <div>{{$tenant->contract_end_date}}</div>
            </div>
            <div>
                <div class="text-lg font-bold text-emerald-800">Status</div>
                @php
                $status = '';
                switch ($tenant->status) {
                case 'active':
                $status = 'text-green-500';
                break;
                case 'pending':
                $status = 'text-yellow-500';
                break;
                case 'rejected':
                $status = 'text-red-500';
                break;
                default:
                $status = 'text-gray-500';
                break;
                }
                @endphp
                <div class="{{$status}}">
                    {{ucfirst($tenant->status)}}
                </div>
            </div>
        </div>
        @if($tenant->status == 'pending')
        <div class="rounded-lg px-4 py-6 bg-orange-300 text-center text-black">
            We are waiting for the tenant to complete the verification process.<br>User will be given the key once activation is completed, and the key will be valid for the contract period.
        </div>
        @endif
        @if($tenant->status == 'rejected')
        <div class="rounded-lg px-4 py-6 bg-red-300 text-center text-black">
            Either this user has rejected the offer, or the verification process has failed. Please contact the user for more information.
        </div>
        @endif
    </x-card>
</x-layout>
