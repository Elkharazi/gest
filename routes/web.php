<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/home_Page_One', [HomeController::class, 'home_Page_One'])->name('home_Page_One');
Route::get('/home_Page_Two', [HomeController::class, 'home_Page_Two'])->name('home_Page_Two');
Route::get('/home_OnePage', [HomeController::class, 'home_OnePage'])->name('home_OnePage');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/about_element_1', [HomeController::class, 'about_element_1'])->name('about_element_1');
Route::get('/about_element_2', [HomeController::class, 'about_element_2'])->name('about_element_2');
Route::get('/about_element_3', [HomeController::class, 'about_element_3'])->name('about_element_3');
Route::get('/activities_element_1', [HomeController::class, 'activities_element_1'])->name('activities_element_1');
Route::get('/activities_element_2', [HomeController::class, 'activities_element_2'])->name('activities_element_2');
Route::get('/activities', [HomeController::class, 'activities'])->name('activities');
Route::get('/adventure', [HomeController::class, 'adventure'])->name('adventure');
Route::get('/blog_details', [HomeController::class, 'blog_details'])->name('blog_details');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/camping', [HomeController::class, 'camping'])->name('camping');
Route::get('/clients_element', [HomeController::class, 'clients_element'])->name('clients_element');
Route::get('/climbing', [HomeController::class, 'climbing'])->name('climbing');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/cta_element', [HomeController::class, 'cta_element'])->name('cta_element');
Route::get('/diving', [HomeController::class, 'diving'])->name('diving');
Route::get('/error', [HomeController::class, 'error'])->name('error');
Route::get('/feature_element_1', [HomeController::class, 'feature_element_1'])->name('feature_element_1');
Route::get('/feature_element_2', [HomeController::class, 'feature_element_2'])->name('feature_element_2');
Route::get('/gallery_element', [HomeController::class, 'gallery_element'])->name('gallery_element');
Route::get('/index_rtl', [HomeController::class, 'index_rtl'])->name('index_rtl');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/team_element_1', [HomeController::class, 'team_element_1'])->name('team_element_1');
Route::get('/team_element_2', [HomeController::class, 'team_element_2'])->name('team_element_2');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/testimonial_element', [HomeController::class, 'testimonial_element'])->name('testimonial_element');
Route::get('/throwing', [HomeController::class, 'throwing'])->name('throwing');
Route::get('/video_element', [HomeController::class, 'video_element'])->name('video_element');
Route::get('/parachute', [HomeController::class, 'parachute'])->name('parachute');
Route::get('/index_rtl', [HomeController::class, 'index_rtl'])->name('index_rtl');
Route::get('/index_2', [HomeController::class, 'index_2'])->name('index_3');
Route::get('/index_3', [HomeController::class, 'index_3'])->name('index_3');
Route::get('/news_element_1', [HomeController::class, 'news_element_1'])->name('news_element_1');
Route::get('/news_element_2', [HomeController::class, 'news_element_2'])->name('news_element_2');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
