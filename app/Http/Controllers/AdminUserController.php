<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create()
{
    return view('admin.users.create');
}

public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8|confirmed'
    ]);

    $data['password'] = bcrypt($data['password']);
    
    User::create($data);

    return redirect()
        ->route('admin.users.index')
        ->with('success', 'Felhasználó sikeresen létrehozva.');
}
    public function edit($id)
    {
        $user = User::with('events')->findOrFail($id);
        return view('admin.users.update', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        $user->update($data);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'Felhasználó sikeresen frissítve.');
    }
    public function toggleStatus($id)
    {
        $user = User::findOrFail($id);
        $user->status = !$user->status;
        $user->save();

        $status = $user->status ? 'aktiválva' : 'inaktiválva';
        return redirect()
            ->route('admin.users.index')
            ->with('success', "Felhasználó sikeresen {$status}.");
    }
}
