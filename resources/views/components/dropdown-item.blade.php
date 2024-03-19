@props(['active' => false])

@php

    $classes = 'block mb-1 text-left px-3 text-sm leading-6 hover:bg-indigo-500 hover:text-white focus:bg-indigo-500 focus:text-white rounded-md whitespace-nowrap';

    if ($active) {
        $classes .= ' bg-indigo-500 text-white';
    }
@endphp


<a {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</a>
