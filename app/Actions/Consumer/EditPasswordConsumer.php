<?php

namespace App\Actions\Consumer;

use Lorisleiva\Actions\Concerns\AsAction;

class EditPasswordConsumer
{
    use AsAction;

    public function handle()
    {
        return view('consumer.password');
    }
}
