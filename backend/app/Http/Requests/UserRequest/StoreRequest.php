<?php

namespace App\Http\Requests\UserRequest;

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
            'name' => ['nullable', 'string'],
            'message' => ['required', 'string'],
            'phone' => ['required_without:email', 'string'],
            'email' => ['required_without:phone', 'email'],
        ];
    }
}
