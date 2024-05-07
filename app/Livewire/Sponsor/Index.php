<?php

namespace App\Livewire\Sponsor;

use App\Models\Carousel;
use App\Models\Sponsor;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $sponsors = Sponsor::where('active', true)
            ->InRandomOrder()
            ->limit(5)
            ->get();

        return view('livewire.sponsor.index', [
            'sponsors' => $sponsors,
        ]);

    }
}
