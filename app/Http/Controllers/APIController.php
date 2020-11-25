<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class APIController extends Controller
{
    //
    public function getData()
    {
        return Student::all();
    }
}