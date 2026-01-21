<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest\StoreRequest;
use App\Models\UserRequest;

class UserRequestController extends Controller
{
    public function store(StoreRequest $request)
    {
        $validated = $request->validated();
        UserRequest::query()->create([
            'name' => $validated['name'],
            'message' => $validated['message'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
        ]);
        return response(201);
    }
}
