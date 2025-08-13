<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use hasFactory;
    protected $perPage = 10;

    protected $fillable = [
        'name',
        'Category_num'
    ];
}
