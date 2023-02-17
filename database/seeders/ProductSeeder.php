<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'id' => 1,
                'category_id' => 1,
                'product_name' => 'Easy Polo Black Edition',
                'price' => '56',
                'content' => 'xxxxxxxxx',
                'discount' => '10',
                'image' => 1,
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'category_id' => 1,
                'product_name' => 'Easy Polo Black Edition',
                'price' => '56',
                'content' => 'xxxxxxxxx',
                'discount' => '10',
                'image' => '1',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'category_id' => 1,
                'product_name' => 'Easy Polo Black Edition',
                'price' => '56',
                'content' => 'xxxxxxxxx',
                'discount' => '10',
                'image' => '1',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 4,
                'category_id' => 1,
                'product_name' => 'Easy Polo Black Edition',
                'price' => '56',
                'content' => 'xxxxxxxxx',
                'discount' => '10',
                'image' => '1',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 5,
                'category_id' => 1,
                'product_name' => 'Easy Polo Black Edition',
                'price' => '56',
                'content' => 'xxxxxxxxx',
                'discount' => '10',
                'image' => '1',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 6,
                'category_id' => 1,
                'product_name' => 'Easy Polo Black Edition',
                'price' => '56',
                'content' => 'xxxxxxxxx',
                'discount' => '10',
                'image' => '1',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
