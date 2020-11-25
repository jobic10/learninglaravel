<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Str;

use function PHPUnit\Framework\isNull;

class FirstController extends Controller
{
    public function index()
    {
        $data = "laravel learning day 5";
        $data = Str::of($data)->lower()->snake("**")->replaceFirst('5', '6');
        echo $data;
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
            $student = new Student;
            $student->username = $request->username;
            $student->email = $request->email;
            $student->passport = $path;
            $student->password = $request->password;
            $student->save();
            $request->session()->flash('flash_user', "User has been added");
        }
        return view('add_member', ['students' => Student::all()]);
    }
    function fetchStudent()
    {
        $students = Student::paginate(4);
        return view('students', ['students' => $students]);
    }
    function delStudent(Request $request, $id)
    {
        $student = Student::find($id);
        if (!is_null($student)) {
            $student->delete();
            $request->session()->flash('flash_user', "User has been deleted");
        } else {
            $request->session()->flash('flash_user', 'User not found');
        }
        return redirect('memberform');
    }
    function updateStudent(Request $request, $id)
    {
        $student = Student::find($id);
        if (!is_null($student)) {
            if ($request->isMethod('POST')) {
                $request->validate(
                    [
                        'username' => 'required',
                        'password' => 'required',
                        'email' => 'required|email',
                        'passport' => 'required'
                    ]
                );
                $path = $request->file('passport')->store('upload');
                $student->username = $request->username;
                $student->email = $request->email;
                $student->passport = $path;
                $student->password = $request->password;
                $student->save();
                $request->session()->flash('flash_user', "User has been updated");
            } else {
                return view('add_member', [
                    'students' => Student::all(),
                    'student' => $student
                ]);
            }
            return redirect('memberform');
        } else {
            $request->session()->flash('flash_user', 'User not found');
        }
    }
}