<?php

namespace App\Actions\Consumer;

use Lorisleiva\Actions\Concerns\AsAction;

class EditConsumer
{
    use AsAction;

    public function handle()
    {
        return view('consumer.edit');
    }
}
