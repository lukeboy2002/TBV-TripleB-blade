<x-app-layout>
    <x-slot name="header">
        <livewire:carousel.index />
{{--        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
{{--            <h2 class="font-semibold text-xl text-gray-900 dark:text-white leading-tight">--}}
{{--                {{ __('Dashboard') }}--}}
{{--            </h2>--}}
{{--        </div>--}}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
