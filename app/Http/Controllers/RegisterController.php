<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:255',
            'username' => 'required|unique:users,username|min:5|max:255',
            'email' => 'required|unique:users,email|email:rfc,dns',
            'password' => 'required|min:8|max:255',
        ]);

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        return redirect('/login');
    }
}
