<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galeri_informasi extends Model
{
    protected $table = 'galeri_informasi';
    protected $fillable = ['gambar1', 'gambar2', 'gambar3', 'gambar4'];
}
