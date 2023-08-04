<?php

namespace App\Http\Controllers\Admin\Color;

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
        return view('pages.admin.color-brand.index');
    }

    public function create()
    {
        $color = Color::all();
        $categories = Category::where('active_status', '1')->get();
        return view('pages.admin.color.create', ['color' => $color, 'categories' => $categories]);
    }

    public function store(ColorRequestForm $request)
    {
        $validatedData = $request->validated();
        $color = new Color();

        $color->category_id = $validatedData['category_id'];
        $color->title = strtolower($validatedData['title']);
        $color->slug = Str::slug($validatedData['slug']);

        if ($request->hasFile('image')) {
            $uploadPath = 'uploads/color/';
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move($uploadPath, $filename);
            $color->image = $uploadPath . $filename;
        }

        $color->description = strtolower($validatedData['description']);
        $color->created_by = Auth::user()->id;
        $color->approved_by = Auth::user()->id;
        $color->active_status = 0;
        $color->approve_status = 0;

        $color->save();
        return redirect(route('admin.color-brand'))->with('message', 'color Created Successfully');
    }

    public function show($color)
    {
        $color = Color::findOrFail($color);
        $allcolor = Color::all();
        return view('pages.admin.color.show', ['color' => $color, 'allcolor' => $allcolor]);
    }

    public function edit($color)
    {
        $color = Color::findOrFail($color);
        $allcolor = Color::all();
        $categories = Category::where('active_status', '1')->get();
        return view('pages.admin.color.edit', ['color' => $color, 'allcolor' => $allcolor, 'categories' => $categories]);
    }

    public function update(ColorRequestForm $request, $color)
    {
        $validatedData = $request->validated();
        $color = Color::findOrFail($color);

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
        return redirect(route('admin.color-brand'))->with('message', 'Color Updated Successfully');
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

    public function activate($color)
    {
        $color = Color::findOrFail($color);

        if ($color->approve_status == '1') {
            $color->active_status = '1';
            $color->update();
            return redirect()->back()->with('message', 'color Activated');
        } else {
            return redirect()->back()->with('message', 'You Cannot Activated This Color Need Approved');
        }
    }

    public function dectivate($color)
    {
        $color = Color::findOrFail($color);

        $color->active_status = '0';
        $color->update();
        return redirect()->back()->with('message', 'Successfully Deactivate Color');
    }
}
