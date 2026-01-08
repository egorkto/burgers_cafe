<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $currentId = $this->product->id;
        return [
            'name' => ['required', 'string', 'max:255', Rule::unique('products', 'name')->ignore($currentId)],
            'description' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric', 'min:0.01'],
            'image' => ['nullable', 'image'],
            'category_id' => ['nullable', 'numeric', 'exists:categories,id'],
        ];
    }
}
