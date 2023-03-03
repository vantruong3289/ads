<?php

namespace App\Http\Livewire;

use App\Actions\Watch\ClickAds;
use Livewire\Component;

class CountDown extends Component
{
    public $ads;

    public function mount($ads)
    {
        $this->ads = $ads;
    }

    public function watch()
    {
        ClickAds::run($this->ads);
    }

    public function render()
    {
        return view('livewire.count-down');
    }
}
