<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\StatusSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\PriceListSeeder;
use Database\Seeders\ServiceTypeSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            StatusSeeder::class,
            ServiceSeeder::class,
            ItemSeeder::class,
            ServiceTypeSeeder::class,
            PriceListSeeder::class
        ]);
    }
}
