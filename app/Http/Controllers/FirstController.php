<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',

        ]);
        session()->put('user', $request->username);
        return redirect('profile');
        return $request->input();
    }
    public function logout()
    {
        if (session()->has('user')) {
            $value = session()->pull('user');
        }
        return redirect('login');
    }
    public function member(Request $request)
    {
        if ($request->isMethod('POST')) {
            $data = $request->input('username');
            $request->session()->flash('flash_user', $data);
            return view('add_member');
        } else {
            return view('add_member');
        }
    }
}