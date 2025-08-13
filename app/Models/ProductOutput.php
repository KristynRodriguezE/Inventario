<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductOutput extends Model
{
    use hasFactory;
    protected $perPage = 10;

    protected $fillable = [
        'product_id',
        'quantity',
        'output_date'
    ];
}
