<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function attempt(LoginRequest $request)
    {
        $validated = $request->validated();
        $attempt = Auth::guard('admin')->attempt([
            'email' => $validated['email'],
            'password' => $validated['password'],
        ], $validated['remember'] ?? false);
        if ($attempt) {
            $request->session()->regenerate();
            return redirect('/');
        }
        return redirect('/login');
    }
}
