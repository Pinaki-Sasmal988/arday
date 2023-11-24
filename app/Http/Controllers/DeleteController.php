<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Cap;
use Illuminate\Http\Request;
use App\Models\UserApplication;
use App\Models\College;
use App\Models\Course;
use App\Models\SubCourse;
use App\Models\Placement;
use App\Models\Facility;
use App\Models\Category;
class DeleteController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth:admin');
    }
    public function deleteUser(Request $request){
        $id=$request->id;
        $user_caps=Cap::where('user_id',$id)->get();
        $user_collg_appls=UserApplication::where('user_id',$id)->get();
        if(count($user_caps)>0){
            foreach($user_caps as $user_cap){
                Cap::where('id',$user_cap->id)->delete();
            }
        }
        if(count($user_collg_appls)>0){
            foreach($user_collg_appls as $user_collg_appl){
            UserApplication::where('id',$user_collg_appl->id)->delete();    
            }
        }
        $delete_user=User::where('id',$id)->delete();
        if($delete_user){
            return redirect('/admin/allUsers')->with('user-deleted','User and its details has been deleted.');
        }
        else{
        return redirect('/admin/allUsers')->with('user-deleted-fail','Error User Cannot be deleted.');
        }
    }
    public function deleteCollege(Request $request){
        $id=$request->id;
        $courses=Course::where('college_id',$id)->get();
        if(count($courses)>0){
            foreach($courses as $course){
                SubCourse::where('course_id',$course->id)->delete();
            }
            foreach($courses as $course){
                Course::where('college_id',$id)->delete();
            }
        }
        Facility::where('college_id',$id)->delete();
        $placements=Placement::where('college_id',$id)->get();
        foreach($placements as $placement){
            if($placement->company1 != 'company_default.svg'){unlink(public_path().'/assets/img/companies/'.$placement->company1);}
            if($placement->company2 != 'company_default.svg'){unlink(public_path().'/assets/img/companies/'.$placement->company2);}
            if($placement->company3 != 'company_default.svg'){unlink(public_path().'/assets/img/companies/'.$placement->company3);}
            if($placement->company4 != 'company_default.svg'){unlink(public_path().'/assets/img/companies/'.$placement->company4);}
            if($placement->company5 != 'company_default.svg'){unlink(public_path().'/assets/img/companies/'.$placement->company5);}                                    
        }
        Placement::where('college_id',$id)->delete();
        $delete_college=College::where('id',$id)->delete();
        if($delete_college){
           return redirect('/admin/allColleges')->with('college-deleted','College and its details has been deleted.'); 
        }
        else{
            return redirect('/admin/allColleges')->with('college-deleted-fail','Deleting Failed, Please Try Later.');
        }
    }
    public function deleteCategory(Request $request){
        $id=$request->id;
        $categories=Category::where('id',$id)->get();
        foreach($categories as $category){
            if($category->category_image != null){
                unlink(public_path().'/assets/img/'.$category->category_image);
            }
        }
        $delete_category=Category::where('id',$id)->delete();
        if($delete_category){
            return redirect('/admin/addCategory')->with('category-deleted','Category and its details has been deleted.');
        }
        else{
            return redirect('/admin/addCategory')->with('category-deleted-fail','Deleting Failed, Please Try Later.');
        }    
    }    
}
