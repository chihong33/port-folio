<?php

use App\Http\Controllers\ajaxController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::get('/download_resume', function () {
    return response()->make(file_get_contents(public_path('pdf/resume.pdf')), 200, [
        'content-type'=>'application/pdf',
    ]);
});
Route::get('/download_cv', function () {
    return response()->make(file_get_contents(public_path('pdf/cv.pdf')), 200, [
        'content-type'=>'application/pdf',
    ]);
});

Auth::routes();

Route::get('/ajax/project_detail', [ajaxController::class, 'getProjectDetail']);
