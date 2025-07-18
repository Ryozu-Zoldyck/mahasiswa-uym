<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $fillable = [
        'user_id',
        'nim',
        'nama',
        'jurusan',
        'semester',
        'alamat',
        'no_telp',
    ];

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
