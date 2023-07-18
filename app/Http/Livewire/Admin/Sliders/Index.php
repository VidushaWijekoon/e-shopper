<?php

namespace App\Http\Livewire\Admin\Sliders;

use App\Models\Slider;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {

        $sliders = Slider::orderBy('id', 'DESC')->paginate();
        return view('livewire.admin.sliders.index', ['sliders' => $sliders]);
    }
}
