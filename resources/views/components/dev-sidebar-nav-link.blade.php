@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center px-4 py-3 mx-2 rounded-lg  text-lg md:text-sm w-full  text-gray-100 bg-gradient-to-r from-blue-600 to-cyan-400'
            : 'flex items-center px-4 py-3 mx-2 rounded-lg text-lg md:text-sm w-full transition duration-300 ease-in-out   hover:bg-green-100/100  text-gray-800';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $icon }}
    <span>{{ $slot }}</span>
</a>
