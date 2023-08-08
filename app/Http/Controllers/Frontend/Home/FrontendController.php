<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Models\Slider;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Promotion;

class FrontendController extends Controller
{
    public function index()
    {
        $slider = Slider::where('active_status', '1')->where('approve_status', '1')->get();
        $categories = Category::where('active_status', '1')->where('approve_status', '1')->get();
        $promotions = Promotion::where('active_status', '1')->where('approve_status', '1')->get();
        return view('pages.frontend.home.index', ['slider' => $slider, 'categories' => $categories, 'promotions' => $promotions]);
    }

    public function product($category_slug)
    {
        $categories = Category::where('active_status', '1')->where('approve_status', '1')->get();
        $category = Category::where('slug', $category_slug)->first();
        if ($category) {
            $products = $category->products()->get();
            return view('pages.frontend.collections.products', compact('category', 'categories'));
        } else {
            return redirect()->back();
        }
    }
}
