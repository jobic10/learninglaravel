<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

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
            $request->validate(
                [
                    'username' => 'required',
                    'password' => 'required',
                    'email' => 'required|email',
                    'passport' => 'required'
                ]
            );
            $data = $request->input('username');
            $path = $request->file('passport')->store('upload');
            $request->session()->flash('flash_user', $path);
        }
        return view('add_member');
    }
    function fetchStudent()
    {
        $students = Student::all();
        return view('students', ['students' => $students]);
    }
}