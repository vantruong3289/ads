<?php

namespace App\Actions\Consumer;

use Lorisleiva\Actions\Concerns\AsAction;

class CreateConsumer
{
    use AsAction;

    public function handle()
    {
        return view('consumers.create');
    }
}
