<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visimisi extends Model
{
    protected $table = 'visimisi';
    protected $fillable = ['visi', 'misi1', 'misi2', 'misi3'];
}
