<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
class CourseController extends Controller
{
    //
    public function getCourse(Request $request)
    {
        $college_id=$request->college_id;
        $courses=Course::select('id','course_name')->where('college_id',$college_id)->get();
        $output='<option value="" data-id="">Select Course</option>';
        if(count($courses)>0){
        foreach($courses as $course){
            $value=$course->course_name;
            $id=$course->id;
            $output.="<option value='$value' data-id=$id>".$value."</option>";

        }
        }
        else{
            $output.='<option value= data-id=>No option Found</option>';
        }
        echo $output;
    }
}
