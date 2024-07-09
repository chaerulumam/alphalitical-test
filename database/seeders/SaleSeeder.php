<?php

namespace Database\Seeders;

use App\Models\Sale;
use App\Models\Variant;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productId = 1;
        $variants = Variant::where('product_id', $productId)->get();

        foreach ($variants as $key => $variant) {
            for ($i = 1; $i <= 5; $i++) {
                Sale::create([
                    'product_id' => $productId,
                    'variant_id' => $variant->id,
                    'quantity' => rand(1, 100),
                    'date' => Carbon::now()->subDays(rand(0, 30))->format('Y-m-d')
                ]);
            }
        }
    }
}
