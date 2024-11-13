@props(['title' => "Please give me a title.", 'buttonTitle' => null, 'buttonPath' => null])

<div class="bg-white rounded-lg p-6 border">
    @if(isset($title))
        <div class="flex items-center justify-between">
            <h1 class="text-xl font-bold">{{$title}}</h1>
            @if($buttonTitle && $buttonPath)
            <x-button path="{{$buttonPath}}" title="{{$buttonTitle}}" color="bg-emerald-600"/>
            @endif
        </div>
        <hr class="my-5">
    @endif
    {{$slot}}
</div>
