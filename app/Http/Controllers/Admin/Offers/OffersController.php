<?php

namespace App\Http\Controllers\Admin\Offers;

use App\Http\Controllers\Controller;

class OffersController extends Controller
{
    public function index()
    {
        return view('pages.admin.offers.index');
    }
}