<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Colour;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\ColourRequestForm;

class ColourController extends Controller
{
    public function index()
    {
        return view('pages.admin.brand&colour.index');
    }

    public function create()
    {
        $colour = Colour::all();
        $categories = Category::all();
        return view('pages.admin.colour.create', ['colour' => $colour, 'categories' => $categories]);
    }

    public function store(ColourRequestForm $request)
    {
        $validatedData = $request->validated();
        $colour = new Colour;

        $colour->category_id = $validatedData['category_id'];
        $colour->title = strtolower($validatedData['title']);
        $colour->slug = Str::slug($validatedData['slug']);
        $colour->description = strtolower($validatedData['description']);

        $colour->status = $validatedData['status'];

        $colour->save();
        return redirect(route('admin.colour'))->with('message', 'Colour Created Successfully');
    }

    public function show($colour)
    {
        $colour = Colour::findOrFail($colour);
        $allColour = Colour::all();
        return view('pages.admin.colour.show', ['colour' => $colour, 'allColour' => $allColour]);
    }

    public function edit($colour)
    {
        $colour = Colour::findOrFail($colour);
        $allColour = Colour::all();
        $categories = Category::all();
        return view('pages.admin.colour.edit', ['colour' => $colour, 'allColour' => $allColour, 'categories' => $categories]);
    }

    public function update(ColourRequestForm $request, $colour)
    {
        $validatedData = $request->validated();
        $colour = Colour::findOrFail($colour);

        $colour->title = strtolower($validatedData['title']);
        $colour->slug = Str::slug($validatedData['slug']);
        $colour->description = strtolower($validatedData['description']);

        if ($request->hasFile('image')) {
            $uploadPath = 'uploads/colour/';

            if (File::exists($uploadPath)) {
                File::delete($uploadPath);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move($uploadPath, $filename);
            $colour->image = $uploadPath . $filename;
        }

        $colour->status = $validatedData['status'];

        $colour->update();
        return redirect(route('admin.colour'))->with('message', 'colour Updated Successfully');
    }

    public function destroy($colour)
    {
        $colour = Colour::findOrFail($colour);

        $uploadPath = 'uploads/colour/';
        if (File::exists($uploadPath)) {
            File::delete($uploadPath);
        }

        $colour->delete();
        session()->flash('message', 'Colour has been removed');
        return redirect()->back()->with('message', 'Colour has been removed');
    }
}
