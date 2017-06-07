<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    //
     protected $table = 'Pengaturan';
    protected $fillable = ['nama_situs','alamat_situs','email'];
    protected $visible = ['nama_situs','alamat_situs','email'];
    public $timestamps = true;
}
