<?php

namespace App\Http\Controllers\Admin\Offers;

use App\Models\Offer;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\OfferRequestForm;

class OffersController extends Controller
{
    public function index()
    {
        return view('pages.admin.promotions-coupens-offers.index');
    }

    public function offer_index()
    {
        $offers = Offer::all();
        return view('pages.admin.offers.index', ['offers' => $offers]);
    }

    public function create()
    {
        return view('pages.admin.offers.create');
    }

    public function store(OfferRequestForm $request)
    {
        $validatedData = $request->validated();
        $offer = new Offer;

        $offer->title = $validatedData['title'];
        $offer->slug = Str::slug($validatedData['slug']);
        $offer->description = $validatedData['description'];
        $offer->offer_starting_date = $validatedData['offer_starting_date'];
        $offer->offer_ends_at  = $validatedData['offer_ends_at'];
        $offer->offer_discount  = $validatedData['offer_discount'];
        $offer->offer_price = $validatedData['offer_price'];

        if ($request->hasFile('image')) {
            $uploadPath = 'uploads/offer/';
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move($uploadPath, $filename);
            $offer->image = $uploadPath . $filename;
        }

        $offer->active_status = '0';
        $offer->approve_status = '0';
        $offer->created_by = Auth::user()->id;
        $offer->approved_by = Auth::user()->id;

        $offer->save();
        return redirect(route('admin.offer_index'))->with('message', 'Offer Created Successfully');
    }

    public function show($offer)
    {
        $offer = Offer::findOrFail($offer);
        return view('pages.admin.offers.show', ['offer' => $offer]);
    }

    public function edit($offer)
    {
        $offer = Offer::findOrFail($offer);
        return view('pages.admin.offers.edit', ['offer' => $offer]);
    }

    public function update(OfferRequestForm $request, $offer)
    {
        $validatedData = $request->validated();
        $offer = Offer::findOrFail($offer);

        $offer->title = $validatedData['title'];
        $offer->slug = Str::slug($validatedData['slug']);
        $offer->description = $validatedData['description'];
        $offer->offer_starting_date = $validatedData['offer_starting_date'];
        $offer->offer_ends_at = $validatedData['offer_ends_at'];
        $offer->offer_discount  = $validatedData['offer_discount'];
        $offer->offer_price  = $validatedData['offer_price'];

        if ($request->hasFile('image')) {
            $uploadPath = 'uploads/offer/';

            if (File::exists($uploadPath)) {
                File::delete($uploadPath);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move($uploadPath, $filename);
            $offer->image = $uploadPath . $filename;
        }

        $offer->update();
        return redirect(route('admin.offer_index'))->with('message', 'Offer Created Successfully');
    }

    public function destroy($offer)
    {
        $offer = Offer::findOrFail($offer);

        $uploadPath = 'uploads/offer/';
        if (File::exists($uploadPath)) {
            File::delete($uploadPath);
        }

        $offer->delete();
        session()->flash('message', 'Offer has been removed');
        return redirect()->back()->with('message', 'Offer has been removed');
    }

    public function activate($offer)
    {
        $offer = Offer::findOrFail($offer);

        if ($offer->approve_status == '1') {
            $offer->active_status = '1';
            $offer->update();
            return redirect()->back()->with('message', 'Offer Activated');
        } else {
            return redirect()->back()->with('message', 'You Cannot Activated This Offer Need Approved');
        }
    }

    public function dectivate($offer)
    {
        $offer = Offer::findOrFail($offer);

        $offer->active_status = '0';
        $offer->update();
        return redirect()->back()->with('message', 'Successfully Deactivate Offer');
    }
}
