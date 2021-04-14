<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_student;
use App\Helpers\Helper;
use Illuminate\Support\Facades\Storage;
class InsertDataController extends Controller
{
    function insertData(Request $req){
        $data_student= new data_student;
        $data_student->nim=$req->nim;
        $data_student->name=$req->name;
        $data_student->email=$req->email;
        $data_student->major=$req->major;
        $data_student->handphone=$req->handphone;
        $data_student->address=$req->address;
        $data_student->save();
        return redirect('/student');
    }
}
