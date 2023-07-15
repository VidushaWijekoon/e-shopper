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
        $validatedData = $request->validated();

        $category = Category::findOrFail($validatedData['category_id']);

        $product = $category->products()->create([
            'category_id' => $validatedData['category_id'],
            'title' => $validatedData['title'],
            'name' => $validatedData['name'],
            'slug' => $validatedData['slug'],
            'brand_id' => $validatedData['brand_id'],
            'product_information' => $validatedData['product_information'],
            'additional_information' => $validatedData['additional_information'],
            'short_description' => $validatedData['short_description'],
            'product_original_price' => $validatedData['product_original_price'],
            'product_selling_price' => $validatedData['product_selling_price'],
            'product_discount_percent' => $validatedData['product_discount_percent'],
            'product_quantity' => $validatedData['product_quantity'],
            'tranding' => $validatedData['tranding'],
            'status' => $validatedData['status'],
            'product_meta_title' => $validatedData['product_meta_title'],
            'product_meta_keyword' => $validatedData['product_meta_keyword'],
            'product_meta_description' => $validatedData['product_meta_description'],
        ]);
    }
}
