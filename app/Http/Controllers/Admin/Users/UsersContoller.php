<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\User;

class UsersContoller extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('pages.admin.users.index', ['users' => $users]);
    }

    public function show($user)
    {
        $user = User::findOrFail($user);
        return view('pages.admin.users.show', ['user' => $user]);
    }
}