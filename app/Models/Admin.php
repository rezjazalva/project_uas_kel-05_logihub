<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $guard = 'admin';
    protected $table = 'admins';

    protected $fillable = [
        'name', 'no_induk', 'email', 'password', 'role'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
