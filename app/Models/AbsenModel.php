<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsenModel extends Model
{
    use HasFactory;
    protected $table        = "absen";
    protected $primaryKey   = "id";
    protected $fillable     = ['id_karyawan', 'nama', 'jam_masuk', 'latitude', 'longitude', 'altitude', 'alamat', 'gambar', 'jam', 'status'];
}
