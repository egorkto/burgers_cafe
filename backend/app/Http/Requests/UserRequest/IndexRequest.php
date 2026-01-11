<?php

namespace App\Http\Requests\UserRequest;

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
            'sort_by' => ['nullable', 'string', 'in:date,message,name'],
            'desc_sort' => ['nullable'],
        ];
    }
}
