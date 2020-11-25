<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class APIController extends Controller
{
    //
    public function getStudent()
    {
        return Student::all();
    }
    public function addStudent(Request $request)
    {
        if (!isset($request->username, $request->email, $request->password) || is_null($request->file('passport'))) {
            return [
                'status' => -1,
                'msg' => 'Please, fill in all fields!'
            ];
        }
        $student = new Student;
        $student->username = $request->username;
        $student->email = $request->email;
        $student->password = $request->password;
        $path = $request->file('passport')->store('upload');
        $student->passport = $path;
        $save = $student->save();
        if ($save) {
            return [
                'status' => 1,
                'msg' => 'Saved',
                'id' => $student->id
            ];
        } else {
            return [
                'status' => 0,
                'msg' => 'Form Not Saved'
            ];
        }
        return Student::all();
    }
}