<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ColourRequestForm extends FormRequest
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
            'title' => ['required', 'string', 'max:25'],
            'slug' => ['required', 'string', 'max:25'],
            'description' => ['required', 'string', 'max:5000'],
            'image' => ['required', 'mimes:png,jpg,jpeg'],
            'status' => ['required', 'nullable'],
        ];
    }
}
