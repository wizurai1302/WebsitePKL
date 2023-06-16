<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perusahaan extends Model
{
    use HasFactory;
    protected $fillable=[
        'nama',
        'about',
        'keunggulan' ,
        'category_id',
        'jurusan',
        'alamat',
        'photo'
    ];
}
