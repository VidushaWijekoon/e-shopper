<?php

namespace App\Http\Controllers\Admin\Promotions;

use App\Models\Promotion;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\PromotionRequestForm;

class PromotionsController extends Controller
{
    public function index()
    {
        return view('pages.admin.promotions-coupens-offers.index');
    }

    public function promotion_index()
    {
        $promotion = Promotion::all();
        return view('pages.admin.promotions.index', ['promotion' => $promotion]);
    }

    public function create()
    {
        return view('pages.admin.promotions.create');
    }

    public function store(PromotionRequestForm $request)
    {
        $validatedData = $request->validated();
        $promotion = new Promotion;

        $promotion->title = $validatedData['title'];
        $promotion->slug = Str::slug($validatedData['slug']);
        $promotion->description = $validatedData['description'];
        $promotion->promotion_starting_date = $validatedData['promotion_starting_date'];
        $promotion->promotion_ends_at = $validatedData['promotion_starting_date'];
        $promotion->promotion_discount = $validatedData['promotion_discount'];
        $promotion->promotion_price = $validatedData['promotion_price'];

        if ($request->hasFile('image')) {
            $uploadPath = 'uploads/promotions/';
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move($uploadPath, $filename);
            $promotion->image = $uploadPath . $filename;
        }

        $promotion->active_status = '0';
        $promotion->approve_status = '0';
        $promotion->created_by = Auth::user()->id;
        $promotion->approved_by = Auth::user()->id;

        $promotion->save();
        return redirect(route('admin.promotions_index'))->with('message', 'Promotion Created Successfully');
    }
}
