<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admin';
    protected $guard='admin';
        protected $fillable = [
        'name', 'email','mobile', 'password','slider1','slider2','slider3'
    ];
        protected $hidden = [
        'password',
    ];
}
