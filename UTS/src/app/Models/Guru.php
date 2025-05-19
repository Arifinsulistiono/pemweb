<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Guru extends Model
{
    use HasFactory;
    protected $table = 'gurus';

    protected $fillable = [
        'nip',
        'nama',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'no_hp',
        'email',
        'status_kepegawaian',
        'jabatan',
        'foto',
        'pendidikan_terakhir',
    ];
}
