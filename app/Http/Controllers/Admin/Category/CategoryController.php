<?php

namespace App\Http\Controllers\Admin\Category;

use App\Models\Category;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\CategoryRequestForm;


class CategoryController extends Controller
{
    public function index()
    {
        return view('pages.admin.category.index');
    }

    public function create()
    {
        $categories = Category::all();
        return view('pages.admin.category.create', compact('categories'));
    }

    public function store(CategoryRequestForm $request)
    {
        $validatedData = $request->validated();
        $category = new Category;

        $category->title = strtolower($validatedData['title']);
        $category->slug = Str::slug($validatedData['slug']);
        $category->description = strtolower($validatedData['description']);

        if ($request->hasFile('image')) {
            $uploadPath = 'uploads/category/';
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move($uploadPath, $filename);
            $category->image = $uploadPath . $filename;
        }

        $category->meta_title = strtolower($validatedData['meta_title']);
        $category->meta_keyword = strtolower($validatedData['meta_keyword']);
        $category->meta_description = strtolower($validatedData['meta_description']);
        $category->active_status = '0';
        $category->approve_status = '0';
        $category->created_by = Auth::user()->id;
        $category->approved_by = Auth::user()->id;

        $category->save();
        return redirect(route('admin.category'))->with('message', 'Successfully Created New Categoty');
    }

    public function show($category)
    {
        $categories = Category::findOrFail($category);
        return view('pages.admin.category.show', ['categories' => $categories]);
    }

    public function edit($category)
    {
        $categories = Category::findOrFail($category);
        $allCateogry = Category::all();
        return view('pages.admin.category.edit', ['categories' => $categories, 'allCateogry' => $allCateogry]);
    }

    public function update(CategoryRequestForm $request, $category)
    {
        $validatedData = $request->validated();
        $category = Category::findOrFail($category);

        $category->title = strtolower($validatedData['title']);
        $category->slug = Str::slug($validatedData['slug']);
        $category->description = strtolower($validatedData['description']);

        if ($request->hasFile('image')) {
            $uploadPath = 'uploads/category/';

            if (File::exists($uploadPath)) {
                File::delete($uploadPath);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move($uploadPath, $filename);
            $category->image = $uploadPath . $filename;
        }

        $category->meta_title = strtolower($validatedData['meta_title']);
        $category->meta_keyword = strtolower($validatedData['meta_keyword']);
        $category->meta_description = strtolower($validatedData['meta_description']);

        $category->update();
        return redirect(route('admin.category'))->with('message', 'Successfully Update Category');
    }

    public function destroy($category)
    {
        $category = Category::findOrFail($category);

        $uploadPath = 'uploads/category/';
        if (File::exists($uploadPath)) {
            File::delete($uploadPath);
        }

        $category->delete();
        session()->flash('message', 'Category has been removed');
        return redirect()->back()->with('message', 'Category has been removed');
    }

    public function activate($category)
    {
        $category = Category::findOrFail($category);

        if ($category->approve_status == '1') {
            $category->active_status = '1';
            $category->update();
            return redirect()->back()->with('message', 'Category Activated');
        } else {
            return redirect()->back()->with('message', 'You Cannot Activated This Category Need Approved');
        }
    }

    public function dectivate($category)
    {
        $category = Category::findOrFail($category);

        $category->active_status = '0';
        $category->update();
        return redirect()->back()->with('message', 'Successfully Deactivate Category');
    }
}
