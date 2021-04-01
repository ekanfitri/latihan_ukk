<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['nis', 'nama', 'jk', 'temp_lahir', 'tgl_lahir', 'alamat', 'asal_sekolah', 'kelas', 'jurusan'];
}
