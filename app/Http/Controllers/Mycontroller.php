<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    //passing data basic
    public function percobaan()
    {
    	$a = "novi";
    	return "Nama Saya Adalah ".$a;
    }

    //passing data view
    public function percobaan2()
    {
    	return view ('about');
    }

    //passing data use variable to view
    public function percobaan3()
    {
    	$a = "Candra H";
    	return view ('latihan.saya',compact('a'));
    }

     //passing data basic
    public function percobaan4()
    {
    	$b = "Novita D ";
    	$c = "XII RPL 1";
    	$d = "SMK Assalaam";
    	return view('latihan.bio',compact('b','c','d'));
    }

     public function percobaan5()
    {
    	$a = 1;
    	$b = 2;
    	$c = 3;
    	return view('latihan.seleksi',compact('a','b','c'));
    }

    public function percobaan6()
    {
    	$buah = ['Mangga','jeruk','Apel','Anggur'];
    	return view('latihan.buah',compact('buah'));
    }

     public function percobaan7($data, $data2 = null)
    {
        $array = array ('buah'    => [ 'mangga' => ['harumanis','marijan'],
                                       'alpukat'=> ['hijau','hitam'],
                                       'apel'   => ['fuji','hijau']],

    	                 'hewan'   => ['hamster'=> ['Hamtaro','Hamtari'],
                                       'kucing' => ['persia','anggora'],
                                       'kelinci'=> ['Anggora','persia']], 
                          
    	                 'komputer'=> [ 'asus' => ['456UR','456'],
                                        'dell' => ['Alienware','Inspiron'],
                                        'acer' => ['6930','7780']],
                        );
        
    	if ($data){
            $chen = (array_keys($array[$data]));
        }
        if ($data2){
            $chen = ($array[$data][$data2]);
        }
        return view('tugas',compact('chen','data','data2'));
    }
    
}                                                                                                                                                                                                 
