<?php

namespace Database\Seeders;

use App\Models\Sale;
use App\Models\Summarize;
use App\Models\Variant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SummarizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $summarizeData = Sale::select(
            'variants.product_id',
            'variants.variant_name as variant_name',
            DB::raw('SUM(sales.quantity) as total_sales'),
            'sales.date'
        )
            ->join('variants', 'sales.variant_id', '=', 'variants.id')
            ->groupBy('variants.product_id', 'variants.variant_name', 'sales.date')
            ->get();

        foreach ($summarizeData as $data) {
            $product = $data->product_id;
            $variantName = $data->variant_name;
            $totalSales = $data->total_sales;
            $date = $data->date;

            Summarize::create([
                'product_name' => Variant::find($product)->product->product_name,
                'variant_name' => $variantName,
                'total' => $totalSales,
                'date' => $date
            ]);
        }
    }
}
