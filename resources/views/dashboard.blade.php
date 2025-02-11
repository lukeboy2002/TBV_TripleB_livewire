<x-app-layout>
    {{--    <x-slot name="hero">--}}
    {{--        <h2 class="font-semibold text-xl text-gray-900 dark:text-white leading-tight">--}}
    {{--            {{ __('Dashboard') }}--}}
    {{--        </h2>--}}
    {{--    </x-slot>--}}

    <x-card class="p-6 lg:p-8">
        <x-welcome/>
    </x-card>

    <x-slot name="side">
        <x-card class="p-2">
            sidebar
        </x-card>
    </x-slot>
</x-app-layout>
