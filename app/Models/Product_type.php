<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_type extends Model
{
    use HasFactory;

    protected $table = 'product_type';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
