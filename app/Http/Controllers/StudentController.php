<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStudentRequest;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function show(){

        return view('students.addStudent'); 
    }

    public function store(CreateStudentRequest $request){
        $validate = $request->validated();

        return redirect()->route('formAdd')->with('success', 'sent with success');
    }
}
