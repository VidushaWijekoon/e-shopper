<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $product = Product::all();
        return view('livewire.admin.product.index', ['product' => $product]);
    }
}
