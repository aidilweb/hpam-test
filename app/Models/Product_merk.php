<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_merk extends Model
{
    use HasFactory;

    protected $table = 'category_merk';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
