<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'sales';

    protected $fillable = ['product_id', 'variant_id', 'quantity', 'date'];

    public function variant()
    {
        return $this->belongsTo(Variant::class);
    }
}
