<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Summarize extends Model
{
    use HasFactory;

    protected $table = 'summarizes';

    protected $fillable = ['product_name', 'total', 'date'];
}
