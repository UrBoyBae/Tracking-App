<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KaryawanModel extends Model
{
    use HasFactory;
    protected $table        = "karyawan";
    protected $primaryKey   = "id_karyawan";
    protected $fillable     = ['id_karyawan', 'nama', 'nama', 'alamat', 'jk', 'hp', 'password'];

    public function getData($perPage)
    {
        return $this->paginate($perPage);
    }
}
