<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Bosh Speaker',
            'price' => 16000,
            'category' => 'Speaker',
            'description' => 'Some description about Bosh Speaker',
            'gallery' => 'https://www.adorama.com/images/Large/bo8344021100.jpg'
        ]);
    }
}
