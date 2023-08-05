<?php

namespace App\Http\Controllers\Admin\Promotions;

use App\Http\Controllers\Controller;

class PromotionsController extends Controller
{
    public function index()
    {
        return view('pages.admin.promotions.index');
    }
}