<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Product::factory(10)->create();

        \App\Models\Product::factory()->create([
            'name' => 'Product 1',
            'description' => 'Description 1',
            'price' => 100.00,
            'stock' => 10,
            'status' => 'available',
            'image' => 'image1.jpg',
        ]);
    }
}
