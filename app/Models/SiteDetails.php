<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteDetails extends Model
{
    use HasFactory;
    protected $table='site_details';
    protected $fillable=['id','description','facbook','instagram','twitter','youtube','whatsapp','playstore','appstore','college1','college2','college3','college4','college5','course1','course2','course3','course4','course5','phone','email','address'];
}
