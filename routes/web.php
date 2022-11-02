<?php

use App\Http\Controllers\AdminDepartmentController;
use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('admin')->group(
    function () {
        Route::get("/", function () {
            return "Aasd";
        });
        Route::prefix('departments')
            ->controller(AdminDepartmentController::class)
            ->name('admin.departments.')
            ->group(function () {
                Route::get("/", 'index')->name('index');
                Route::get("/create", 'create')->name('create');
                Route::get("/edit/{department}", 'edit')->name('edit');
            });
    }
);

require __DIR__ . '/auth.php';
