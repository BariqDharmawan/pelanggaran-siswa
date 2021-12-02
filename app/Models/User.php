<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'id_akun';

    protected $fillable = [
        'id_akun',
        'nama',
        'username',
        'password',
        'role'
    ];

    public $incrementing = false;
    protected $keyType = 'string';

    protected $hidden = [
        'password',
        'remember_token',
    ];

}
