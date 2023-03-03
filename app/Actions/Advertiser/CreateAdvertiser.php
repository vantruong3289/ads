<?php

namespace App\Actions\Advertiser;

use App\Models\Advertiser;
use Hash;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class CreateAdvertiser
{
    use AsAction;

    public function handle(Request $request)
    {
        $input = $request->input();
        $input['password'] = Hash::make($input['password']);
        $advertiser = Advertiser::create($input);

        return $advertiser;
    }
}
