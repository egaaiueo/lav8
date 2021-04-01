<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $fillable = [
        	'np',
            'asal',
            'nama',
            'nik',
            'nomt',
            'nohpt',
            'jk',
            'agm',
            'ttl',
            'alamat',
            'jurusan',
            'email',
            'nohp',
    ];
}
