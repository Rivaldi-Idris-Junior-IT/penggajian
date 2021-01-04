<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'datapegawai';

    protected $fillable = [
        'nik_pegawai','nama_pegawai','tgl_lahir','alamat','jabatan','agama'
    ];

    protected $hidden = [

    ];

}
