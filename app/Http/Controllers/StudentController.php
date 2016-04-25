<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Model;
use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class StudentController extends Controller
{

	public function create()
    {
        return view('auth.register');
    }

    public function store(Request $data)
    {
        $this->validate($data, [
            'name' => 'required|max:255',
            'matricule' => 'required|min:8',
            'email' => 'required|email|max:255',
            'phone' => 'required|min:9',
            'date_of_birth' => '',
            'password' => 'required|min:6|confirmed',
            ]);

        Student::create([
            'name' => $data['name'],
            'matricule' => $data['matricule'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => bcrypt($data['password']),
            ]);
        return redirect('/auth/register');
    }

    public function getLogin()
    {
        
        return view('auth/login');
    }

    public function login(Request $data)
    {
        $email = $data->input('email');
        $password = $data->input('password');

        if(Auth::attempt(['email' => $email, 'password' => $password])){
            return redirect('/home');
        }
        else
            return redirect('/login');
    }
}
