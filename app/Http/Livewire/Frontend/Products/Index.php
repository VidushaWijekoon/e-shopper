<?php

namespace App\Http\Livewire\Frontend\Products;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class Index extends Component
{

    public $products, $category;

    public function mount($category)
    {
        $this->category = $category;
    }

    public function render()
    {
        $categories = Category::where('active_status', '1')->where('approve_status', '1')->get();
        $this->products = Product::where('category_id', $this->category->id)->get();
        return view('livewire.frontend.products.index', [
            'products' => $this->products,
            'category' => $this->category
        ], compact('categories'));
    }
}
