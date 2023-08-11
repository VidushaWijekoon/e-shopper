<?php

namespace App\Http\Controllers\Frontend\Accounts;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountsDashboardController extends Controller
{
    public function index()
    {
        $categories = Category::where('active_status', '1')->where('approve_status', '1')->get();
        return view('pages.frontend.accounts.index', ['categories' => $categories]);
    }
}
