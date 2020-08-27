<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusan';
    
    protected $fillable = [
        'nama_jurusan',
        'link_jurusan',
        'created_by'
    ];
}
