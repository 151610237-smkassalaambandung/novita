<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    //
    protected $table = 'siswas';
    protected $fillable = ['nama','alamat','jk'];
    protected $visible = ['nama','alamat','jk'];
    public $timestamps = true;
}
