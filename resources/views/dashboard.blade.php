<x-app-layout>
    {{--    <x-slot name="hero">--}}
    {{--        <h2 class="font-semibold text-xl text-gray-900 dark:text-white leading-tight">--}}
    {{--            {{ __('Dashboard') }}--}}
    {{--        </h2>--}}
    {{--    </x-slot>--}}

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <x-welcome/>
        </div>
    </div>

    <x-slot name="side">
        sidebar
    </x-slot>
</x-app-layout>
