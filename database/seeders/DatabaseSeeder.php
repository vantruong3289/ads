<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Schema;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        Schema::disableForeignKeyConstraints();
        $this->call([
            AdminSeeder::class,
            ConsumerSeeder::class,
            AdvertiserSeeder::class,
            BrandSeeder::class,
            DesignSeeder::class,
            AdsSeeder::class,
            WatchSeeder::class,
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
