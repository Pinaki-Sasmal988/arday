<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Placement extends Model
{
    use HasFactory;
        protected $table='placement';
        protected $fillable=['college_id','company1','company2','company3','company4','company5'];
        public function college(){
        return $this->belongsTo(College::class);
    }
}
