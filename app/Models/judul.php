<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class judul extends Model
{
    protected $table = 'judul';
    protected $fillable = ['judul', 'subjudul'];
}
