<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table='course';
    protected $fillable=['college_id','course_name'];
    public function college(){
        return $this->belongsTo(College::class);
    }
    public function subcourse(){
        return $this->hasMany(SubCourse::class);
    }
}
