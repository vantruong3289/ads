<?php

namespace App\Http\Livewire;

use App\Actions\Consumer\Watch\ConsumerWatchStore;
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
        ConsumerWatchStore::dispatch($this->ads);
    }

    public function render()
    {
        return view('livewire.count-down');
    }
}
