<?php

namespace App\Http\Controllers\Frontend\Checkout;

use App\Models\Category;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    public function index()
    {
        $categories = Category::where('active_status', '1')->where('approve_status', '1')->get();
        return view(
            'pages.frontend.checkout.index',
            ['categories' => $categories]
        );
    }
}
