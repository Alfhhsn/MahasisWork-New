<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class studentController extends Controller
{

    public function index(){
        return view('student');
    }

    public function show()
    {
        return view ('registerstudent');
    }

    public function create()
    {
        //student::insert('insert into students (id, Name, Email, Username, Password, Birthdate, Phonenumber, Address, update_at, created_at) values (100, 100, 100, 100, 100, 100, 30, 100, 0, 0)', [1, 'Dayle']);
    }

    public function DataStudent(Request $request)
    {
        $student= student::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'username'=>$request->username,
            'password'=>$request->password,
            'birthdate'=>$request->birthdate,
            'phonenumber'=>$request->phonenumber,
            'address'=>$request->address,
        ]);

        $student['password'] = bcrypt($student['password']);


        return view('student');
    }

    // public function DataStudent(Request $request)
    // {
    //     $request->validate([
    //         // 'name' => $request->name,
    //         'name' => 'required',
    //         // 'email' => $request->email,
    //         'email' => ['required', 'email', 'max:255', 'unique:students,email'],
    //         // 'password' => $request->password,
    //         'username' => 'required|max:255|unique:students,username',
    //         'password' => ['required'],
    //         'birthdate' => ['required'],
    //         'phonenumber' => ['required'],
    //         'address' => ['required'],
            
    //     ]);}
}
