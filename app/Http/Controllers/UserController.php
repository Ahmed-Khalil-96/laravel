<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
    
    public function create()
    {
        return view('users.create');
    }
    
    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            // Validation rules
        ]);
    
        // Create user
        User::create($request->all());
    
        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }
    
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }
    
    public function edit($id)
    {
        $user = User::find($id); // Retrieve the user from the database based on the ID
        return view("users.edit", ["user" => $user]);
    }
    
    public function update(Request $request, $id)
    {
        // Validate request
        $request->validate([
            // Validation rules
        ]);
    
        // Update user
        $user = User::findOrFail($id);
        $user->update($request->all());
    
        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }
    
    public function destroy($id)
    {
        // Delete user
        User::destroy($id);
    
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
    
}
