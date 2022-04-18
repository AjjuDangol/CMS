<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EditUserController extends Controller
{
    public function getUsers() {
        $users = User::orderBy('id', 'Asc')->get();
        return view('admin.users.allUser', compact('users'));
    }

    //function for editing user
    public function editUser($id) {
        $user = User::find($id);
        return view('admin.users.updateUserRole', compact('user'));
    }

    //function for updating user data
    public function updateUser(Request $request) {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->roles = $request->roles;
        $user->save();
        return back()->with('message', 'User updated successfully.');
    }
}
