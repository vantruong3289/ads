<?php

namespace App\Http\Livewire;

use App\Actions\Consumer\Watch\ConsumerWatchStore;
use Livewire\Component;

class CountDown extends Component
{
    public $ads;
    public $first = true;

    public function mount($ads)
    {
        $this->ads = $ads;
    }

    public function watch()
    {
        if ($this->first) {
            ConsumerWatchStore::dispatch($this->ads);
            $this->first = false;
        }
    }

    public function render()
    {
        return view('livewire.count-down');
    }
}
