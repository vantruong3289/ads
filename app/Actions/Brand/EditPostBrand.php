<?php

namespace App\Actions\Brand;

use App\Models\Brand;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class EditPostBrand
{
    use AsAction;

    public function handle(Brand $brand, Request $request)
    {
        $input = $request->only('name', 'email', 'website', 'phone', 'about', 'map', 'address');
        $brand->update($input);
        if ($request->hasFile('logo')) {
            $brand->addMedia($request->file('logo'))->toMediaCollection('logo');
        }
        if ($request->hasFile('banner')) {
            $brand->addMedia($request->file('banner'))->toMediaCollection('banner');
        }
        if ($request->hasFile('cover')) {
            $brand->addMedia($request->file('cover'))->toMediaCollection('cover');
        }
        return back();
    }
}
