<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inventory extends Model
{
    use hasFactory;
    protected $perPage = 10;

    protected $fillable = [
        'entry_date',
        'current_stock',
        'minimum_stock',
        'expiration_date' => null,
        'last_update',
        'product_id'

    ];
    public function product()
    {
        return $this->hasmany(Product::class);
    }
}
