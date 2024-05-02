<x-app-layout>
    <x-slot name="header">
        <img class="max-h-full w-full object-cover object-left-top" src="{{asset('storage/slider/test.jpg')}}" alt="TripleB">
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
