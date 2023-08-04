<?php

namespace App\Http\Controllers\Admin\Brand;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Admin\Color;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\BrandRequestForm;
use App\Http\Requests\Admin\ColorRequestForm;

class BrandController extends Controller
{

    public function index()
    {
        return view('pages.admin.color-brand.index');
    }

    public function create()
    {
        $brand = Brand::all();
        $categories = Category::where('active_status', '1')->get();
        return view('pages.admin.brand.create', ['brand' => $brand, 'categories' => $categories]);
    }

    public function save(BrandRequestForm $request)
    {
        $validatedData = $request->validated();
        $brand = new Brand();

        $brand->category_id = $validatedData['category_id'];
        $brand->title = strtolower($validatedData['title']);
        $brand->slug = Str::slug($validatedData['slug']);

        if ($request->hasFile('image')) {
            $uploadPath = 'uploads/brand/';
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move($uploadPath, $filename);
            $brand->image = $uploadPath . $filename;
        }

        $brand->description = strtolower($validatedData['description']);
        $brand->created_by = Auth::user()->id;
        $brand->approved_by = Auth::user()->id;
        $brand->active_status = 0;
        $brand->approve_status = 0;

        $brand->save();
        return redirect(route('admin.color-brand'))->with('message', 'Brand Created Successfully');
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
        $categories = Category::where('active_status', '1')->get();
        return view('pages.admin.brand.edit', ['brand' => $brand, 'allBrand' => $allBrand, 'categories' => $categories]);
    }

    public function update(BrandRequestForm $request, $brand)
    {
        $validatedData = $request->validated();
        $brand = brand::findOrFail($brand);

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

        $brand->created_by = Auth::user()->id;
        $brand->approved_by = Auth::user()->id;
        $brand->active_status = 0;
        $brand->approve_status = 0;

        $brand->update();
        return redirect(route('admin.color-brand'))->with('message', 'Brand Updated Successfully');
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
        return redirect()->back()->with('message', 'Brand has been removed');
    }

    public function activate($brand)
    {
        $brand = Brand::findOrFail($brand);

        if ($brand->approve_status == '1') {
            $brand->active_status = '1';
            $brand->update();
            return redirect()->back()->with('message', 'Brand Activated');
        } else {
            return redirect()->back()->with('message', 'You Cannot Activated This Brand Need Approved');
        }
    }

    public function dectivate($brand)
    {
        $brand = Brand::findOrFail($brand);

        $brand->active_status = '0';
        $brand->update();
        return redirect()->back()->with('message', 'Successfully Deactivate Brand');
    }
}
