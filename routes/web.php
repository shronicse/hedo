<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\EventstController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/','FrontController@home');
Route::get('/home','FrontController@home')->name('home');
Route::get('/about','FrontController@about')->name('about');
Route::get('/health','FrontController@health')->name('health');
Route::get('/education','FrontController@education')->name('education');
Route::get('/gallery','FrontController@gallery')->name('gallery');
//Route::get('/project','FrontController@project')->name('project');
Route::get('/contact','FrontController@contact')->name('contact');
Route::get('/adminHome','HomeController@adminHome');
Route::resource('members', MemberController::class);
Route::resource('products', ProductController::class);
Route::resource('projects', ProjectController::class);
Route::resource('contacts', ContactController::class);
Route::resource('events', EventController::class);

Route::get('/adminlogin','AdminController@loginform')->name('adminlogin');
Route::post('/adminlogin','AdminController@loginprocess')->name('adminlogin');
Route::get('/adminregister','AdminController@registerform')->name('adminregister');
Route::post('/adminregister','AdminController@registerprocess')->name('adminregister');





Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
