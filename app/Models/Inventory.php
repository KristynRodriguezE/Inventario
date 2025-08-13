<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inventory extends Model
{
    use hasFactory;
    protected $perPage = 10;

    protected $fillable = [
        'Entry_date',
        'Departure_date',
        'Expiration_date',
        'Amount'
    ];
}
