<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
class SiswaController extends Controller
{
    //
    public function percobaan()
    {
    	$a = Siswa::all();
    	return view('siswa',compact('a'));
    }

    public function percobaan2($siswa)
    {
    	$siswa = Siswa::find($siswa);
    	return view('siswa',compact('siswa'));
    }
    
}
