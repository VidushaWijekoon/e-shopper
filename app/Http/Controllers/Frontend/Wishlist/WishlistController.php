<?php

namespace App\Http\Controllers\Frontend\Wishlist;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WishlistController extends Controller
{
    public function index()
    {
        $categories = Category::where('active_status', '1')->where('approve_status', '1')->get();
        return view('pages.frontend.wishlist.index', ['categories' => $categories]);
    }
}
