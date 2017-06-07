<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    //
    protected $table = 'produk';
    protected $fillable = ['nama_produk','harga','diskon'];
    protected $visible = ['nama_produk','harga','diskon'];
    public $timestamps = true;
}
