<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        $users = User::where('role', 'user')->get();
        return view("admin/user_table", compact("users"));
    }

    public function destroy(String $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect(route("user.table"))->with("Success", "User deleted successfully");
    }
}
