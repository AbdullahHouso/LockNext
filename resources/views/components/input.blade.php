@props([
'id',
'type' => 'text',
'disabled' => false,
'label' => null,
'placeholder' => null,
'margin' => true,
'group' => false,
'addon' => null,
'groupPosition' => 'r',
'content' => null,
'optional' => false,
])

<div class="@if ($margin) mb-10 @endif">
    @if ($label)
    <label for="{{ $id }}" class="font-semibold">
        {{ $label }}
        @if($optional) <span class="text-xs text-gray-500">({{__('main.optional')}})</span> @endif
    </label>
    @endif

    @if ($type != 'textarea')
    @if ($group && $addon)
    <div class="input-group">
        @endif
        @if ($group && $addon && $groupPosition == 'r')
        <span class="input-group-text" id="addon">{{ $addon }}</span>
        @endif
        <input @if($disabled) disabled @endif
               {{ $attributes->merge([
        'type' => $type,
        'id' => $id,
        'name' => $id,
        'placeholder' => $placeholder,
        'value' => old($id),
        'class' => 'mt-2 px-3 py-2 border rounded-lg w-full', ]) }}>
        @if ($group && $addon && $groupPosition == 'l')
        <span class="input-group-text" id="addon">{{ $addon }}</span>
        @endif
        @if ($group && $addon)
    </div>
    @endif
    @else
    <textarea @if($disabled) disabled @endif
              {{ $attributes->merge([
        'id' => $id,
        'name' => $id,
        'placeholder' => $placeholder,
        'value' => old($id),
        'class' => 'form-control',
    ]) }}>{{$content}}</textarea>
    @endif
    @if(session('error'))
    <p class="text-red-700 text-xs mt-1">{{ session('error') }}</p>
    @endif
</div>
