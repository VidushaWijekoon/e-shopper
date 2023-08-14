<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Models\Slider;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Promotion;

class FrontendController extends Controller
{
    public function index()
    {
        $slider = Slider::where('active_status', '1')->where('approve_status', '1')->get();
        $categories = Category::where('active_status', '1')->where('approve_status', '1')->get();
        $promotions = Promotion::where('active_status', '1')->where('approve_status', '1')->get();
        $offers = Offer::where('active_status', '1')->where('approve_status', '1')->get();

        return view('pages.frontend.home.index', [
            'slider' => $slider,
            'categories' => $categories,
            'promotions' => $promotions,
            'offers' => $offers
        ]);
    }

    public function products($category_slug)
    {
        $category = Category::where('slug', $category_slug)->first();
        $categories = Category::where('active_status', '1')->where('approve_status', '1')->get();
        if ($category) {
            $products = $category->products()->get();
            return view('pages.frontend.collections.products.index', compact('category', 'categories'));
        } else {
            return redirect()->back();
        }
    }

    public function productView(string $category_slug, $product_slug)
    {
        $category = Category::where('slug', $category_slug)->first();
        $categories = Category::where('active_status', '1')->where('approve_status', '1')->get();
        if ($category) {
            $product = $category->products()->where('slug', $product_slug)->where('approve_status', '1')->first();
            if ($product) {
                return view('pages.frontend.collections.product_view.index', compact('category', 'product', 'categories'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
}
