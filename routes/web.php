<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

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

route::middleware(['guest'])->group(function () {
    route::get('/', [SesiController::class, 'index'])->name('login');
    route::post('/', [SesiController::class, 'login']);
});

route::get('/home', function () {
    return redirect('/admin');
});

route::middleware(['auth'])->group(function () {
    route::get('/admin', [AdminController::class, 'index']);
    route::get('/admin/operator', [AdminController::class, 'operator'])->middleware('userAkses:operator');
    route::get('/admin/keuangan', [AdminController::class, 'keuangan'])->middleware('userAkses:keuangan');
    route::get('/admin/marketing', [AdminController::class, 'marketing'])->middleware('userAkses:marketing');
    route::get('/logout', [SesiController::class, 'logout']);
});
