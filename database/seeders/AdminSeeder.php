<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{

    public function run()
    {
        Admin::truncate();
        $admin = Admin::factory(1)->create();
        $admin->each(function (Admin $admin) {
            $admin->addMediaFromUrl('https://i.pravatar.cc/80')->toMediaCollection('avatar');
        });
    }
}
