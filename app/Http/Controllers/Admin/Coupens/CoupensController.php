<?php

namespace App\Http\Controllers\Admin\Coupens;

use App\Http\Controllers\Controller;

class CoupensController extends Controller
{
    public function index()
    {
        return view('pages.admin.promotions-coupens-offers.index');
    }

    public function coupens()
    {
        return view('pages.admin.coupens.index');
    }
}
