<?php
use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AudienceController;
use App\Http\Controllers\RoscladController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
});

Route::get('/group',[GroupController::class,'index']);
Route::post('/group',[GroupController::class,'create']);
Route::put('/group/{id}',[GroupController::class,'update']);
Route::delete('/group/{id}',[GroupController::class,'delete']);
//Route::resource('group',GroupController::class);

Route::get('/student',[StudentController::class,'index']);
Route::post('/student',[StudentController::class,'create']);
Route::put('/student/{id}',[StudentController::class,'update']);
Route::delete('/student/{id}',[StudentController::class,'delete']);


Route::get('/subject',[SubjectController::class,'index']);
Route::post('/subject',[SubjectController::class,'create']);
Route::put('/subject/{id}',[SubjectController::class,'update']);
Route::delete('/subject/{id}',[SubjectController::class,'delete']);


Route::get('/teacher',[TeacherController::class,'index']);
Route::post('/teacher',[TeacherController::class,'create']);
Route::put('/teacher/{id}',[TeacherController::class,'update']);
Route::delete('/teacher/{id}',[TeacherController::class,'delete']);


Route::get('/audience',[AudienceController::class,'index']);
Route::post('/audience',[AudienceController::class,'create']);
Route::put('/audience/{id}',[AudienceController::class,'update']);
Route::delete('/audience/{id}',[AudienceController::class,'delete']);


Route::get('/rosclad',[RoscladController::class,'index']);
Route::post('/rosclad',[RoscladController::class,'create']);
Route::put('/rosclad/{id}',[RoscladController::class,'update']);
Route::delete('/rosclad/{id}',[RoscladController::class,'delete']);
