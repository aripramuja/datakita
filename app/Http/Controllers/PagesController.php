<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    public function home()
    {
        return view('home');
    }
    public function student()
    {
        return view('student');
    }
    public function help()
    {
        return view('help');
    }
    public function insertData()
    {
        return view('insertdata');
    }
}
