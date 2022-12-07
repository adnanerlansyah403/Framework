<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\User;
use Illuminate\Http\Request;
=======
use Illuminate\Http\Request;
use App\Models\User;
>>>>>>> 43f61716a72c77d9824e09265812e6904166d399

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()
<<<<<<< HEAD
                ->limit(5)
                ->offset(0)
                ->get();
        
        return view('users.index', compact('users'));
=======
            ->limit(5)
            ->offset(0)
            ->get();

        return view("users.list", compact('users'));
    }
    public function detail($id)
    {
        $user = User::query()
                    ->where('id', $id)
                    ->first();

        return view("users.detail", compact('user'));
    }
    public function store(Request $request)
    {
        $payload = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => $request->input('role'),
        ]  

        $user = User::query()->create($payload);
        return redirect()->back();
    } // menambahkan data
    public function create()
    {
        return view('users.create');
    } // menampilkan halaman membuat data
    public function update(Request $request, $id = null)
    {
        $user = User::query()->where('id', $id)->first();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->role = $request->input('role');
        $user->save();
        return redirect()->back();
    } // mengupdate data
    public function destroy ($id)
    {
        $user = User::query()->where('id', $id)->first();
        $user->delete();
        return redirect()->back();
>>>>>>> 43f61716a72c77d9824e09265812e6904166d399
    }
}
