<?php

namespace App\Http\Livewire\Admin\Coupen;

use App\Models\Coupen;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $title, $slug, $coupen_number, $coupen_percentage, $description, $coupen_id;

    public function rules()
    {
        return [
            'title' => 'required|string',
            'slug' => 'required|string',
            'coupen_number' => 'required|string',
            'coupen_percentage' => 'required|string',
            'description' => 'required|string',
        ];
    }

    // Empty the all the fields after submit the fields
    public function resetInput()
    {
        $this->title = NULL;
        $this->slug = NULL;
        $this->coupen_number = NULL;
        $this->description = NULL;
        $this->coupen_percentage = NULL; // after delete the any id need to reset the form values 
    }

    public function storeCoupen()
    {
        $validatedData = $this->validate();

        Coupen::create([
            'title' => $this->title,
            'slug' => Str::slug($this->slug),
            'coupen_number' => $this->coupen_number,
            'coupen_percentage' => $this->coupen_percentage,
            'description' => $this->description,
            'active_status' => '0',
            'approve_status' => '0',
            'created_by' => Auth::user()->id,
            'approved_by' => Auth::user()->id,
        ]);

        session()->flash('message', 'Coupen Added Successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function openModal()
    {
        $this->resetInput();
    }

    public function showCoupen(int $coupen_id)
    {
        $coupen = Coupen::findOrFail($coupen_id);
        $this->title = $coupen->title;
        $this->slug = $coupen->slug;
        $this->coupen_number = $coupen->coupen_number;
        $this->coupen_percentage = $coupen->coupen_percentage;
        $this->description = $coupen->description;
    }

    public function editCoupen(int $coupen_id)
    {
        $this->coupen_id = $coupen_id;
        $coupen = Coupen::findOrFail($coupen_id);
        $this->title = $coupen->title;
        $this->slug = $coupen->slug;
        $this->coupen_number = $coupen->coupen_number;
        $this->coupen_percentage = $coupen->coupen_percentage;
        $this->description = $coupen->description;
    }

    public function updateCoupen()
    {
        $validatedData = $this->validate();

        Coupen::findOrFail($this->coupen_id)->update([
            'title' => $this->title,
            'slug' => Str::slug($this->slug),
            'coupen_number' => $this->coupen_number,
            'coupen_percentage' => $this->coupen_percentage,
            'description' => $this->description,
            'active_status' => '0',
            'approve_status' => '0',
            'created_by' => Auth::user()->id,
            'approved_by' => Auth::user()->id,
        ]);

        session()->flash('message', 'Coupen Has Been Successfully Updated');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function deleteCoupen($coupen_id)
    {
        $this->coupen_id = $coupen_id;
    }

    public function destroyCoupen()
    {
        Coupen::findOrFail($this->coupen_id)->delete();
        session()->flash('message', 'Coupen Deleted Successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function render()
    {
        $coupens = Coupen::orderBy('id', 'ASC')->paginate(10);
        return view('livewire.admin.coupen.index', ['coupens' => $coupens])
            ->extends('layouts.admin.app')
            ->section('content');
    }
}
