<?php

use App\Http\Controllers\BricksDoneController;
use App\Http\Controllers\InvestorController;
use App\Http\Controllers\WorkerBorrowNreturnController;
use App\Http\Controllers\WorkerController;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// workers routes
Route::get('workers/index', [WorkerController::class, 'index'])->name('worker.index');
Route::post('workers/store', [WorkerController::class, 'store'])->name('worker.store');
Route::post('workers/delete', [WorkerController::class, 'destroy'])->name('worker.destroy');
Route::post('workers/edit', [WorkerController::class, 'edit'])->name('worker.edit');
Route::post('workers/update', [WorkerController::class, 'update'])->name('worker.update');
Route::get('workers/alldata', [WorkerController::class, 'data'])->name('worker.data');

// workers borrow routes
Route::get('workers/borrowNreturn/index', [WorkerBorrowNreturnController::class, 'index'])->name('worker.borrow.index');
Route::post('workers/borrowNreturn/borrowNow', [WorkerBorrowNreturnController::class, 'borrow_amount'])->name('worker.borrow');
Route::post('workers/borrowNreturn/returnNow', [WorkerBorrowNreturnController::class, 'return_amount'])->name('worker.return');
Route::get('workers/borrowNreturn/history/{id}', [WorkerBorrowNreturnController::class, 'history'])->name('worker.history');


// bricks routes
Route::get('workers/bricksDone/index', [BricksDoneController::class, 'index'])->name('worker.bricksDone.index');
Route::post('workers/bricksDone/addBricks', [BricksDoneController::class, 'create'])->name('worker.add.bricksDone');
Route::get('workers/bricksDone/view/{id}', [BricksDoneController::class, 'view'])->name('worker.bricksDone.view');

// investor routes start here

Route::group(
    [
        'middleware' => 'auth',
        'prefix' => 'front/investor',
        'as' => 'investor.'
    ],
    function () {
        Route::get('index', [InvestorController::class, 'index'])->name('index');
        Route::post('store', [InvestorController::class, 'store'])->name('store');
        Route::post('destroy', [InvestorController::class, 'destroy'])->name('destroy');
        Route::post('edit', [InvestorController::class, 'edit'])->name('edit');
        Route::post('update', [InvestorController::class, 'update'])->name('update');
    }
);
