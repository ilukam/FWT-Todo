<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create(){
        return view('user.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]); 
        
        $user = User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
        ]);

        session()->flash('success', 'Успешно');
        Auth::login($user);
        return redirect('/tasks');

    }
    public function loginForm(){
        return view('user.login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]); 
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, ])){
            return redirect('/tasks');
        }
        return redirect()->back();
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login.create');

    }

}
