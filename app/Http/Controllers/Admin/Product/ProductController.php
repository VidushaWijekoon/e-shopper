<?php

namespace App\Http\Controllers\Admin\Product;

use App\Models\Brand;
use App\Models\Colour;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\ProductImage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\ProductRequestForm;
use App\Models\Color;

class ProductController extends Controller
{
    public function index()
    {
        return view('pages.admin.product.index');
    }

    public function create()
    {
        $categories = Category::all();
        $colors = Color::all();
        return view('pages.admin.product.create', ['categories' => $categories,  'colors' => $colors]);
    }

    public function store(ProductRequestForm $request)
    {
        $validatedData = $request->validated();

        $category = Category::findOrFail($validatedData['category_id']);

        $product = $category->products()->create([
            'category_id' => $validatedData['category_id'],
            'title' => strtolower($validatedData['title']),
            'name' => strtolower($validatedData['name']),
            'slug' => Str::slug($validatedData['slug']),
            'brand_id' => $validatedData['brand_id'],
            'product_information' => strtolower($validatedData['product_information']),
            'additional_information' => strtolower($validatedData['additional_information']),
            'short_description' => strtolower($validatedData['short_description']),
            'product_original_price' => $validatedData['product_original_price'],
            'product_selling_price' => $validatedData['product_selling_price'],
            'product_discount_percent' => $validatedData['product_discount_percent'],
            'product_quantity' => $validatedData['product_quantity'],
            'tranding' => $validatedData['tranding'],
            'status' => $validatedData['status'],
            'product_meta_title' => strtolower($validatedData['product_meta_title']),
            'product_meta_keyword' => strtolower($validatedData['product_meta_keyword']),
            'product_meta_description' => strtolower($validatedData['product_meta_description']),
            'created_by' => Auth::user()->id
        ]);

        if ($request->hasFile('image')) {
            $uploadPath = 'uploads/products/';

            $i = 0;
            foreach ($request->file('image') as $imageFile) {
                $extension = $imageFile->getClientOriginalExtension();
                $filename = time() . $i++ . '.' . $extension;
                $imageFile->move($uploadPath, $filename);
                $finalImagePathName = $uploadPath .  $filename;

                $product->productImages()->create([
                    'product_id' => $product->id,
                    'image' => $finalImagePathName,
                    'created_by' => Auth::user()->id
                ]);
            }
        }

        if ($request->colors) {
            foreach ($request->colors as $key => $color) {
                $product->productColour()->create([
                    'product_id' => $product->id,
                    'colour_id' => $color,
                    'quantity' => $request->colorquantity[$key] ?? 0,
                    'created_by' => Auth::user()->id
                ]);
            }
        }

        return redirect(route('admin.product'))->with('message', 'Product Created Successfully');
    }

    public function show($product)
    {
        $product = Product::findOrFail($product);
        $categories = Category::all();
        $colors = Color::all();
        return view('pages.admin.product.show', ['product' => $product, 'categories' => $categories,   'Colors' => $colors]);
    }

    public function edit($product)
    {
        $product = Product::findOrFail($product);
        $categories = Category::all();
        $colors = Color::all();
        return view('pages.admin.product.edit', ['product' => $product, 'categories' => $categories, 'colors' => $colors]);
    }

    public function update(ProductRequestForm $request, $product)
    {
        $validatedData = $request->validated();
        $product = Category::findOrFail($validatedData['category_id'])
            ->products()->where('id', $product)->first();

        if ($product) {
            $product->update([
                'category_id' => $validatedData['category_id'],
                'title' => strtolower($validatedData['title']),
                'name' => strtolower($validatedData['name']),
                'slug' => Str::slug($validatedData['slug']),
                'brand_id' => $validatedData['brand_id'],
                'product_information' => strtolower($validatedData['product_information']),
                'additional_information' => strtolower($validatedData['additional_information']),
                'short_description' => strtolower($validatedData['short_description']),
                'product_original_price' => $validatedData['product_original_price'],
                'product_selling_price' => $validatedData['product_selling_price'],
                'product_discount_percent' => $validatedData['product_discount_percent'],
                'product_quantity' => $validatedData['product_quantity'],
                'tranding' => $validatedData['tranding'],
                'status' => $validatedData['status'],
                'product_meta_title' => strtolower($validatedData['product_meta_title']),
                'product_meta_keyword' => strtolower($validatedData['product_meta_keyword']),
                'product_meta_description' => strtolower($validatedData['product_meta_description']),
                'created_by' => Auth::user()->id
            ]);

            if ($request->hasFile('image')) {
                $uploadPath = 'uploads/products/';

                $i = 0;
                foreach ($request->file('image') as $imageFile) {
                    $extension = $imageFile->getClientOriginalExtension();
                    $filename = time() . $i++ . '.' . $extension;
                    $imageFile->move($uploadPath, $filename);
                    $finalImagePathName = $uploadPath .  $filename;

                    $product->productImages()->create([
                        'product_id' => $product->id,
                        'image' => $finalImagePathName,
                        'created_by' => Auth::user()->id
                    ]);
                }
            }


            return redirect(route('admin.product'))->with('message', 'Product Updated Successfully');
        } else {
            return redirect(route('admin.product'))->with('message', 'No such product ID not found');
        }
    }

    public function destroyImage($product_image_id)
    {
        $productImage = ProductImage::findOrFail($product_image_id);

        if (File::exists($productImage->image)) {
            File::delete($productImage->image);
        }

        $productImage->delete();
        return redirect()->back()->with('message', 'Product Image Deleted');
    }

    public function destroy($product)
    {
        $product = Product::findOrFail($product);
        if ($product->productImages) {
            foreach ($product->productImages as $image) {
                if (File::exists($image->image)) {
                    File::delete($image->image);
                }
            }
        }
        $product->delete();
        return redirect()->back()->with('message', 'Product Has Been Deleted');
    }
}
