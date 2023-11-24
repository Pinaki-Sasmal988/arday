<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;
    protected $table= 'college';
    protected $fillable=['state_id','college_name','college_type','city','state','certification','estd_date','rating','email','phone','address','key_points','logo','banner','brochure','slider','about'];

    public function course(){
    return $this->hasMany(Course::class);
    }
    public function facility(){
    return $this->hasMany(Facility::class);
    }
    public function placement(){
    return $this->hasMany(Placement::class);
    }
}
