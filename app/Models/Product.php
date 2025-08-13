<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use hasFactory;
    protected $perPage = 10;

    protected $fillable = [
        'Name',
        'Price',
        'Status',
        'Code',
        'Current_Quantity',
        'Type',
        'Unit_measurement',
        'Expiration_date'
    ];

    public function product()
    {
        return $this->hasmany(Producto::class);
    }
}
