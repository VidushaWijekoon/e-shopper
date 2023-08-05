<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequestForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:50'],
            'slug' => ['required', 'string', 'max:25'],
            'short_description' => ['required', 'string', 'max:50'],
            'price' => ['required', 'integer'],
            'image' => ['required', 'mimes:png,jpg,jpeg'],

        ];
    }
}