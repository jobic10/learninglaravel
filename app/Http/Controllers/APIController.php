<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Validator;

class APIController extends Controller
{
    //
    public function getStudent()
    {
        return Student::all();
    }
    public function addStudent(Request $request)
    {
        $rules = array(
            'username' => 'required',
            'password' => 'required',
            'email' => 'required|email',
            'passport' => 'required'
        );
        $validate = Validator::make($request->all(), $rules);
        if ($validate->fails()) {
            return
                response()->json(
                    [
                        'status' => -1,
                        'errors' => $validate->errors()
                    ],
                    401
                );
        }
        $student = new Student;
        $student->username = $request->username;
        $student->email = $request->email;
        $student->password = $request->password;
        $path = $request->file('passport')->store('upload');
        $student->passport = $path;
        try {
            $save = $student->save();
            return [
                'status' => 1,
                'msg' => 'Saved',
                'id' => $student->id
            ];
        } catch (\Exception $e) {
            return [
                'status' => 0,
                'msg' => 'Form Not Saved',
                'error' => $e->getMessage()
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
    public function deleteStudent($student_id)
    {
        $student = Student::find($student_id);
        if (!$student) {
            return [
                'status' => 0,
                'msg' => 'Student with specified ID not found'
            ];
        } else {
            $delete = $student->delete();
            if ($delete)
                return ['status' => 1, 'msg' => 'Student Deleted'];
            else
                return ['status' => -1, 'msg' => 'Student not deleted'];
        }
    }
    public function searchStudent($username)
    {
        $query = Student::where('username', 'like', "%$username%")->get();
        $count = count($query);
        if ($count < 1)
            return ['status' => -1, 'msg' => 'Student not found'];
        return ['status' => 1, 'msg' => "$count record" . (($count > 1) ? 's' : '') . " found", 'count' => $count, 'data' => $query];
    }
}