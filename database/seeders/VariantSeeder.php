<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Variant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $variantName = [
            'Rasa jeruk', 'Rasa Mangga', 'Rasa Apel'
        ];

        $products = Product::all();

        foreach ($products as $key => $product) {
            foreach ($variantName as $key => $variant) {
                Variant::create([
                    'product_id' => $product->id,
                    'variant_name' => $variant
                ]);
            }
        }
    }
}
