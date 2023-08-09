<?php

namespace App\Http\Livewire\Admin\Coupen;

use App\Models\Coupen;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $title, $slug, $description, $coupen_code;

    public function rules()
    {
        return [
            'title' => 'required|string',
            'slug' => 'required|string',
            'description' => 'required|string',
            'coupen_code' => 'required|string',
        ];
    }

    public function store()
    {
        $validatedData = $this->validate();

        Coupen::create([
            'name' => $this->title,
            'slug' => Str::slug($this->slug),
            'description' => $this->description,
            'coupen_code' => $this->coupen_code,
        ]);

        session()->flash('message', 'Coupen Added Successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function render()
    {
        return view('livewire.admin.coupen.index')
            ->extends('layouts.admin.app')
            ->section('content');
    }
}
