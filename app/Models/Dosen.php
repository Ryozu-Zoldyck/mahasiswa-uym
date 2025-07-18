<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';

    protected $fillable = [
        'user_id',
        'nip',
        'nama',
        'jurusan',
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
