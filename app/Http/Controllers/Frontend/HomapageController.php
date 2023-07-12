<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomapageController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('pages.frontend.home.index', compact('categories'));
    }
}
