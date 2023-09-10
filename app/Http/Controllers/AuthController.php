<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function verifyLogin(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'email|required|exists:users,email',
        ]);
        if ($validatedData) {

            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return redirect()->route('learning.materials')->with('message', 'Logged In Successfully');
            } else {
                return redirect()->route('login')->with('message', 'Invalid Password');
            }
        }
    }
    public function register()
    {
        return view('auth.register');
    }
    public function verifyRegister(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'email|required|unique:users',
            'password' => 'required | min:8 ',
            'confirmpassword' => 'required|min:8|same:password',
        ]);
        if ($validatedData && ($validatedData['password'] === $validatedData['confirmpassword'])) {
            $newuser = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
            ]);
            Auth::login($newuser);
            return redirect()->route('home')->with(['message', 'Successfully registered']);
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('home')->with('message', 'Logged out successfully');
    }
}
