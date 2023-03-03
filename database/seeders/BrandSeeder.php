<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    public function run()
    {
        Brand::truncate();
        $brands = Brand::factory(10)->create();
        $brands->each(function (Brand $brand) {
            $brand->addMediaFromUrl('https://source.unsplash.com/random/80x80')->toMediaCollection('logo');
            $brand->addMediaFromUrl('https://source.unsplash.com/random/1200x500')->toMediaCollection('cover');
            $brand->addMediaFromUrl('https://source.unsplash.com/random/1200x300')->toMediaCollection('banner');
        });
    }
}
