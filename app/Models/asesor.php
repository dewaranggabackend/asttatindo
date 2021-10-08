<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asesor extends Model
{
    protected $table = 'asesor';
    protected $fillable = ['nama', 'nik', 'lpjk', 'sertifikat', 'sub_klasifikasi', 'kualifikasi', 'alamat', 'status'];
}
