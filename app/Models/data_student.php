<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class data_student extends Model
{
    use HasFactory;
    public $timestamps=false;
    public function insertData()
    {
        return DB::table('data_students')->get();
    }
}
