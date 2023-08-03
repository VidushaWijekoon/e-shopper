<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;

class AdminHomepageController extends Controller
{
    public function index()
    {
        return view('pages.admin.home.index');
    }
}
