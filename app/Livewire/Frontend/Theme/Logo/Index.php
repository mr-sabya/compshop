<?php

namespace App\Livewire\Frontend\Theme\Logo;

use Livewire\Component;

class Index extends Component
{
    public $className;

    public function mount($className)
    {
        $this->className = $className;
    }

    public function render()
    {
        return view('livewire.frontend.theme.logo.index');
    }
}
