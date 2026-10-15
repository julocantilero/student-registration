<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show(Request $request)
    {
        return view('result', [
            'studentID' => $request->StudID,
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
        ]);
    }
}