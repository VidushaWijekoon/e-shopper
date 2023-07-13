<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Colour;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\BrandRequestForm;

class BrandController extends Controller
{
    public function index()
    {
        return view('pages.admin.brand&colour.index');
    }

    public function create()
    {
        $brand = Brand::all();
        $category = Category::where('status', '0');
        return view('pages.admin.brand.create', ['brand' => $brand, 'category' => $category]);
    }

    public function store(BrandRequestForm $request)
    {
        $validatedData = $request->validated();
        $brand = new Brand;

        $brand->title = $validatedData['title'];
        $brand->slug = Str::slug($validatedData['slug']);
        $brand->description = $validatedData['description'];

        if ($request->hasFile('image')) {
            $uploadPath = 'uploads/brand/';

            if (File::exists($uploadPath)) {
                File::delete($uploadPath);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move($uploadPath, $filename);
            $brand->image = $uploadPath . $filename;
        }

        $brand->status = $validatedData['status'];

        $brand->save();
        return redirect(route('admin.brand'))->with('message', 'Brand Created Successfully');
    }
}
