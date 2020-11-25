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
    }
    public function editStudent(Request $request, $student_id)
    {
        if (!isset($request->username, $request->email, $request->password)) {
            return [
                'status' => -1,
                'msg' => 'Please, fill in all fields!',
            ];
        } else {
            $student = Student::find($student_id);
            if (!$student) {
                return [
                    'status' => 0,
                    'msg' => 'Student with specified ID not found'
                ];
            } else {
                $student->username = $request->username;
                $student->email = $request->email;
                $student->password = $request->password;
                $save = $student->save();
                if ($save) {
                    return [
                        'status' => 1,
                        'msg' => 'Updated!',
                    ];
                } else {
                    return [
                        'status' => 0,
                        'msg' => 'Student Not Updated'
                    ];
                }
            }
        }
    }
}