<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    use HasFactory;
    protected $table        = "login";
    protected $primaryKey   = "id";
    protected $fillable     = ['id', 'user', 'pass', 'level'];
}
