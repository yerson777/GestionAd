<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IglesiaController;
use App\Http\Controllers\BancoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ChequeController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\GastoController;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\BalanceFinalDepartamentoController;
use App\Http\Controllers\BalanceIglesiaController;
use App\Http\Controllers\IngresoBaseDepartamentoController;
use App\Http\Controllers\MiembroController;
use App\Http\Controllers\OtrosIngresoController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\TipoGastoController;
use App\Http\Controllers\TipoGastosIngresoController;
use App\Http\Controllers\TipoIngresoController;




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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['web', 'auth'])->group(function () {
    Route::resource('iglesias', IglesiaController::class);
    Route::resource('bancos',BancoController::class);
    Route::resource('registros',RegistroController::class);
    Route::resource('cheques',ChequeController::class);
    Route::resource('cuentas',CuentaController::class);
    Route::resource('departamentos',DepartamentoController::class);
    Route::resource('gastos',GastoController::class);
    Route::resource('ingresos', IngresoController::class);
    Route::resource('balance-final-departamentos', BalanceFinalDepartamentoController::class);
    Route::resource('balance-iglesias', BalanceIglesiaController::class);
    Route::resource('ingreso-base-departamentos', IngresoBaseDepartamentoController::class);
    Route::resource('miembros', MiembroController::class);
    Route::resource('otros-ingresos', OtrosIngresoController::class);
    Route::resource('periodos', PeriodoController::class);
    Route::resource('tipo-gastos', TipoGastoController::class);
    Route::resource('tipo-gastos-ingresos', TipoGastosIngresoController::class);
    Route::resource('tipo-ingresos', TipoIngresoController::class);

});