<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\College;
use App\Models\Course;
use App\Models\SubCourse;
use App\Models\UserApplication;
use App\Models\GuestApplication;
use App\Models\Cap;
use App\Models\State;
use App\Models\Facility;
use App\Models\Placement;
use App\Models\Admin;
use App\Models\Slider;
use App\Models\Category;
use App\Models\SiteDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth:admin');
    }
    /******************index begins**************************/
    public function index(){
        $arg='App\Models';
        $user_count=count($this->query_resolver_get($arg.'\User'))-1;
        $college_count=count($this->query_resolver_get($arg.'\College'));
        $cap_count=count($this->query_resolver_get($arg.'\Cap'));
        $userApp_count=count($this->query_resolver_get($arg.'\UserApplication'));
        $guestApp_count=count($this->query_resolver_get($arg.'\GuestApplication'));
        return view('admin.index',compact('user_count','college_count','cap_count','userApp_count','guestApp_count'));
    }
/******************all results begin**************************/    
    public function allColleges(){
        $arg='App\Models';
        $colleges=$this->query_resolver_get($arg.'\College',20);
        $college_categories=$this->query_resolver_get($arg.'\Category');
        return view('admin.adminColleges',compact('colleges','college_categories'));
    }
    public function allUsers(){
        $arg='App\Models';
        $users=$this->query_resolver_get($arg.'\User',20);
        return view('admin.adminUsers',compact('users'));
    }
    public function allUserApp(){
        $arg='App\Models';
        $user_applications=$this->query_resolver_get($arg.'\UserApplication',20);
        return view('admin.adminUserApp',compact('user_applications'));
    }
    public function allGuestApp(){
        $arg='App\Models';
        $guest_applications=$this->query_resolver_get($arg.'\GuestApplication',20);
        return view('admin.adminGuestApp',compact('guest_applications'));
    }
    public function allCAP(){
        $arg='App\Models';
        $cap_applications=$this->query_resolver_get($arg.'\Cap',20);
        return view('admin.adminCap',compact('cap_applications'));
    }
    public function slider(){
        $slider_images=DB::table('slider')->find(1);
        unset($slider_images->id);
        unset($slider_images->created_at);
        unset($slider_images->updated_at);
        //dd($slider_images);
        return view('admin.slider',compact('slider_images'));
    }
    public function sliderSave(Request $request){
        $temp='slider';
        $request->validate([
             'slider1'=> 'image',
             'slider2'=> 'image',
             'slider3'=> 'image'
         ]);
        for($i=1;$i<=3;$i++){
            if($request[$temp.$i] != null){
                $bytes = random_bytes(5);
                $imageName = bin2hex($bytes).time().'.'.$request[$temp.$i]->extension();
                $request[$temp.$i]->move(public_path('assets/img/'),$imageName);
                $query=Slider::where('id',1)->update([
                    $temp.$i => $imageName,

                ]);
            }
        }
        return back();
    }    
/******************all results end**************************/    

/***************update**********************/
public function editCollege(Request $request){
    $arg='App\Models';
    $id=$request->collegeId;
    $college_detail=$this->query_resolver_update($arg.'\College','id',$id);
    $college_courses=$this->query_resolver_update($arg.'\Course','college_id',$id);
    //$college_facilites=$this->query_resolver_update($arg.'\Facility','college_id',$id);
    $college_facilites=DB::table('facility')->where('college_id',$id)->first();
    $placements=DB::table('placement')->where('college_id',$id)->first();
    unset($college_facilites->id);
    unset($college_facilites->college_id);
    unset($college_facilites->created_at);
    unset($college_facilites->updated_at);
    unset($placements->id);
    unset($placements->college_id);
    unset($placements->created_at);
    unset($placements->updated_at);
    return view('admin.editCollege',compact('college_detail','college_courses','college_facilites','placements'));
}
public function editCollegeSave(Request $request){
    if($request->edit_type=='basic_info'){
    $request->validate([
             'college_logo'=> 'image',
             'college_banner'=> 'image',
             'brochure'=>'mimetypes:application/pdf',
         ]);
    $college_name=$request->college_name;
    $college_state=$request->college_state;
    $college_city=$request->college_city;
    $college_type=$request->college_type;
    $college_rating=$request->college_rating;
    $college_estd_date=$request->estd_date;
    $college_certification=$request->college_certification;
    $college_email=$request->college_email;
    $college_phone=$request->college_phone;
    $college_address=$request->college_address;
    $college_about=$request->college_about;
    $college_key_points=$request->college_key0.','.$request->college_key1.','.$request->college_key2;
    if($request->is_popular==null){
        $college_ispopular=0;
    }
    else{
        $college_ispopular=1;
    }

if($request->brochure){
    $brochureName = time().'bro.'.$request->brochure->extension();  
    $request->brochure->move(public_path('assets/brochure'), $brochureName);
}
else{
    $brochureName=College::where('id',$request->college_id)->pluck('brochure')->first();
}

    if($request->college_banner){
    $bannerimageName = time().'3.'.$request->college_banner->extension();  
    $request->college_banner->move(public_path('assets/img/college_banner'), $bannerimageName);
}
else{
    $bannerimageName=College::where('id',$request->college_id)->pluck('banner')->first();
}
    if($request->college_logo){
    $imageName = time().'.'.$request->college_logo->extension();  
    $request->college_logo->move(public_path('assets/img/college_logo'), $imageName);
    $query=College::where('id',$request->college_id)->update([
        'logo'=>$imageName,
        'college_name'=>$college_name,
        'college_type'=>$college_type,
        'city'=>$college_city,
        'state'=>$college_state,
        'certification'=>$college_certification,
        'estd_date'=>$college_estd_date,
        'rating'=>$college_rating,
        'email'=>$college_email,
        'phone'=>$college_phone,
        'address'=>$college_address,
        'banner'=>$bannerimageName,
        'brochure'=>$brochureName,
        'key_points'=>$college_key_points,
        'about'=>$college_about,
        'slider'=>$college_ispopular,
    ]);
        if($query){
        return back()
            ->with('success-binfo-save','Colleges Basic information updated.');
    }
    }
    else{
        $query=College::where('id',$request->college_id)->update([
        'college_name'=>$college_name,
        'college_type'=>$college_type,
        'city'=>$college_city,
        'state'=>$college_state,
        'certification'=>$college_certification,
        'estd_date'=>$college_estd_date,
        'rating'=>$college_rating,
        'email'=>$college_email,
        'phone'=>$college_phone,
        'address'=>$college_address,
        'banner'=>$bannerimageName,
        'brochure'=>$brochureName,
        'key_points'=>$college_key_points,
        'about'=>$college_about,
        'slider'=>$college_ispopular,
    ]);
        if($query){
        return back()
            ->with('success-binfo-save','Colleges Basic information updated.');
    }
    }
    }
  elseif ($request->edit_type=='course_edit') {
    $var='course_id';
    $var2='course';
    $count=$request->count_course;
    //dd($request);
    for($i=1;$i<=$count;$i++){
        
        /*$course_id[]=$request[$var.''.$i];
        $course_value[]=$request[$var2.$i];*/
        $query2=Course::where('id',$request[$var.''.$i])->update(['course_name'=>$request[$var2.$i]]);
    }
            if($query2){
        return back()
            ->with('success-course-save','Course information updated.');
    }
    }
    elseif($request->edit_type=='subcourse_edit'){
        $subcourse_count=$request->subcourse_count;
        $var0='subcourse';
        $var1='sub_course_duration';
        $var2='sub_per_year_fees';
        $var3='subcourse_id';
        for($i=1;$i<=$subcourse_count;$i++){
            /* echo $request[$var0.$i].'  '.str_replace(' Years','',$request[$var1.$i]).'  '.str_replace(' Per Year','',$request[$var2.$i]).'  '.$request[$var3.$i].'<br>  '; */
            $query3=Subcourse::where('id',$request[$var3.$i])->update([
                'subcourse_name'=>$request[$var0.$i],
                'sub_course_duration'=>str_replace(' Years','',$request[$var1.$i]),
                'sub_per_year_fees'=>str_replace(' Per Year','',$request[$var2.$i]),

            ]);
        }
      if($query3){
        return back()
            ->with('success-subcourse-save','Subcourses updated.');
    }  
    }
    elseif($request->edit_type=='facility_edit'){
        $college_id=$request->college_id;
       foreach ($request->except(['_token','_method','edit_type','college_id']) as $key => $part) {
        $query7=Facility::where('college_id',$college_id)->update([
            str_replace('_',' ',$key) => '1',
        ]);
    }
    //if($query7){
        return back()
            ->with('success-facility-save','Facilities updated.');
    //}  
    ////////
    }
    elseif($request->edit_type=='placement_edit'){
        $temp='company';
        $college_id=$request->college_id;
        for($i=1;$i<=5;$i++){
            if($request[$temp.$i] != null){
                $bytes = random_bytes(5);
                $imageName = bin2hex($bytes).time().'.'.$request[$temp.$i]->extension();
                $request[$temp.$i]->move(public_path('assets/img/companies'),$imageName);
                $query=Placement::where('college_id',$college_id)->update([
                    $temp.$i => $imageName,

                ]);
            }
        }
        return back();
    }
}
public function updateCategory(Request $request){
    $temp='category';
    $temp2='category_image';
$total=count($request->cat_id);
for($i=1;$i<=$total;$i++){
    if($request[$temp2.$i] != null){
$img_name=strtolower($request[$temp.$i]).'course.'.$request[$temp2.$i]->extension();
        $request[$temp2.$i]->move(public_path('assets/img/'),$img_name);
Category::where('id',$request->cat_id[$i-1])->update([
        'category'=>$request[$temp.$i],
        'category_image'=>$img_name,
]);
}
else{
    $current_name=Category::where('id',$request->cat_id[$i-1])->first();
    $exte=explode('.',$current_name->category_image);
rename(public_path('/assets/img/'.$current_name->category_image),public_path('/assets/img/'.strtolower($request[$temp.$i]).'course.'.$exte[1]));
    $img_name2=strtolower($request[$temp.$i]).'course.'.$exte[1];
    Category::where('id',$request->cat_id[$i-1])->update([
        'category'=>$request[$temp.$i],
        'category_image'=>$img_name2,
]);
}
}
return back();
}
//edit site details
public function viewsiteDetails(){
    $collgs=College::all('id','college_name');
    $category=Category::all('category');
    $current_details=SiteDetails::first();
    return view('admin.siteDetails',compact('collgs','category','current_details'));
}
public function savesiteDetails(Request $request){
    $query_edit_site=SiteDetails::where('id',1)->update([
        'description'=>$request->footer_description,
        'facebook'=>$request->facebook_link,
        'instagram'=>$request->instagram_link,
        'twitter'=>$request->twitter_link,
        'youtube'=>$request->youtube_link,
        'whatsapp'=>$request->whatsapp_link,
        'playstore'=>$request->playStore_link,
        'appstore'=>$request->appStore_link,
        'college1'=>$request->popcollege1,
        'college2'=>$request->popcollege2,
        'college3'=>$request->popcollege3,
        'college4'=>$request->popcollege4,
        'college5'=>$request->popcollege5,
        'course1'=>$request->popcourse1,
        'course2'=>$request->popcourse2,
        'course3'=>$request->popcourse3,
        'course4'=>$request->popcourse4,
        'course5'=>$request->popcourse5,
        'phone'=>$request->site_phone,
        'email'=>$request->site_email,
        'address'=>$request->site_address,
    ]);
    if ($query_edit_site) {
        return back()->with('success-siteinfo-save','Information updated.');;
    }
}
/***************update ends**********************/
/***************add College-course-subcourse**********************/
public function addCollege(){
    $states=State::all();
    $categories=Category::all();
    return view('admin.addCollege',compact('states','categories'));
}
public function addAdmin(){
    return view('admin.addAdmin');
}
public function addAdminSave(Request $request){
    $request->validate([
             
             'admin_name'=> 'required',
             'email'=> 'required|email',
             'mobile'=> 'required',
             'password'=> 'required',
         ]);
    $query_add_admin=Admin::create([
        'name'=>$request->admin_name,
        'email'=>$request->email,
        'mobile' =>$request->mobile,
        'password'=>bcrypt($request->admin_name),
        ]);
    return back()->with('success','Admin has been added successfully');
}
public function addCollegeSave(Request $request){
$request->validate([
             
             'college_name'=> 'required',
             'college_state'=> 'required|not_in:0',
             'college_city'=> 'required',
             'college_type'=> 'required|not_in:0',
             'college_rating'=> 'required|not_in:0',
             'estd_date'=> 'required',
             'college_certification'=> 'required',
             'college_email'=> 'required',
             'college_phone'=> 'required',
             'college_address'=> 'required',
             'college_key0'=> 'required',
             'college_key1'=> 'required',
             'college_key2'=> 'required',
             'college_about'=> 'required',
             'college_logo'=> 'image',
             'college_banner'=> 'image',
             'brochure'=>'mimetypes:application/pdf'
         ]);
if(($request->is_popular==null)||($request->is_popular=='')){
        $college_ispopular=0;
    }
    else{
        $college_ispopular=1;
    }
    $state=explode(',',$request->college_state);
    if($request->is_popular==null){
        $popular=0;

    }
    $key_points=$request->college_key0.','.$request->college_key1.','.$request->college_key2;
    if($request->college_logo==null){
        $imageName='college_logo.svg';
    }
    else{
        $image=$request->college_logo;
        $imageName = time().'logo.'.$request->college_logo->extension();  
    $request->college_logo->move(public_path('/assets/img/college_logo'), $imageName);
    }
    
    if($request->college_banner==null){
        $bannerimageName='slide1.jpg';
    }
    else{
        $bannerimage=$request->college_banner;
        $bannerimageName = time().'banner.'.$request->college_banner->extension();  
    $request->college_banner->move(public_path('assets/img/college_banner'), $bannerimageName);
    }
    if($request->brochure){
    $brochureName = time().'bro.'.$request->brochure->extension();  
    $request->brochure->move(public_path('assets/brochure'), $brochureName);
    }
    else{
        $brochureName=null;
    }    
    $query5=College::insertGetId([
        'state_id'=>$state[0],
        'college_name'=>$request->college_name,
        'college_type'=>$request->college_type,
        'city'=>$request->college_city,
        'state'=>$state[1],
        'certification'=>$request->college_certification,
        'estd_date'=>$request->estd_date,
        'rating'=>$request->college_rating,
        'email'=>$request->college_email,
        'phone'=>$request->college_phone,
        'address'=>$request->college_address,
        'key_points'=>$key_points,
        'logo'=>$imageName,
        'banner'=>$bannerimageName,
        'brochure'=>$brochureName,
        'slider'=>$college_ispopular,
        'about'=>$request->college_about,
    ]);
    $query6=Facility::create([
        'college_id'=>$query5,
        'Auditorium'=>0,
        'Transport'=>0,
        'Cafeteria'=>0,
        'Hostel'=>0,
        'Laboratory'=>0,
        'WiFi'=>0,
        'Own Hospital'=>0,
        'Security'=>0,
        'Sports'=>0,
        'Computers'=>0,
        'Gym'=>0,
        'Health Insurance'=>0,
        'Pick&Drop'=>0,
        'Scholarship'=>0,
        'NSP'=>0,
        'West Bengal Credit Card'=>0,
        'Bihar Student Credit Card'=>0,
    ]);
    $query_create_placement=Placement::create([
        'college_id'=>$query5,
        'company1'=>'company_default.svg',
        'company2'=>'company_default.svg',
        'company3'=>'company_default.svg',
        'company4'=>'company_default.svg',
        'company5'=>'company_default.svg',
    ]);
    if(($query5 != null)||($query5 != 0)){
        return redirect('/admin/allColleges/edit/'.$query5);
    }
    else{
        return back();
    }
}
public function addCourse(Request $request){
    $request->validate([
             'course_name'=> 'required'
         ]);
    $course_name=$request->course_name;
    $college_id=$request->college_id;
   $query=Course::create([
        'college_id' => $college_id,
        'course_name' => $course_name,
   ]);
   if($query){
    return 'success';
   } 
}
public function addSubCourse(Request $request){
    $request->validate([
             'sub_course_name'=> 'required',
             'sub_course_duration'=> 'required',
             'sub_course_fees'=> 'required',
             'course_id'=> 'required|not_in:0',
         ]);
    $sub_course_name=$request->sub_course_name;
    $sub_course_duration=$request->sub_course_duration;
    $sub_course_fees=$request->sub_course_fees;
    $course_id=$request->course_id;
   $query=SubCourse::create([
        'course_id' => $course_id,
        'subcourse_name' => $sub_course_name,
        'sub_course_duration'=>$sub_course_duration,
        'sub_per_year_fees'=>$sub_course_fees,

   ]);
   if($query){
    return 'success';
   }
}
   public function addCategory(){
    $categories=Category::all();
    return view('admin.addCategory',compact('categories'));
   }
   public function addCategorySave(Request $request){
        $request->validate([
            'category_name'=>'required',
            'category_image'=>'required|image',
        ]);
        $img_name=strtolower($request->category_name).'course.'.$request->category_image->extension();
        $request->category_image->move(public_path('assets/img/'),$img_name);
        Category::create([
            'category'=>$request->category_name,
            'category_image'=>$img_name,
        ]);
        return back()->with('success','Category has been added.');
   } 
/***************add course-subcourse ends**********************/
////////////////////searchContentstart///////////////////////
public function searchContent(Request $request){
    $filter_type=$request->filter_type;
    $content=$request->filter_content;
    $tb='App\Models';
    $college_categories=$this->query_resolver_get($tb.'\Category');
    if($filter_type=='college-select-filter'){
        $colleges=$this->query_search_get($tb.'\College','college_type',$content);
        return view('admin.adminColleges',compact('colleges','college_categories'));
    }
    elseif($filter_type=='college-search-filter'){
        $colleges=$this->query_search_get($tb.'\College','college_name',$content,$filter_type);
        return view('admin.adminColleges',compact('colleges','college_categories'));
    }
    elseif($filter_type=='user-search-filter'){
        $users=$this->query_search_get($tb.'\User','name',$content,$filter_type);
        return view('admin.adminUsers',compact('users'));
    }
    elseif($filter_type=='userapp-search-filter'){
        $user_applications=$this->query_search_get($tb.'\UserApplication','name',$content,$filter_type);
        return view('admin.adminUserApp',compact('user_applications'));
    }
    elseif($filter_type=='guestapp-search-filter'){
        $guest_applications=$this->query_search_get($tb.'\GuestApplication','name',$content,$filter_type);
        return view('admin.adminGuestApp',compact('guest_applications'));
    }
    elseif($filter_type=='cap-search-filter'){
        $cap_applications=$this->query_search_get($tb.'\Cap','name',$content,$filter_type);
        return view('admin.adminCap',compact('cap_applications'));
    }
}
///////////////////////searchContent ends///////////////////////
/******************query resolver*************************/
    public function query_resolver_get($tb,$result_count=0){
        $le=$tb;
        if($result_count==0){
        $query=$le::all();
         return $query;
        }
        else{
             $query=$le::latest('created_at')->paginate($result_count);
             $query2=$le::all();
             return $query;
            }
    }
    public function query_resolver_update($tb,$col,$val){
        //dd($tb.' '.$col.' '.$val);
        if(($tb=='App\Models\College')){
        $up_query=$tb::where($col,$val)->first();
        return $up_query;
        }
        $up_query=$tb::where($col,$val)->get();
        return $up_query;
    }
    public function query_search_get($tb,$col,$search_query,$filter_type=''){
        if($filter_type==''){
        $search_results=$tb::where($col,$search_query)->latest()->paginate(20);
        return $search_results;
    }
    elseif(($filter_type='college-search-filter')||($filter_type='userapp-search-filter')||($filter_type='user-search-filter')($filter_type='guestapp-search-filter')||($filter_type='cap-search-filter')){
     $search_results=$tb::where(function ($q) use ($search_query,$col) {
    $q->where($col, 'like', $search_query . '%')
        ->orWhere($col, 'like', '% ' . $search_query . '%');
        })->latest()->paginate(20);
        //$search_results=$tb::where($col,$search_query)->latest()->paginate(20);
        return $search_results;
    }
    }    
}
