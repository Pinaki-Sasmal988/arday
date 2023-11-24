<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;
    protected $table='facility';
    protected $fillable=['college_id','Auditorium','Transport','Cafeteria','Hostel','Laboratory','WiFi','Own Hospital','Security','Sports','Computers','Gym','Health Insurance','Pick&Drop','Scholarship','NSP','West Bengal Credit Card','Bihar Student Credit Card'];
        public function college(){
        return $this->belongsTo(College::class);
    }
}
