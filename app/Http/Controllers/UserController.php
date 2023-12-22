<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function index()
    {
        $users = User::all()->where("role", "user");
        return view("admin/user_table", compact("users"));
    }

    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $validatedData = $request->validate([
            "name" => "required|min:3",
            "email" => "required|email",
        ], [
            "name.required" => "Username is required",
            "name.min" => "Username must be at least 3 characters",
            "email.required" => "Email is required",
            "email.email" => "Invalid email format",
        ]);

        $user->name = $validatedData["name"];
        $user->email = $validatedData["email"];

        if ($request->filled("password")) {
            $user->password = Hash::make($request->input("password"));
        }

        $user->save();

        return redirect()->back()->with("success", "Successfully updated your profile");
    }

    public function destroy(String $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect(route("user.index"))->with("success", "User successfully deleted");
    }
}
