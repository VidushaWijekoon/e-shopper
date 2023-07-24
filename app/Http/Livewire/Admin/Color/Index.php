<?php

namespace App\Http\Livewire\Admin\Color;

use App\Models\Color;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $color = Color::orderBy('id', 'ASC')->paginate(10);
        return view('livewire.admin.color.index', ['color' => $color]);
    }
}
