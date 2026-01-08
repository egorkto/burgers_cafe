<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:30', 'unique:products,name'],
            'description' => ['required', 'string', 'max:100'],
            'price' => ['required', 'numeric', 'min:0.01'],
            'image' => ['nullable', 'image'],
            'category_id' => ['nullable', 'numeric', 'exists:categories,id'],
        ];
    }
}
