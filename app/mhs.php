<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = 'mhs';
    protected $fillable = ['nama','jenis_kelamin','jurusan','semester','alamat','umur','absensi'];
}
