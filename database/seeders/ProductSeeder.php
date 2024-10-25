<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Product::create([
            'name' => 'PlayStation 5 console',
            'description' => 'This is the playstation 5 yadayada',
            'category_id' => Category::where('title','Consoles')->first()->id,
            'img_path' => 'images/products/ps5.png',
            'price' => 599.50,
            'discount' => 0.00,
            'stock' => 50,
        ]);
        Product::create([
            'name' => 'Nintendo Switch Oled Console',
            'description' => 'This is the Nintendo Switch yadayada',
            'category_id' => Category::where('title','Consoles')->first()->id,
            'img_path' => 'images/products/nintendo-switch.png',
            'price' => 499.0,
            'discount' => 5.00,
            'stock' => 100,
        ]);

        
    }
}
