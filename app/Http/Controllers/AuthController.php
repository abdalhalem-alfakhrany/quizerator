<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\error;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        if (!Auth::attempt($request->only(['email', 'password']), true)) {
            return view('auth.login');
        }

        /** @var \App\Models\User **/
        $user = Auth::user();

        if ($user->isAdmin()) {
            return redirect(route('admin.index'));
        } else if ($user->isStudent()) {
            return redirect(route('website.index'));
        }

        return error('role not defined');
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'ph_number' => $request->ph_number,
            'address' => $request->address,
        ]);

        if ($user->isAdmin()) {
            return redirect(route('admin.index'));
        } else if ($user->isStudent()) {
            return redirect(route('website.index'));
        }

        return error('role not defined');
    }

    public function logout()
    {
        Auth::logout();
        return redirect(url()->previous());
    }
}
