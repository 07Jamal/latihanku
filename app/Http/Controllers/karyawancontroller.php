<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\karyawan;

class karyawancontroller extends Controller
{
    public function index(){
        $karyawan = karyawan::all();

        return view('welcome',compact('karyawan'));
    }
}
