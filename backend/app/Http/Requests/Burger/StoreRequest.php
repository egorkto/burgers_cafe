<?php

namespace App\Http\Requests\Burger;

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
            'name' => ['require', 'string', 'max:30', 'unique:burgers,name'],
            'description' => ['require', 'string', 'max:100'],
            'price' => ['require', 'float', 'min:0.01'],
            'currencyId' => ['require', 'int', 'exists:currencies,id'],
        ];
    }
}
