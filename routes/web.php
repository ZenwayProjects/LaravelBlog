<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
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

Route::get('/',HomeController::class);


Route::get('courses', [CourseController::class, 'index'])->name('courses.index'); 

Route::get('courses/create', [CourseController::class, 'create'])->name('courses.create');

Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');

// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {

//     if($categoria){
//         return "Bienvenid@ al curso de $curso, de la categoria $categoria";
//     }else{
//         return "Bienvenid@ al curso de : $curso";
//     }

    
// });
