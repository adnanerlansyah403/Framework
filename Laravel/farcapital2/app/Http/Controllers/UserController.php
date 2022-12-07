<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()
                ->limit(5)
                ->offset(0)
                ->get();
        
        return view('users.index', compact('users'));
    }
}
