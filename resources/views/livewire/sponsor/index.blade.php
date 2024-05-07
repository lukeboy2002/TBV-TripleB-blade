<div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-6 px-4 sm:px-6 lg:px-8 border-b border-orange-500/30 pb-8">
    <div class="text-lg text-orange-500 font-black uppercase text-center pb-8 lg:pb-0">Our Sponsors</div>
    <div class="mx-auto lg:mx-0 grid col-span-5 md:grid-cols-5 grid-cols-3 gap-8">
        @foreach ($sponsors as $sponser)
            <a href="{{ $sponser->url }}" target="_blank" class="flex justify-center">
                <img class="max-h-12" src="{{ asset($sponser->getImage() )}}" alt="{{ $sponser->name }}">
            </a>
        @endforeach
    </div>
</div>
