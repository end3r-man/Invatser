@props([
    'icon' => null,
    'route' => null,
])


<a wire:navigate href="{{route($route)}}" class="w-full flex items-center gap-x-2 py-3 px-4 text-[#81689D] hover:bg-[#81689D] hover:rounded-md hover:text-white">
    
    @if ($icon)
        <iconify-icon class="text-3xl" icon="{{$icon}}"></iconify-icon>
    @endif

    {{$slot}}
</a>