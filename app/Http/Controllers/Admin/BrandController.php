<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Str;
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
        $allBrand = Brand::all();
        $categories = Category::all();
        return view('pages.admin.brand.create', ['allBrand' => $allBrand, 'categories' => $categories]);
    }

    public function store(BrandRequestForm $request)
    {
        $validatedData = $request->validated();
        $brand = new Brand;

        $brand->category_id = $validatedData['category_id'];
        $brand->title = strtolower($validatedData['title']);
        $brand->slug = Str::slug($validatedData['slug']);
        $brand->description = strtolower($validatedData['description']);

        if ($request->hasFile('image')) {
            $uploadPath = 'uploads/brand/';
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

    public function show($brand)
    {
        $brand = Brand::findOrFail($brand);
        $allBrand = Brand::all();
        return view('pages.admin.brand.show', ['brand' => $brand, 'allBrand' => $allBrand]);
    }

    public function edit($brand)
    {
        $brand = Brand::findOrFail($brand);
        $allBrand = Brand::all();
        $categories = Category::all();
        return view('pages.admin.brand.edit', ['brand' => $brand, 'allBrand' => $allBrand, 'categories' => $categories]);
    }

    public function update(BrandRequestForm $request, $brand)
    {
        $validatedData = $request->validated();
        $brand = Brand::findOrFail($brand);

        $brand->title = strtolower($validatedData['title']);
        $brand->slug = Str::slug($validatedData['slug']);
        $brand->description = strtolower($validatedData['description']);

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

        $brand->update();
        return redirect(route('admin.brand'))->with('message', 'Brand Updated Successfully');
    }

    public function destroy($brand)
    {
        $brand = Brand::findOrFail($brand);

        $uploadPath = 'uploads/brand/';
        if (File::exists($uploadPath)) {
            File::delete($uploadPath);
        }

        $brand->delete();
        session()->flash('message', 'Brand has been removed');
        return redirect()->back()->with('message', 'Category has been removed');
    }
}
