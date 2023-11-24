<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class UserApplication extends Model
{
    use HasFactory;
    protected $table='user_applications';
    protected $fillable=['user_id','name','email','mobile','course','college','state','type'];
    public function user(){
        $this->belongsTo(User::class);
    }
}
