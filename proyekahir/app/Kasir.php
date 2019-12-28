<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    protected $table = 'kasir';

    protected $primaryKey = "id_kasir";
    protected $fillable= ['nama_kasir','alamat','telepon',];

    public $timestamps = false;
}
