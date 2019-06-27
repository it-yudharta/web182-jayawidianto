<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mhs extends Model
{
    protected $table = 'mhs';
    protected $fillable = ['nama','jenis_kelamin','jurusan','semester','alamat','umur','absensi'];
}
