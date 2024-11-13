<x-layout>
    <div class="grid grid-cols-4 gap-4">
        @foreach($units as $unit)
        <div class="bg-white shadow-md rounded-md p-5 mb-5">
            <div class="flex justify-between items-center w-full">
                <div>
                    <h1 class="text-xl font-bold">{{ $unit->name }}</h1>
                    <p class="{{$unit->isOccupied() ? 'text-red-600' : 'text-emerald-600'}}">{{ $unit->isOccupied() ? 'Occupied' : 'Available' }}</p>
                </div>
                <div>
                    <a href="/units/{{$unit->id}}" class="bg-blue-500 text-white px-3 py-1 rounded-md">View</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-layout>
