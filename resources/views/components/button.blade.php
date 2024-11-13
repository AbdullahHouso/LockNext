@props(['path' => null, 'submit' => false, 'title', 'color' => 'bg-blue-600'])

@if($submit)
<button {{ $attributes->merge([
    'class' => 'px-6 py-3 text-white rounded-lg '.$color,
    'type' => 'submit'])
    }}>{{$title}}</button>
@else
<a {{ $attributes->merge([
    'class' => 'px-6 py-3 text-white rounded-lg '.$color,
    'href' => $path ? $path : null])
    }}>{{$title}}</a>
@endif
