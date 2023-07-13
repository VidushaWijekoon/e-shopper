<?php

namespace App\Http\Livewire\Admin\BrandColour;

use App\Models\Brand;
use App\Models\Colour;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $brand = Brand::orderBy('id', 'ASC')->paginate(10);
        $colour = Colour::orderBy('id', 'ASC')->paginate(10);
        return view('livewire.admin.brand-colour.index', ['brand' => $brand, 'colour' => $colour]);
    }
}