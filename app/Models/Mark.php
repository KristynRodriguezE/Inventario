<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mark extends Model
{
    use hasFactory;
    protected $perPage = 10;

    protected $fillable = [
        'Mark'
    ];
}
