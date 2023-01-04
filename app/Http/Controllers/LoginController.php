<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;   


class LoginController extends Controller
{
//    public function reqister()
//    {
//     return view('auth.register');
//    }
    
    public function show()
    {
        return view ('login.login');
    }

    // public function LoginController(Request $request)
    // {
    //     $credential = $request->validate([
    //         'username' => 'required|username',
    //         'password' => 'required'
    //     ]);

    //     if(Auth::attempt($credential)){
    //         $request->session()->regenerate();

    //         return view('student');
    //     }

    //     Session::flash('status', 'failed');
    //     Session::flash('message', 'username or Password wrong!');

    //     return view('login.login');
    // }

    // public function Login(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'username' => 'required',
    //         'password' => 'required',
    //     ]);

    //     if ($validator->fails()) {
    //         return view('login.login')->withErrors($validator)->withInput();
    //     }

    //     $student = student::where('username', $request->username)->first();
    //     if (!$student || !Hash::check($request->password, $student->password)) {
    //         Session::flash('status', 'failed');
    //         Session::flash('message', 'username or Password wrong!');
    //         return view('login.login');
    //     }
    //     auth()->login($student);

    //     return view('/student');    
    // }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'username'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return view('/student');
        }
 
        Session::flash('status', 'login fail');
        Session::flash('message', 'login success');
        return view('login.login');
    }

        // $request->validate([
        //     'username' => 'required',
        //     'password' => 'required',
        // ]);
        // if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
        //     $request->session()->regenerate();
        //     return view()->intended('/student');
        // }

        // return back()->withErrors([
        //     'password' => 'Wrong username or password',
        // ]);
    
 
    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return view('/');
    }
}
