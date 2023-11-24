<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestApplication extends Model
{
    protected $table='guest_applications';
    protected $fillable=['name','email','mobile','course','college','state','type'];
    use HasFactory;
}
