<?php

namespace App\Http\Controllers\Admin;

use App\Models\Color;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\ColorRequestForm;

class ColorController extends Controller
{
    public function index()
    {
        return view('pages.admin.color.index');
    }

    public function create()
    {
        $color = Color::all();
        $categories = Category::all();
        return view('pages.admin.color.create', ['color' => $color, 'categories' => $categories]);
    }

    public function store(ColorRequestForm $request)
    {
        $validatedData = $request->validated();
        $color = new Color;

        $color->category_id = $validatedData['category_id'];
        $color->title = strtolower($validatedData['title']);
        $color->slug = Str::slug($validatedData['slug']);
        $color->description = strtolower($validatedData['description']);

        $color->created_by = Auth::user()->id;
        $color->approved_by = Auth::user()->id;
        $color->active_status = 0;
        $color->approve_status = 0;

        $color->save();
        return redirect(route('admin.color'))->with('message', 'color Created Successfully');
    }

    public function show($color)
    {
        $color = color::findOrFail($color);
        $allcolor = color::all();
        return view('pages.admin.color.show', ['color' => $color, 'allcolor' => $allcolor]);
    }

    public function edit($color)
    {
        $color = color::findOrFail($color);
        $allcolor = color::all();
        $categories = Category::all();
        return view('pages.admin.color.edit', ['color' => $color, 'allcolor' => $allcolor, 'categories' => $categories]);
    }

    public function update(colorRequestForm $request, $color)
    {
        $validatedData = $request->validated();
        $color = color::findOrFail($color);

        $color->title = strtolower($validatedData['title']);
        $color->slug = Str::slug($validatedData['slug']);
        $color->description = strtolower($validatedData['description']);

        if ($request->hasFile('image')) {
            $uploadPath = 'uploads/color/';

            if (File::exists($uploadPath)) {
                File::delete($uploadPath);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move($uploadPath, $filename);
            $color->image = $uploadPath . $filename;
        }

        $color->created_by = Auth::user()->id;
        $color->approved_by = Auth::user()->id;
        $color->active_status = 0;
        $color->approve_status = 0;

        $color->update();
        return redirect(route('admin.color'))->with('message', 'color Updated Successfully');
    }

    public function destroy($color)
    {
        $color = Color::findOrFail($color);

        $uploadPath = 'uploads/color/';
        if (File::exists($uploadPath)) {
            File::delete($uploadPath);
        }

        $color->delete();
        session()->flash('message', 'color has been removed');
        return redirect()->back()->with('message', 'color has been removed');
    }
}
