<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    protected $table = 'lowongans';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
        'deskripsi',
        'lokasi',
        'gaji',
        'link',
        'kategori',
        'syarat_ketentuan',
        'jenis_lowongan',
        'logo',
    ];
    
}
