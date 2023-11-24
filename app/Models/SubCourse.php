<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCourse extends Model
{
    use HasFactory;
        protected $table='subcourse';
        protected $fillable=['course_id','subcourse_name','sub_course_duration','sub_per_year_fees'];
        public function course(){
        return $this->belongsTo(Course::class);
    }
}
