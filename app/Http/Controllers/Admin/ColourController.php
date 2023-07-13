<?php

namespace App\Http\Controllers\Admin;

use App\Models\Colour;
use App\Http\Controllers\Controller;
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
        return view('pages.admin.colour.create', ['colour' => $colour]);
    }

    public function store(ColourRequestForm $request)
    {
        $validatedData = $request->validated();
    }
}
