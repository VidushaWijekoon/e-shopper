<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Slider;
use App\Models\Category;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        $categories = Category::where('active_status', '1')->where('approve_status', '1')->get();
        return view('pages.frontend.home.index', ['slider' => $slider, 'categories' => $categories]);
    }

    public function product($category_slug)
    {
        $category = Category::where('slug', $category_slug)->first();
        if ($category) {
            $products = $category->products()->get();
            return view('pages.frontend.collections.products', compact('category'));
        } else {
            return redirect()->back();
        }
    }
}
