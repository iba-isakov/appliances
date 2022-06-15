<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remains extends Model
{
    use HasFactory;

    protected $table = "remains";
    protected $fillable = [
        'in_stock',
        'expected',
        'product_id',
    ];
}
