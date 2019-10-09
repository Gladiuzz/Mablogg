<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model 
{
    public $table = 't_kelas';

    protected $fillable = [
        'nama_kelas','jurusan','lokasi_ruangan','nama_wali_kelas'
    ];
    
    
}
?>