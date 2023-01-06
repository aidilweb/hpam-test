<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product_category;
use App\Models\Product_type;
use App\Models\Product_merk;

class ProductController extends Controller
{
    public function index()
    {
        $title = 'Semua Produk';
        $product = Product::where('status', 1)->orderBy('id', 'DESC')->simplePaginate(16);
        $category = Product_category::get();
        $type = Product_type::get();
        $merk = Product_merk::get();

        return view('product.list', compact('product', 'category', 'type', 'merk', 'title'));
    }

    public function show(Request $request)
    {
        $product = Product::find($request->id);
        return view('product.show', compact('product'));
    }

    public function category(Request $request)
    {
        $category = Product_category::where('slug', $request->slug)->first();
        $title = 'Category ' . $category->name;
        $product = Product::where('id_category', $category->id)->where('status', 1)->orderBy('id', 'DESC')->simplePaginate(16);

        $category = Product_category::get();
        $type = Product_type::get();
        $merk = Product_merk::get();

        return view('product.list', compact('product', 'category', 'type', 'merk', 'title'));
    }

    public function type(Request $request)
    {
        $type = Product_type::where('slug', $request->slug)->first();
        $title = 'Type ' . $type->name;
        $product = Product::where('tipe_produk', $type->id)->where('status', 1)->orderBy('id', 'DESC')->simplePaginate(16);

        $category = Product_category::get();
        $type = Product_type::get();
        $merk = Product_merk::get();

        return view('product.list', compact('product', 'category', 'type', 'merk', 'title'));
    }

    public function merk(Request $request)
    {
        $merk = Product_merk::where('slug', $request->slug)->first();
        $title = 'Merk ' . $merk->name;
        $product = Product::where('id_category_brand', $merk->id)->where('status', 1)->orderBy('id', 'DESC')->simplePaginate(16);

        $category = Product_category::get();
        $type = Product_type::get();
        $merk = Product_merk::get();

        return view('product.list', compact('product', 'category', 'type', 'merk', 'title'));
    }
}
