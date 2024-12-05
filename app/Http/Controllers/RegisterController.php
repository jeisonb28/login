<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller {
    public function create() {
        return view('auth.register');
    }

    public function store(Request $request) {
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password'=> bcrypt($request->password),
        'role'=>'admin'
    ]);

    //auth()->login($user);

    return redirect()->to('/');
}
}
