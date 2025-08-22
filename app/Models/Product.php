<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use hasFactory;
    protected $perPage = 10;

    protected $fillable = [
        'name',
        'price',
        'status',
        'code',
        'current_Quantity',
        'type',
        'unit_measurement',
        'expiration_date',
        'mark_id',
        'category_id',
        'supplier_id'
    ];

    public function mark()
    {
        return $this->belongsTo(Mark::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function productentry()
    {
        return $this->hasmany(ProductEntry::class);
    }

    public function productoutput()
    {
        return $this->hasmany(ProductOutput::class);
    }

}
