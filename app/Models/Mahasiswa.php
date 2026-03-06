<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model; 

class Mahasiswa extends Model
{
    //
    protected $collection = 'mahasiswa';
    protected $fillable = ['nama', 'nim', 'jenis_kelamin', 'usia', 'prodi'];
    protected $connection = 'mongodb';
}
