<?php

namespace App\Http\Controllers;
use App\Models\Marquee;
use Illuminate\Http\Request;

class MarqueeController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth:admin');
    }
    public function showMarquee($value='')
    {
        $marquee_content=Marquee::find(1);
        //dd($marquee_content);
        return view('admin.marquee',compact('marquee_content'));
    }
    public function saveMarquee(Request $request){
        //dd($request->start_date.'    '.$request->end_date.'    '.$request->content);
        $query=Marquee::where('id',1)->update([
            'content'=>$request->content,
            'start_date'=>$request->start_date,
            'finish_date'=>$request->end_date,
        ]);
        if($query){
            return back()->with('success-marquee-save','Information saved Successfully');
        }
    }
}
