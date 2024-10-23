<?php
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\newsConroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/siswa.index', function () {
//     return view('siswa.index');
// })->middleware(['auth', 'verified'])->name('siswa.index');


// Route::get('/guru.index', function () {
//     return view('guru.index');
// })->middleware(['auth', 'verified'])->name('guru.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::group(['middleware' => ['auth', 'role:siswa']], function () {

    // Route::get('/siswa/index', [SiswaController::class, 'index'])->name('siswa.index');
    // Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
    // Route::post('/siswa/store', [SiswaController::class, 'store'])->name('siswa.store');


    Route::resource('/siswa', SiswaController::class);
});


// Route khusus untuk role "guru"
Route::group(['middleware' => ['auth', 'role:guru']], function () {
    // Route::get('/guru/index', [GuruController::class, 'index'])->name('guru.index');
    Route::resource('guru', GuruController::class);
    // Tambahkan route lain khusus guru di sini
});

Route::resource('news', newsConroller::class);

require __DIR__.'/auth.php';
