<?php

namespace App\Http\Controllers\Admin\Approve;

use App\Models\Brand;
use App\Models\Color;
use App\Models\Offer;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use App\Models\Promotion;
use App\Http\Controllers\Controller;
use App\Models\Coupen;

class ApproveController extends Controller
{
    public function index()
    {
        $categories = Category::where('approve_status', '0')->get();
        $color = Color::where('approve_status', '0')->get();
        $brand = Brand::where('approve_status', '0')->get();
        $product = Product::where('approve_status', '0')->get();
        $slider = Slider::where('approve_status', '0')->get();
        $promotion = Promotion::where('approve_status', '0')->get();
        $offer = Offer::where('approve_status', '0')->get();
        $coupen = Coupen::where('approve_status', '0')->get();

        $rowCategoryCount = Category::where('approve_status', '0')->count();
        $rowColorCount = Color::where('approve_status', '0')->count();
        $rowBrandCount = Brand::where('approve_status', '0')->count();
        $rowProductCount = Product::where('approve_status', '0')->count();
        $rowSliderCount = Slider::where('approve_status', '0')->count();
        $rowPromotionCount = Promotion::where('approve_status', '0')->count();
        $rowOfferCount = Offer::where('approve_status', '0')->count();
        $rowCoupenCount = Coupen::where('approve_status', '0')->count();

        return view('pages.admin.approve.index', compact(
            'categories',
            'product',
            'color',
            'brand',
            'slider',
            'promotion',
            'offer',
            'coupen',
            'rowCategoryCount',
            'rowColorCount',
            'rowBrandCount',
            'rowProductCount',
            'rowSliderCount',
            'rowPromotionCount',
            'rowOfferCount',
            'rowCoupenCount',
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

    public function promotion_approval($promotion)
    {
        $promotion = Promotion::findOrFail($promotion);
        $promotion->approve_status = '1';
        $promotion->update();
        return redirect()->back()->with('message', 'Promotion Has Been Approved');
    }

    public function offer_approval($offer)
    {
        $offer = Offer::findOrFail($offer);
        $offer->approve_status = '1';
        $offer->update();
        return redirect()->back()->with('message', 'Offer Has Been Approved');
    }

    public function coupen_approval($coupen)
    {
        $coupen = Coupen::findOrFail($coupen);
        $coupen->approve_status = '1';
        $coupen->update();
        return redirect()->back()->with('message', 'Coupen Has Been Approved');
    }
}
