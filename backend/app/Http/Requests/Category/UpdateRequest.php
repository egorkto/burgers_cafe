<?php

namespace App\Http\Requests\Category;

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
        $currentId = $this->category->id;
        return [
            "title" => ['required', 'string', 'max:255', Rule::unique('categories', 'title')->ignore($currentId)],
        ];
    }
}
