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
        $users = User::all()->where("role", "admin");
        return view("admin/user_table", compact("users"));
    }

    function user()
    {
        $users = User::all()->where("role", "user");
        return view("admin/user_table", compact("users"));
    }

    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');

        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    public function destroy(String $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect(route("user.table"))->with("Success", "User deleted successfully");
    }
}
