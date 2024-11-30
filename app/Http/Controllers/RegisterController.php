<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import the User model

class RegisterController extends Controller
{
    public function index()
    {
        return view('layouts.index');
    }
    public function Showregister()
    {
        return view('register');
    }


    public function doRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/register-list')->with('success', 'User registered successfully.');
    }

    public function registerList()
    {
        $users = User::all();
        return view('register_list', compact('users'));
    }

    public function confirmDelete($id)
    {
        $user = User::findOrFail($id);
        return view('confirm_delete', compact('user'));
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/register-list')->with('success', 'User deleted successfully.');
    }
    public function getEdit($id)
    {
        $user = User::findOrFail($id);
        return view('edit', compact('user'));
    }

    public function doEdit(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect('/register-list')->with('success', 'User updated successfully.');
    }
}
