<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\data_student;
use Dompdf\Dompdf;
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
        //$student = DB::table('data_students')->get();
        $student = data_student::all();
        return view('student', ['student' => $student]);
    }
    public function help()
    {
        return view('help');
    }
    public function updateData()
    {
        return view('updatedata');
    }
    public function insertData()
    {
        return view('insertdata');
    }
    public function show(data_student $data_student){
        //
        return view('detailstudent', compact('data_student'));
    }
    public function destroy(data_student $data_student){
        //
        data_student::destroy($data_student->id);
        return redirect('/student');
    }
    public function edit(data_student $data_student){
        //
        return view('edit', compact('data_student'));
    }
    public function update(Request $req, data_student $data_student){
        //
        data_student::where('id', $data_student->id)
                    ->update([
                        'nim'=>$req->nim,
                        'name'=>$req->name,
                        'email'=>$req->email,
                        'major'=>$req->major,
                        'handphone'=>$req->handphone,
                        'address'=>$req->address,
                    ]);
         return redirect('/student');
    }
    public function print()
    {
        $student = data_student::all();
        return view('print', ['student' => $student]);
    }
}
