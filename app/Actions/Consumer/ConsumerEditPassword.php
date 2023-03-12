<?php

namespace App\Actions\Consumer;

use Lorisleiva\Actions\Concerns\AsAction;

class ConsumerEditPassword
{
    use AsAction;

    public function handle()
    {
        return view('consumer.password');
    }
}
