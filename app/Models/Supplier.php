<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier extends Model
{
    use hasFactory;
    protected $perPage = 10;

    protected $fillable = [
        'name',
        'phone',
        'address',
        'email'
    ];

    public function productentry()
    {
        return $this->hasmany(ProductEntry::class);
    }
}
