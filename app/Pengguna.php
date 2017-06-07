<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    //
     protected $table = 'pengguna';
    protected $fillable = ['nama_lengkap','alamat','no_hp'];
    protected $visible = ['nama_lengkap','alamat','no_hp'];
    public $timestamps = true;
}
