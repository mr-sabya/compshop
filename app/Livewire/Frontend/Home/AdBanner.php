<?php

namespace App\Livewire\Frontend\Home;

use Livewire\Component;

class AdBanner extends Component
{
    public $adCount;

    public function mount($adCount)
    {
        $this->adCount = $adCount;
    }

    public function render()
    {
        return view('livewire.frontend.home.ad-banner');
    }
}
