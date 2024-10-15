<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\Authentication_Controller;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ForgetPasswordManager;
use App\Http\Controllers\Authetication_Controller;
use App\Http\Controllers\Category_Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Profile_Controller;
use App\Http\Controllers\BookController;
use Symfony\Component\HttpKernel\Profiler\Profile;

use App\Http\Controllers\GalleryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/dashboard',[DashboardController::class, 'dashboard']);

// Route::get('/login',[LoginController::class, 'login']);

// Route::get('/signup',[SignupController::class, 'signup']);

Route::get('/', function(){
    return  view('DashBoard');
})->name('home');;
Route::get('/',[App\Http\Controllers\DashboardController::class,'index'])->name('home');;

//Authentication
Route::get('/login', [LoginController::class,'Login'])->name('Login');
Route::post('/login', [LoginController::class,'Loginpost'])->name('Login.post');
Route::get('/signup', [LoginController::class,'Signup'])->name('Signup');
Route::post('/signup', [LoginController::class,'Signuppost'])->name('Signup.post');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');
Route::group(['middleware'=>'auth'], function(){
    
    //PROFILE
    Route::get('/change_number', [Profile_Controller::class, 'New_PhoneNumber_Route']);

    Route::get('/my_refunded/{id}/delete', [CartController::class, 'destroy3']);

    Route::get('/profile', [Profile_Controller::class, 'Profile_Route']);

    Route::get('/change_passwordV', [Profile_Controller::class, 'Pass_Verification_Route']);
    Route::post('/change_password', [Profile_Controller::class, 'New_Password_Route']);
    Route::get('/change_email', [Profile_Controller::class, 'New_Email_Route']);
    Route::get('/my_account/edit', [LoginController::class, 'edit'])->name('user.edit-profile');
    Route::put('/my_account', [LoginController::class, 'update'])->name('user.update-profile');
    Route::get('/my_account', [LoginController::class, 'Profile_Route'])->name('user.profile');

    Route::get('/verify', function(){return  view('Verify_Page');});
    Route::post('/verify', function(){return  view('Verify_Page');});
    
    
});
Route::get('/enterEmail', [ForgetPasswordManager::class, 'forgetPassword'])->name("forget.password");
Route::post('/enterEmail', [ForgetPasswordManager::class, 'forgetPasswordPost'])->name("forget.password.post");
Route::get('/conPass/{token}',  [ForgetPasswordManager::class, 'resetPassword'])->name("resetPassword")->name("reset.password");
Route::post('/conPass',  [ForgetPasswordManager::class, 'resetPasswordPost'])->name("resetPassword")->name("reset.password.post");


Route::get('/adminlogin',[DashboardController::class,'adminlogin']);
Route::post('/adminlogin', [DashboardController::class,'adminAuth'])->name('adminpost');

//Admin panel
Route::group(['middleware'=>'userid'], function(){
Route::get('/admindashboards',[DashboardController::class,'admindashboard'])->name('admindashboards');
Route::get('/adminanalytics',[DashboardController::class,'adminanalytics']);
Route::get('/admincustomers',[DashboardController::class,'admincustomers']);
Route::get('/admincustomers/{id}/delete',[UserController::class,'destroy']);
Route::get('/adminmanagements',[App\Http\Controllers\productController::class,'index']);
Route::get('productmanagements/create',[App\Http\Controllers\productController::class,'create']);
Route::post('productmanagements/create',[App\Http\Controllers\productController::class,'store']);
Route::get('productmanagements/{id}/edit',[App\Http\Controllers\productController::class,'edit']);
Route::put('productmanagements/{id}/edit',[App\Http\Controllers\productController::class,'update']);
Route::get('productmanagements/{id}/delete',[App\Http\Controllers\productController::class,'destroy']);
});

//products
Route::get('/product_demo/{id}',[DashboardController::class,'details']);
Route::get('/terms',[DashboardController::class,'terms']);

//CATEGORIES
Route::get('/events_category', [Category_Controller::class, 'Events_Category_Route']);
Route::get('/gpu_category', [Category_Controller::class, 'Gpu_Category_Route']);
Route::get('/ram_category', [Category_Controller::class, 'Ram_Category_Route']);
Route::get('/hdd_category', [Category_Controller::class, 'HDD_Category_Route']);
Route::get('/storage_category', [Category_Controller::class, 'SSD_Category_Route']);
Route::get('/motherboard_category', [Category_Controller::class, 'Motherboard_Category_Route']);
Route::get('/portrait_category', [Category_Controller::class, 'Portrait_Category_Route']);
Route::get('/monitor_category', [Category_Controller::class, 'Monitor_Category_Route']);
Route::get('/pre_built_units', [Category_Controller::class, 'PreBuilt_Category_Route']);
Route::get('/psu_category', [Category_Controller::class, 'PSU_Category_Route']);

//Route::get('/', [GalleryController::class, 'index']);

Route::get('/book', [BookController::class,'index']);
// Route::get('Book', BookController::class,);

// Define the route for showing the booking form
Route::get('/booking', [BookController::class, 'showForm']);
Route::post('/booking', [BookController::class, 'book']);

Route::post('/booking', [BookController::class, 'store']);