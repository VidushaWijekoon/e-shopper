<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\SliderRequestForm;

class SliderController extends Controller
{
    public function index()
    {
        return view('pages.admin.sliders.index');
    }

    public function create()
    {
        $sliders = Slider::all();
        return view('pages.admin.sliders.create', ['sliders' => $sliders]);
    }

    public function store(SliderRequestForm $request)
    {
        $validate = $request->validated();
        $slider = new Slider;

        $slider->title = strtolower($validate['title']);
        $slider->slug = Str::slug($validate['slug']);
        $slider->short_description = strtolower($validate['short_description']);
        $slider->price = $validate['price'];

        if ($request->hasFile('image')) {
            $uploadPath = 'uploads/slider/';
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move($uploadPath, $filename);
            $slider->image = $uploadPath . $filename;
        }

        $slider->status = $validate['status'];
        $slider->created_by = Auth::user()->id;
        $slider->approved_by = Auth::user()->id;

        $slider->save();
        return redirect(route('admin.slider'))->with('message', 'Successfully Created New Slider');
    }

    public function show($slider)
    {
        $slider = Slider::findOrFail($slider);
        return view('pages.admin.sliders.show', ['slider' => $slider]);
    }

    public function edit($slider)
    {
        $slider = Slider::findOrFail($slider);
        return view('pages.admin.sliders.edit', ['slider' => $slider]);
    }

    public function update(SliderRequestForm $request, $slider)
    {
        $validatedData = $request->validated();
        $slider = Slider::findOrFail($slider);

        $slider->title = strtolower($validatedData['title']);
        $slider->slug = Str::slug($validatedData['slug']);
        $slider->short_description = strtolower($validatedData['short_description']);
        $slider->price = $validatedData['price'];

        if ($request->hasFile('image')) {
            $uploadPath = 'uploads/slider/';
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move($uploadPath, $filename);
            $slider->image = $uploadPath . $filename;
        }

        $slider->status = $validatedData['status'];
        $slider->created_by = Auth::user()->id;
        $slider->approved_by = Auth::user()->id;

        $slider->update();
        return redirect(route('admin.slider'))->with('message', 'Successfully Updated Slider');
    }

    public function destroy($slider)
    {
        $slider = Slider::findOrFail($slider);

        $uploadPath = 'uploads/category/';
        if (File::exists($uploadPath)) {
            File::delete($uploadPath);
        }

        $slider->delete();
        return redirect()->back()->with('message', 'Slider has been removed');
    }
}
