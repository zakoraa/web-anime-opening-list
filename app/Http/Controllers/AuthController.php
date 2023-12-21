<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function login()
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect(route("user.index"));
            } else {
                return redirect(route("home"));
            }
        } else {
            return view("/auth/login");
        }
    }

    function signup()
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect(route("user.index"));
            } else {
                return redirect(route("home"));
            }
        } else {
            return view("/auth/signup");
        }
    }

    function loginProcess(Request $request)
    {

        $request->validate([
            "email" => "required",
            "password" => "required"
        ], [
            "email.required" => "Email is required",
            "password.required" => "Password is required"
        ]);

        $loginInfo = [
            "email" => $request->email,
            "password" => $request->password
        ];

        if (Auth::attempt($loginInfo)) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect(route("user.index"))->with("success", "Login success");
            } else {
                return redirect(route("home"))->with("success", "Login success");
            }
        } else {
            return redirect(route("login"))->with("error", "Your email or password is wrong");
        }
    }

    function signupProcess(Request $request)
    {

        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required",
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['role'] = 'user';
        $user = User::create($data);

        if (!$user) {
            return redirect(route("signup"))->with("error", "Signup failed, try again!");
        }

        return redirect(route("login"))->with("Success", "Signup success");
    }

    function logout()
    {
        Auth::logout();
        return redirect(route("login"));
    }
}
