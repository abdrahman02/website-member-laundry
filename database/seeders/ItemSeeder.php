<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::insert([
            ['name' => 'Pakaian', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jas', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Selimut', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
