<?php

namespace App\Http\Controllers\Admin\Approve;

use App\Models\Color;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;

class ApproveController extends Controller
{
    public function index()
    {
        $categories = Category::where('approve_status', '0')->get();
        $color = Color::where('approve_status', '0')->get();
        $product = Product::where('approve_status', '0')->get();

        $rowCategoryCount = Category::where('approve_status', '0')->count();
        $rowColorCount = Color::where('approve_status', '0')->count();
        $rowProductCount = Product::where('approve_status', '0')->count();

        return view('pages.admin.approve.index', compact('categories', 'product', 'color', 'rowCategoryCount',  'rowColorCount', 'rowProductCount'));
    }

    public function category_edit($category)
    {
        $category = Category::findOrFail($category);
        $category->approve_status = '1';

        $category->update();
        return redirect()->back()->with('message', 'Successfully Update Category Status');
    }
}
