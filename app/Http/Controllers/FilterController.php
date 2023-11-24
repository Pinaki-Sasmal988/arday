<?php

namespace App\Http\Controllers;
use App\Models\College;
use App\Models\State;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function collegeFilter(Request $request){
        $types=collect();
        $results=collect();
        $results_temp=collect();
        $college_type='Different';
        $city='Different Cities';
        $states=State::select('id','state')->get();
        if($request->state_value != null){
            $state=$request->state_value;
        }
        else{
            $state=[];
        }
        if($request->type_value != null){
            $type=$request->type_value;
        }
        else{
            $type=[];
        }    
        ////if-both-filters-applied////
        if((count($type)!==0)&&(count($state)!=0))
        {
            foreach($request->type_value as $type){
                $query[]=College::where('college_type',$type)->get();
            }
            for($a=0;$a<count($query);$a++){
                for($b=0;$b<count($query[$a]);$b++){
                    $types->push($query[$a][$b]);
                }
            }
            for($i=0;$i<count($state);$i++){
                //$var[]=$types->where('state',$request->state_value[$i])->flatten();
                $results_temp->push($types->where('state',$request->state_value[$i])->flatten());
            }
            for($x=0;$x<count($results_temp);$x++){
                 for($y=0;$y<count($results_temp[$x]);$y++){
                    $results->push($results_temp[$x][$y]);
                 }
            }
            return view('collegeList',compact('college_type','city','results','states'));
        }
        ////if only college type selected////
        if((count($type)!=0)&&(count($state)==0)){
            foreach($request->type_value as $type){
                $query[]=College::where('college_type',$type)->get();
            }
            for($a=0;$a<count($query);$a++){
                for($b=0;$b<count($query[$a]);$b++){
                    $results->push($query[$a][$b]);
                }
            }
            return view('collegeList',compact('college_type','city','results','states'));
        }

        //////if only state is selected//////////
        if((count($state)!=0)&&(count($type)==0)){

            foreach($request->state_value as $state){
                $query[]=College::where('state',$state)->get();
            }
            for($a=0;$a<count($query);$a++){
                for($b=0;$b<count($query[$a]);$b++){
                    $results->push($query[$a][$b]);
                }
            }
            return view('collegeList',compact('college_type','city','results','states'));
        }

    }
}
