<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TambahVaksinController;
use App\Http\Controllers\VaksinController;
use App\Http\Controllers\UserVaksinController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserStatusController;
use App\Http\Controllers\KonfirmasiController;
use App\Http\Controllers\terKonfirmasiController;
use App\Http\Controllers\Vaccinated1Controller;
use App\Http\Controllers\Vaccinated2Controller;
use GuzzleHttp\Middleware;

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

// Route::get('/home', [HomeController::class, 'index'])->middleware('auth');
// Route::get('/loginadmin', [LoginAdminController::class, 'index']);
// Route::post('/loginadmin', [LoginAdminController::class, 'authenticate']);
// Route::prefix('admin')->group(function () {
//     Route::get('/', [LoginAdminController::class, 'loginForm']);
//     Route::get('/loginadmin', [LoginAdminController::class, 'loginForm'])->name('admin.login');
// });

// Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
//     Route::get('/loginadmin', [LoginAdminController::class, 'index']);
//     Route::post('/loginadmin', [LoginAdminController::class, 'authenticate']);
// });

Route::post('/logout', [LoginController::class, 'logout']);
Route::resource('/user/home', UserController::class);

Route::middleware('admin')->group(function () {
    Route::get('/loginadmin', [LoginAdminController::class, 'index']);
    Route::post('/loginadmin', [LoginAdminController::class, 'authenticate']);
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/daftarvaksin', [VaksinController::class, 'index']);
    Route::get('/tambahvaksin', [TambahVaksinController::class, 'index']);
    Route::post('/tambahvaksin', [TambahVaksinController::class, 'store']);
    Route::post('/dashboard', [PendaftaranController::class, 'destroy']);
    Route::post('/dashboard', [PendaftaranController::class, 'batalvaksin']);
    Route::post('/updatekonfirmasi', [PendaftaranController::class, 'updatekonfirmasi']);
    Route::post('/updateterkonfirmasi', [PendaftaranController::class, 'updateterkonfirmasi']);
    Route::post('/updatevaccinated1', [PendaftaranController::class, 'updatevaccinated1']);
    Route::post('/cancel', [PendaftaranController::class, 'cancel']);
    Route::post('/cancel3', [PendaftaranController::class, 'cancel3']);
    Route::post('/canceladmin', [PendaftaranController::class, 'canceladmin']);
    Route::post('/canceladmin1', [PendaftaranController::class, 'canceladmin1']);
    Route::get('/konfirmasi/{id}', [KonfirmasiController::class, 'index']);
    Route::get('/terkonfirmasi/{id}', [terKonfirmasiController::class, 'index']);
    Route::get('/vaccinated1/{id}', [Vaccinated1Controller::class, 'index']);
    Route::get('/vaccinated2/{id}', [Vaccinated2Controller::class, 'index']);
    Route::get('/uploadsertif/{id}', [UploadSertifController::class, 'index']);
});

Route::middleware('user')->group(function () {
    Route::get('/home', [HomeController::class, 'index']);
    // Route::get('/tes', [HomeController::class, 'chart']);
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/status', [StatusController::class, 'index']);
    Route::get('/pendaftaran', [PendaftaranController::class, 'index']);
    Route::post('/daftarlagi', [PendaftaranController::class, 'daftarlagi']);
    Route::post('/cancel', [PendaftaranController::class, 'cancel']);
    Route::post('/cancel1', [PendaftaranController::class, 'cancel1']);
    Route::post('/cancel2', [PendaftaranController::class, 'cancel2']);
    Route::post('/updateakun', [PendaftaranController::class, 'updateakun']);
    // Route::post('/pendaftaran', [PendaftaranController::class, 'store']);
    Route::post('/update', [PendaftaranController::class, 'update']);
    Route::get('/akun', [AkunController::class, 'index']);
    Route::get('/userstatus', [UserStatusController::class, 'index']);
    Route::get('/userdaftarvaksin', [UserVaksinController::class, 'index'])->name('userdaftarvaksin');
});
