<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Product_category::class, 'id_category');
    }

    public function merk()
    {
        return $this->belongsTo(Product_merk::class, 'id_category_brand');
    }

    public function type()
    {
        return $this->belongsTo(Product_type::class, 'tipe_produk');
    }
}
