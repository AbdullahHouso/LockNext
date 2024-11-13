@props(['title', 'icon', 'path' => ''])

@php
$isActive = Request::is($path);
$activeClasses = 'bg-emerald-600 text-white mx-2 px-4 py-4';
$defaultClasses = 'px-6 py-4';
@endphp

<a href="{{$path ? '/' . $path : '/'}}"
   class="transition-all rounded flex flex-row items-center justify-start hover:ps-8 {{ $isActive ? $activeClasses : $defaultClasses }}">
    <span class="material-symbols-outlined {{$isActive ? 'text-white' : 'text-neutral-400'}}">{{ $icon }}</span>
    <span class="ms-5">{{ $title }}</span>
</a>
