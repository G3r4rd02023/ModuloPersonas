<?php
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\TelefonosController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\CorreosController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\ProfileController;
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

//Rutas del modulo Personas


Route::middleware('auth')->group(function () {
    Route::get('/personas', [PersonasController::class, 'index']);
    Route::get('/personas/{cod_persona}/detalle',[PersonasController::class,'show'])->name('personas.show');
    Route::get('/personas/create', [PersonasController::class, 'create'])->name('personas.create');
    Route::post('/personas', [PersonasController::class, 'store'])->name('personas.store');
    Route::get('/personas/{cod_persona}/edit', [PersonasController::class, 'edit'])->name('personas.edit');
    Route::put('/personas/{cod_persona}', [PersonasController::class, 'update'])->name('personas.update');
    Route::delete('/personas/{cod_persona}', [PersonasController::class, 'destroy'])->name('personas.destroy');
        
});

//Rutas del modulo telefonos

Route::middleware('auth')->group(function () {
    Route::get('/telefonos', [TelefonosController::class, 'index']);
    Route::get('/telefonos/{cod_telefono}/detalle',[TelefonosController::class,'show'])->name('telefonos.show');
    Route::get('/telefonos/create', [TelefonosController::class, 'create'])->name('telefonos.create');
    Route::post('/telefonos', [TelefonosController::class, 'store'])->name('telefonos.store');
    Route::get('/telefonos/{cod_telefono}/edit', [TelefonosController::class, 'edit'])->name('telefonos.edit');
    Route::put('/telefonos/{cod_telefono}', [TelefonosController::class, 'update'])->name('telefonos.update');
    Route::delete('/telefonos/{cod_telefono}', [TelefonosController::class, 'destroy'])->name('telefonos.destroy');
        
});

//Ruta de modulo usuarios

Route::middleware('auth')->group(function () {
    Route::get('/usuarios', [UsuariosController::class, 'index']);
    Route::get('/usuarios/{cod_usuario}/detalle',[UsuariosController::class,'show'])->name('usuarios.show');
    Route::get('/usuarios/create', [UsuariosController::class, 'create'])->name('usuarios.create');
    Route::post('/usuarios', [UsuariosController::class, 'store'])->name('usuarios.store');
    Route::get('/usuarios/{cod_usuario}/edit', [UsuariosController::class, 'edit'])->name('usuarios.edit');
    Route::put('/usuarios/{cod_usuario}', [UsuariosController::class, 'update'])->name('usuarios.update');
    Route::delete('/usuarios/{cod_usuario}', [UsuariosController::class, 'destroy'])->name('usuarios.destroy');
        
});

//ruta empleados

Route::middleware('auth')->group(function () {
    Route::get('/empleados', [EmpleadosController::class, 'index']);
    Route::get('/empleados/{cod_empleado}/detalle',[EmpleadosController::class,'show'])->name('empleados.show');
    Route::get('/empleados/create', [EmpleadosController::class, 'create'])->name('empleados.create');
    Route::post('/empleados', [EmpleadosController::class, 'store'])->name('empleados.store');
    Route::get('/empleados/{cod_empleado}/edit', [EmpleadosController::class, 'edit'])->name('empleados.edit');
    Route::put('/empleados/{cod_empleado}', [EmpleadosController::class, 'update'])->name('empleados.update');
    Route::delete('/empleados/{cod_empleado}', [EmpleadosController::class, 'destroy'])->name('empleados.destroy');
        
});

//ruta correos
Route::middleware('auth')->group(function () {
    Route::get('/correos', [CorreosController::class, 'index']);
    Route::get('/correos/{cod_correo}/detalle',[CorreosController::class,'show'])->name('correos.show');
    Route::get('/correos/create', [CorreosController::class, 'create'])->name('correos.create');
    Route::post('/correos', [CorreosController::class, 'store'])->name('correos.store');
    Route::get('/correos/{cod_correo}/edit', [CorreosController::class, 'edit'])->name('correos.edit');
    Route::put('/correos/{cod_correo}', [CorreosController::class, 'update'])->name('correos.update');
    Route::delete('/correos/{cod_correo}', [CorreosController::class, 'destroy'])->name('correos.destroy');
        
});

//ruta PROVEEDORES
Route::middleware('auth')->group(function () {
    Route::get('/proveedores', [ProveedoresController::class, 'index']);
    Route::get('/proveedores/{cod_proveedor}/detalle',[ProveedoresController::class,'show'])->name('proveedores.show');
    Route::get('/proveedores/create', [ProveedoresController::class, 'create'])->name('proveedores.create');
    Route::post('/proveedores', [ProveedoresController::class, 'store'])->name('proveedores.store');
    Route::get('/proveedores/{cod_proveedor}/edit', [ProveedoresController::class, 'edit'])->name('proveedores.edit');
    Route::put('/proveedores/{cod_proveedor}', [ProveedoresController::class, 'update'])->name('proveedores.update');
    Route::delete('/proveedores/{cod_proveedor}', [ProveedoresController::class, 'destroy'])->name('proveedores.destroy');
        
});

require __DIR__.'/auth.php';
