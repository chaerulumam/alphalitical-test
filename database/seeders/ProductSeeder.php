<?php

namespace Database\Seeders;

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
        $productName = [
            [
                'product_name' => 'Cool-Vita Effervescent Tablet',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_name' => 'Cool-Vita Collagen',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        foreach ($productName as $product) {
            Product::create($product);
        }
    }
}
