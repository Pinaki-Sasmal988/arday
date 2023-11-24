<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\College;
use App\Models\Course;
use App\Models\State;
use App\Models\Facility;
use App\Models\Placement;
class CollegeController extends Controller
{
    //
    public function index(Request $request){
        $states=State::select('id','state')->get();
        $college_type=$request['college_type'];
        $city=$request['city'];
        if($city == 'All Cities'){
            $results=College::where('college_type',$college_type)->get();
        }
        else{
            $results=College::where('college_type',$college_type)->where('city',$city)->get();
        }    
        //dd(count($results));
        if($request->ajax()){
        $college_type=$request->college_type;
        $city=$request->city;
        $view = view('layouts.collegeList-list', compact('results'))->render();
        return response()->json(compact('view','college_type','city','states'));
        //return view('', compact('college_type','city','','states'));
        }
        if($results){
            return view('collegeList',compact('college_type','city','results','states'));
        }
        else{
            return view('collegeList',compact('college_type','city','results','states'));
        }
    }

    public function search_fetch(Request $request){
        if($request->get('query'))
     {
      $query = $request->get('query');
      $data = College::where('college_name', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:inherit">';
      foreach($data as $row)
      {
        $link=url('/collegeDetails/'.$row->id.'/'.$row->college_name);
        $output .= "<li style='margin: 8px 0px;'><a href='$link'>".$row->college_name."</a></li><hr class='horizontal-rule'>";
       //$output .= "<li><a href={{url('/collegeDetails/$row->college_name')}}.">".$row->college_name."</a></li>";
      }
      $output .= '</ul>';
      echo $output;
     }
    }   
    public function collegeDetails(Request $request){
        $facilities=collect();
        $college_id=$request->collegeId;
        $college_name=$request->collegeName;
        $courses=College::find($college_id)->course;
        $facility_details=DB::table('facility')->where('college_id',$college_id)->first();
        $placements=DB::table('placement')->where('college_id',$college_id)->first();
        $states=State::select('id','state')->get();
        unset($placements->id);
        unset($placements->college_id);
        unset($placements->created_at);
        unset($placements->updated_at);
        unset($facility_details->id);
        unset($facility_details->college_id);
        unset($facility_details->created_at);
        unset($facility_details->updated_at);
      $x=count((array)$facility_details);
      foreach($facility_details as $key=>$value){
        if($value==1){
            $facilities->push($key);
        }
      }
        $college_details=College::where('id',$college_id)->first();
        return view('collegeDetails',compact('college_details','courses','placements','facilities','states'));
    }
}
