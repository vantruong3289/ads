<?php

namespace App\Actions\Consumer;

use Lorisleiva\Actions\Concerns\AsAction;

class ConsumerStore
{
    use AsAction;

    public function handle()
    {
        return view('consumers.create');
    }
}
