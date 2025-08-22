<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductEntry extends Model
{
    use hasFactory;
    protected $perPage = 10;

    protected $fillable = [
        'unit_price',
        'quantity',
        'date',
        'entry_date',
        'description' => null,
        'input_type',
        'product_id',
        'supplier_id'
    ];

    public function product()
    {
        return $this->belongsTo(Producto::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
