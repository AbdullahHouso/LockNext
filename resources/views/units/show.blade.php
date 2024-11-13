<x-layout>
    <x-card title="{{$unit->name}}">
        <div class="grid grid-cols-2">
            <div class="grid grid-rows-3 gap-4 mb-5">
                <div>
                    <div class="text-lg font-bold text-emerald-800">Floor</div>
                    <div>{{$unit->floor}}</div>
                </div>
                <div>
                    <div class="text-lg font-bold text-emerald-800">Price</div>
                    <div>{{$unit->price}} SAR</div>
                </div>
                <div>
                    <div class="text-lg font-bold text-emerald-800">Status</div>
                    <div class="{{$unit->isOccupied() ? 'font-bold text-red-700' : 'text-emerald-600'}}">
                        {{$unit->isOccupied() ? 'Occupied' : 'Available'}}
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <div>
                    <div class="text-lg font-bold text-emerald-800">Address</div>
                </div>
                <div>
                    {{$unit->building_number}} {{$unit->street}}
                </div>
                <div>
                    {{$unit->postcode}} {{$unit->district}} {{$unit->additional_number}}
                </div>
                <div>
                    {{$unit->city}}, Saudi Arabia
                </div>
                <div class="my-5">
                    <x-button path="#" title="View Location" color="bg-blue-500"/>
                </div>
            </div>
        </div>
        @if($unit->isOccupied() && $unit->activeTenant())
        <div class="grid grid-cols-3 gap-4 mt-5">
            <div class="col-span-3 text-lg font-bold text-emerald-800">Current Tenant</div>
            <hr class="col-span-3">
            <div>
                <div class="text-lg font-bold text-emerald-800">Name</div>
                <div>{{$unit->activeTenant()->user->name}}</div>
            </div>
            <div>
                <div class="text-lg font-bold text-emerald-800">National ID</div>
                <div>{{$unit->activeTenant()->user->national_id}}</div>
            </div>
            <div>
                <div class="text-lg font-bold text-emerald-800">Mobile</div>
                <div>{{$unit->activeTenant()->user->mobile}}</div>
            </div>
            <div>
                <div class="text-lg font-bold text-emerald-800">Email</div>
                <div>{{$unit->activeTenant()->user->email}}</div>
            </div>
            <div>
                <div class="text-lg font-bold text-emerald-800">Contract Start</div>
                <div>{{$unit->activeTenant()->contract_start_date}}</div>
            </div>
            <div>
                <div class="text-lg font-bold text-emerald-800">Contract End</div>
                <div>{{$unit->activeTenant()->contract_end_date}}</div>
            </div>
            <div class="col-span-3">
                <div class="text-lg font-bold text-emerald-800">Actions</div>
                <div class="flex flex-row items-center gap-5 my-5">
                    <x-button path="#" title="Extend Contract" color="bg-blue-600" />
                    <x-button path="#" title="Regenerate Key" color="bg-orange-600" />
                    <x-button path="#" title="End Contract & Revoke Key" color="bg-red-600" />
                </div>
            </div>
            @endif
    </x-card>
</x-layout>
