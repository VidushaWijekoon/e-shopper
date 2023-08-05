<?php

namespace App\Http\Controllers\Admin\Approve;

use App\Models\Category;
use App\Models\Color;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Slider;
use App\Http\Controllers\Controller;

class ApproveController extends Controller
{
    public function index()
    {
        $categories = Category::where('approve_status', '0')->get();
        $color = Color::where('approve_status', '0')->get();
        $brand = Brand::where('approve_status', '0')->get();
        $product = Product::where('approve_status', '0')->get();
        $slider = Slider::where('approve_status', '0')->get();

        $rowCategoryCount = Category::where('approve_status', '0')->count();
        $rowColorCount = Color::where('approve_status', '0')->count();
        $rowBrandCount = Brand::where('approve_status', '0')->count();
        $rowProductCount = Product::where('approve_status', '0')->count();
        $rowSliderCount = Slider::where('approve_status', '0')->count();

        return view('pages.admin.approve.index', compact(
            'categories',
            'product',
            'color',
            'brand',
            'slider',
            'rowCategoryCount',
            'rowColorCount',
            'rowBrandCount',
            'rowProductCount',
            'rowSliderCount'
        ));
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

    public function slider_approval($slider)
    {
        $slider = Slider::findOrFail($slider);
        $slider->approve_status = '1';
        $slider->update();
        return redirect()->back()->with('message', 'Slider Has Been Approved');
    }
}