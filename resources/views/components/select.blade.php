@props([
'id',
'disabled' => false,
'label' => null,
'placeholder' => null,
'margin' => true,
'content' => null,
'optional' => false,
'options' => []
])

<div class="@if ($margin) mb-10 @endif">
    @if ($label)
    <label for="{{ $id }}" class="font-semibold">
        {{ $label }}
        @if($optional) <span class="text-xs text-gray-500">({{__('main.optional')}})</span> @endif
    </label>
    @endif

    <select id="{{$id}}" name="{{$id}}" class="mt-2 px-3 py-2 border rounded-lg w-full">
        @if ($placeholder)
        <option value="">{{ $placeholder }}</option>
        @endif
        @foreach($options as $key => $value)
        <option value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>
