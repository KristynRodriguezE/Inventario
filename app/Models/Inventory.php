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
        'departure_date',
        'expiration_date',
        'amount'
    ];

    public function productentry()
    {
        return $this->hasmany(ProductEntry::class);
    }

    public function inventory()
    {
        return $this->hasmany(Inventory::class);
    }
    public function productoutput()
    {
        return $this->hasmany(ProductOutput::class);
    }
}
