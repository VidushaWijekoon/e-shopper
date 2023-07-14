<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Colour;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequestForm;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('pages.admin.product.index');
    }

    public function create()
    {
        $categories = Category::all();
        $brand = Brand::all();
        $colours = Colour::all();
        return view('pages.admin.product.create', ['categories' => $categories, 'brand' => $brand, 'colours' => $colours]);
    }

    public function store(ProductRequestForm $request)
    {
        $validatatedData = $request->validated();
        $product = new Product;
    }
}
