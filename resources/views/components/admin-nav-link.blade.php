@props(['active', 'icon', 'link'])

@php
$classes = ($active ?? false )
            ? ' flex group items-center space-x-2 py-3 px-4 bg-cyan-700 rounded text-cyan-300 transition duration-200'
            : ' flex group items-center space-x-2 py-3 px-4 hover:bg-cyan-700 rounded hover:text-cyan-300 transition duration-200';
@endphp

<a href="{{ $link }}" {{ $attributes->merge(['class' => $classes]) }}>
    <span class="material-icons text-xl">{{ $icon  }}</span>
    <span class="text-white group-hover:text-cyan-300 active:bg">{{ $slot }}</span>
</a>

