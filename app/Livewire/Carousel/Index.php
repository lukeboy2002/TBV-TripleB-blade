<?php

namespace App\Livewire\Carousel;

use App\Models\Carousel;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $images = Carousel::where('active', true)
            ->InRandomOrder()
            ->limit(5)
            ->get();

        return view('livewire.carousel.index', [
            'images' => $images,
        ]);
    }
}
