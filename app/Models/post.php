<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class post extends Model
{
    use SoftDeletes;
    protected $table = 'post';
    protected $fillable = ['judul', 'subjudul', 'gambar', 'kategorid', 'konten', 'slug', 'user_id'];

    public function kategori () {
        return $this->belongsTo('App\Models\kategori', 'kategorid', 'id');
    }

    public function users () {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
