<?php

namespace App\Http\Livewire\Admin\ColorBrand;

use App\Models\Brand;
use App\Models\Color;
use Livewire\Component;
use Livewire\WithPagination;

class ColorBrand extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $color = Color::orderBy('id', 'ASC')->paginate(10);
        $allBrands = Brand::orderBy('id', 'ASC')->paginate(10);
        return view('livewire.admin.color-brand.color-brand', ['color' => $color, 'allBrands' => $allBrands]);
    }
}
