<?php

namespace App\Http\Controllers\Frontend\Cart;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index()
    {
        $categories = Category::where('active_status', '1')->where('approve_status', '1')->get();
        return view('pages.frontend.cart.index', ['categories' => $categories]);
    }
}