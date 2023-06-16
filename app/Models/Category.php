<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function perusahaan()
    {
        return $this->belongsToMany(Perusahaan::class, 'category_perusahaan', 'category_id', 'perusahaan_id');
    }
}
