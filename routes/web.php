<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|/googleLogin
*/

Route::get('/googleLogin', [App\Http\Controllers\HomeController::class, 'googleLogin']);
Route::get('/auth/google/callback',[App\Http\Controllers\HomeController::class, 'googleControl']);
Route::get('/facebookLogin', [App\Http\Controllers\HomeController::class, 'facebookLogin']);
Route::get('/auth/google/callback', [App\Http\Controllers\HomeController::class, 'facebookControl']);

//Route::view('/userUpdateDetails','userUpdateDetails');

Route::get('/userUpdateDetails', function(){
	return view('userUpdateDetails');
});

/**********Main-website-routes***********************/
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index-route');
Route::get('/about', function(){
	return view('about');
});
Route::get('/tandc', function(){
	return view('terms');
});
Route::get('/privacypolicy', function(){
	return view('policy');
});
Route::get('/collegeList/{college_type}/{city}',[App\Http\Controllers\CollegeController::class, 'index']);
/********************Download-Routes-begins***********************/
Route::get('/download/{filename}',[App\Http\Controllers\DownloadController::class,'downloadFile'])->name('download');
/********************Download-Routes-Ends***********************/
Route::get('/collegeDetails/{collegeId}/{collegeName}',[App\Http\Controllers\CollegeController::class, 'collegeDetails'])->name('collegeDetails');
Route::get('/cap',[App\Http\Controllers\ApplicationController::class,'cap_show']);
Route::post('/cap',[App\Http\Controllers\ApplicationController::class,'cap_save']);
Route::get('/myApplications',[App\Http\Controllers\ApplicationController::class,'myApplications'])->middleware('auth');
Route::post('/search/fetch', [App\Http\Controllers\CollegeController::class, 'search_fetch'])->name('search');
Route::get('/collegeList/populateCourse',[App\Http\Controllers\CourseController::class,'getCourse'])->name('populateCourse');
Route::post('/collegeList/submitApplicaton',[App\Http\Controllers\ApplicationController::class,'save'])->name('submit-application');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/collegeList/',[App\Http\Controllers\FilterController::class,'collegeFilter'])->name('collegeFilter');
/**********Main-website-routes-ENDS***********************/

/********************ADMIN-PANEL-ROUTES***********************/

Route::get('/admin',[App\Http\Controllers\AdminController::class,'index'])->name('admin');
Route::get('/admin/allColleges',[App\Http\Controllers\AdminController::class,'allColleges'])->name('allColleges');
Route::get('/admin/allUsers',[App\Http\Controllers\AdminController::class,'allUsers'])->name('allUsers');
Route::get('/admin/allUserApp',[App\Http\Controllers\AdminController::class,'allUserApp'])->name('allUserApp');
Route::get('/admin/allGuestApp',[App\Http\Controllers\AdminController::class,'allGuestApp'])->name('allGuestApp');
Route::get('/admin/allCAP',[App\Http\Controllers\AdminController::class,'allCAP'])->name('allCAP');
Route::get('/admin/login',[App\Http\Controllers\AdminLoginController::class,'showLoginForm'])->name('admin.login.form');
Route::post('/admin/login',[App\Http\Controllers\AdminLoginController::class,'login'])->name('admin.login.submit');
Route::get('/admin/logout',[App\Http\Controllers\AdminLoginController::class,'logout']);
/********************View-Admin-Panel-Routes-Ends***********************/
/********************Edit=Admin-Panel-Routes***********************/
Route::get('/admin/allColleges/edit/{collegeId}',[App\Http\Controllers\AdminController::class,'editCollege'])->name('editCollege');
Route::put('/admin/allColleges/edit/{collegeId}',[App\Http\Controllers\AdminController::class,'editCollegeSave'])->name('editCollegeSave');
Route::put('/admin/addCategory',[App\Http\Controllers\AdminController::class,'updateCategory'])->name('updateCategory');
Route::get('/admin/slider',[App\Http\Controllers\AdminController::class,'slider'])->name('slider');
Route::post('/admin/slider',[App\Http\Controllers\AdminController::class,'sliderSave'])->name('sliderSave');
//////////////////add-course-ajax-route-begins///////////////////////////
Route::post('/admin/addCourse',[App\Http\Controllers\AdminController::class,'addCourse'])->name('addCourse');
Route::post('/admin/addSubCourse',[App\Http\Controllers\AdminController::class,'addSubCourse'])->name('addSubCourse');
//////Addding college route/////
Route::get('/admin/addCollege',[App\Http\Controllers\AdminController::class,'addCollege'])->name('addCollege');
Route::post('/admin/addCollege',[App\Http\Controllers\AdminController::class,'addCollegeSave'])->name('addCollegeSave');
////////adding admin/////////
Route::get('/admin/addAdmin',[App\Http\Controllers\AdminController::class,'addAdmin'])->name('addAdmin');
Route::post('/admin/addAdmin',[App\Http\Controllers\AdminController::class,'addAdminSave'])->name('addAdminSave');
////////add category////////
Route::get('/admin/addCategory',[App\Http\Controllers\AdminController::class,'addCategory'])->name('addCategory');
Route::post('/admin/addCategory',[App\Http\Controllers\AdminController::class,'addCategorySave'])->name('addCategorySave');
//////////////////add-course-ajax-route-ends///////////////////////////
///////////////////edit details for footer///////////////////
Route::get('/admin/editFooter',[App\Http\Controllers\AdminController::class,'viewsiteDetails'])->name('admin-siteDetails');
Route::put('/admin/editFooter',[App\Http\Controllers\AdminController::class,'savesiteDetails'])->name('admin-siteDetailsSave');
//////////////////edit details for footer-end///////////////////
/////////////////searching routes////////////

Route::post('/admin/searchQuery',[App\Http\Controllers\AdminController::class,'searchContent'])->name('searchContent');
/********************Admin-Panel-Routes-Ends***********************/
/////////////////////////deleteing routes////////////////////////////
Route::get('admin/delete/user/{id}',[App\Http\Controllers\DeleteController::class,'deleteUser'])->name('deleteUser');
Route::get('admin/delete/college/{id}',[App\Http\Controllers\DeleteController::class,'deleteCollege'])->name('deleteCollege');
Route::get('admin/delete/category/{id}',[App\Http\Controllers\DeleteController::class,'deleteCategory'])->name('deleteCategory');
////////////////////////////////////////////////////////////////////
///////////////marequee-begins///////////////////////////////////
Route::get('admin/marquee',[App\Http\Controllers\MarqueeController::class, 'showMarquee'])->name('showMarquee');
Route::put('admin/marquee',[App\Http\Controllers\MarqueeController::class, 'saveMarquee'])->name('edit-marquee');
////////////////marquee-ends///////////////////////////////


////////////////Start Student//////////////
Route::get('/myApplication',[StudentController::class,'myApplication']);
Route::get('/commonApplication',[StudentController::class,'commonApplication']);
Route::get('/collageApplication',[StudentController::class,'collageApplication']);
Route::get('/changePassword',[StudentController::class,'changePassword']);
Route::get('/updateProfile',[StudentController::class,'updateProfile']);
Route::get('/contactSupport',[StudentController::class,'contactSupport']);


Route::get('/logout',[App\Http\Controllers\StudentController::class,'logout']);
Route::post('/updatePassword',[StudentController::class,'updatePassword']);
Route::post('/updateInformation',[StudentController::class,'updateInformation']);
Route::post('/collageApplication',[StudentController::class,'collageApplication']);

