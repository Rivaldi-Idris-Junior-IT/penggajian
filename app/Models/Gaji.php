<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    
    protected $table = 'datagaji';

    protected $fillable = [
        'jabatan','gaji_pokok','uang_makan','tunjangan','potongan_pph'
    ];

    protected $hidden = [

    ];
}
