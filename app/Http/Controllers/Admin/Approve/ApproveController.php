<?php

namespace App\Http\Controllers\Admin\Approve;

use App\Models\Color;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Brand;

class ApproveController extends Controller
{
    public function index()
    {
        $categories = Category::where('approve_status', '0')->get();
        $color = Color::where('approve_status', '0')->get();
        $brand = Brand::where('approve_status', '0')->get();
        $product = Product::where('approve_status', '0')->get();

        $rowCategoryCount = Category::where('approve_status', '0')->count();
        $rowColorCount = Color::where('approve_status', '0')->count();
        $rowBrandCount = Brand::where('approve_status', '0')->count();
        $rowProductCount = Product::where('approve_status', '0')->count();

        return view('pages.admin.approve.index', compact('categories', 'product', 'color', 'brand', 'rowCategoryCount',  'rowColorCount', 'rowBrandCount', 'rowProductCount'));
    }

    public function category_approval($category)
    {
        $category = Category::findOrFail($category);
        $category->approve_status = '1';

        $category->update();
        return redirect()->back()->with('message', 'Category Has Been Approved');
    }

    public function color_approval($color)
    {
        $color = Color::findOrFail($color);
        $color->approve_status = '1';
        $color->update();
        return redirect()->back()->with('message', 'Color Has Been Approved');
    }

    public function brand_approval($brand)
    {
        $brand = Brand::findOrFail($brand);
        $brand->approve_status = '1';
        $brand->update();
        return redirect()->back()->with('message', 'Brand Has Been Approved');
    }

    public function product_approval($product)
    {
        $product = Product::findOrFail($product);
        $product->approve_status = '1';
        $product->update();
        return redirect()->back()->with('message', 'Product Has Been Approved');
    }
}
