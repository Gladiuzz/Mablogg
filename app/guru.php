<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model 
{
    public $table = 't_guru';

    protected $fillable = [
        'nip','nama_guru','jenis_kelamin','alamat'
    ];
    
    
}
?>