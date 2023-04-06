<?php

namespace App\Models;


use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LoginModel extends Model implements AuthenticatableContract
{
    use Authenticatable;
    use HasFactory;
    protected $table        = "login";
    protected $primaryKey   = "id";
    protected $fillable     = ['id', 'user', 'pass', 'level'];
}
