<?php

namespace Database\Seeders;

use App\Models\PriceList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriceListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PriceList::insert([
            ['item_id' => '1', 'category_id' => '1', 'service_id' => '1', 'price' => '500', 'created_at' => now(), 'updated_at' => now()],
            ['item_id' => '1', 'category_id' => '1', 'service_id' => '2', 'price' => '300', 'created_at' => now(), 'updated_at' => now()],
            ['item_id' => '1', 'category_id' => '1', 'service_id' => '3', 'price' => '700', 'created_at' => now(), 'updated_at' => now()],

            ['item_id' => '1', 'category_id' => '2', 'service_id' => '1', 'price' => '5000', 'created_at' => now(), 'updated_at' => now()],
            ['item_id' => '1', 'category_id' => '2', 'service_id' => '2', 'price' => '4000', 'created_at' => now(), 'updated_at' => now()],
            ['item_id' => '1', 'category_id' => '2', 'service_id' => '3', 'price' => '6500', 'created_at' => now(), 'updated_at' => now()],

            ['item_id' => '2', 'category_id' => '1', 'service_id' => '1', 'price' => '1500', 'created_at' => now(), 'updated_at' => now()],
            ['item_id' => '2', 'category_id' => '1', 'service_id' => '2', 'price' => '1000', 'created_at' => now(), 'updated_at' => now()],
            ['item_id' => '2', 'category_id' => '1', 'service_id' => '3', 'price' => '2000', 'created_at' => now(), 'updated_at' => now()],

            ['item_id' => '2', 'category_id' => '2', 'service_id' => '1', 'price' => '6500', 'created_at' => now(), 'updated_at' => now()],
            ['item_id' => '2', 'category_id' => '2', 'service_id' => '2', 'price' => '5000', 'created_at' => now(), 'updated_at' => now()],
            ['item_id' => '2', 'category_id' => '2', 'service_id' => '3', 'price' => '8000', 'created_at' => now(), 'updated_at' => now()],

            ['item_id' => '3', 'category_id' => '1', 'service_id' => '1', 'price' => '1500', 'created_at' => now(), 'updated_at' => now()],
            ['item_id' => '3', 'category_id' => '1', 'service_id' => '2', 'price' => '1000', 'created_at' => now(), 'updated_at' => now()],
            ['item_id' => '3', 'category_id' => '1', 'service_id' => '3', 'price' => '2000', 'created_at' => now(), 'updated_at' => now()],

            ['item_id' => '3', 'category_id' => '2', 'service_id' => '1', 'price' => '6500', 'created_at' => now(), 'updated_at' => now()],
            ['item_id' => '3', 'category_id' => '2', 'service_id' => '2', 'price' => '5000', 'created_at' => now(), 'updated_at' => now()],
            ['item_id' => '3', 'category_id' => '2', 'service_id' => '3', 'price' => '8000', 'created_at' => now(), 'updated_at' => now()],

        ]);
    }
}
