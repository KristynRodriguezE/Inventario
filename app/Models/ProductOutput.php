<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductOutput extends Model
{
    use hasFactory;
    protected $perPage = 10;

    protected $fillable = [
        'unit_price',
        'quantity',
        'date',
        'description' => null,
        'input_type',
        'product_id',
        'inventory_id'
    ];

    public function product()
    {
        return $this->belongsTo(Producto::class);
    }

}
