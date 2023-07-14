<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequestForm extends FormRequest
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
            'category_id' => ['required', 'integer'],
            'title' => ['required', 'string', 'max:50'],
            'name' => ['required', 'string', 'max:50'],
            'slug' => ['required', 'string', 'max:50'],
            'brand_id' => ['required', 'integer'],
            'product_information' => ['required', 'string', 'max:5000'],
            'additional_information' => ['required', 'string', 'max:5000'],
            'short_description' => ['required', 'string', 'max:500'],

            'product_original_price' => ['required', 'integer'],
            'product_selling_price' => ['required', 'integer'],
            'product_discount_percent' => ['required', 'integer'],
            'trading' => ['required', 'nullable'],
            'status' => ['required', 'nullable'],
            'product_meta_title' => ['required', 'integer'],
            'product_meta_keyword' => ['required', 'integer'],
            'product_meta_description' => ['required', 'integer'],

            'image' => ['required'],

        ];
    }
}
