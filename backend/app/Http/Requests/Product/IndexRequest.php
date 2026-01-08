<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'search' => ['nullable', 'string', 'max:100'],
            'category_id' => ['nullable', 'numeric'],
            'sort_by' => ['nullable', 'string', 'in:created,updated,name,price'],
            'desc_sort' => ['nullable'],
        ];
    }
}
