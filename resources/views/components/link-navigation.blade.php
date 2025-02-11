@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'text-textLight bg-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-textDark focus:outline-none transition duration-150 ease-in-out'
                : 'text-textLight bg-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 hover:bg-gray-300 dark:bg-bgDark dark:hover:bg-gray-800 dark:text-white focus:outline-none focus:bg-gray-300 dark:focus:bg-gray-800 transition duration-150 ease-in-out'
;
@endphp

<a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

{{--bovenste is active--}}
