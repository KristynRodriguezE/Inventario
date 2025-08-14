<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductEntry extends Model
{
    use hasFactory;
    protected $perPage = 10;

    protected $fillable = [
        'product_id',
        'quantity',
        'entry_date'
    ];

    public function product()
    {
        return $this->belongsTo(Producto::class);
    }
    public function inventory()
    {
        return $this->belongsTo(Inventario::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
