<?php
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\MetodoDePagoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\HerramientasController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Checkusu;
use App\Http\Controllers\SeccionController;
use App\Http\Middleware\AuthMiddleware;



Route::get('/', function () {
    return view('inicio'); 
})->name('inicio');





Route::get('/register', [SeccionController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [SeccionController::class, 'register']);
Route::get('/login', [SeccionController::class, 'showLoginForm'])->name('login');
Route::post('/login', [SeccionController::class, 'login']);


Route::resource('productos', ProductoController::class);
Route::resource('usuarios', UsuarioController::class);
Route::resource('metodosDePago', MetodoDePagoController::class);
Route::resource('herramientas', HerramientasController::class);

Route::get('/herramientas', [HerramientasController::class, 'index'])->name('herramientas.index');  
Route::get('/herramientas/create', [HerramientasController::class, 'create'])->name('herramientas.create');
Route::post('/herramientas', [HerramientasController::class, 'store'])->name('herramientas.store');
Route::get('/herramientas/{herramienta}', [HerramientasController::class, 'show'])->name('herramientas.show');
Route::get('/herramientas/{herramienta}/edit', [HerramientasController::class, 'edit'])->name('herramientas.edit');
Route::put('/herramientas/{herramienta}', [HerramientasController::class, 'update'])->name('herramientas.update');
Route::delete('/herramientas/{herramienta}', [HerramientasController::class, 'destroy'])->name('herramientas.destroy');
Route::get('/herramientas/{herramienta}/delete', [HerramientasController::class, 'delete'])->name('herramientas.delete');

Route::get('/metodosDePago', [MetodoDePagoController::class, 'index'])->name('metodos_de_pago.index');  
Route::get('/metodosDePago/create', [MetodoDePagoController::class, 'create'])->name('metodos_de_pago.create');
Route::post('/metodosDePago', [MetodoDePagoController::class, 'store'])->name('metodos_de_pago.store');
Route::get('/metodosDePago/{metodoDePago}', [MetodoDePagoController::class, 'show'])->name('metodos_de_pago.show');
Route::get('/metodosDePago/{metodoDePago}/edit', [MetodoDePagoController::class, 'edit'])->name('metodos_de_pago.edit');
Route::put('/metodosDePago/{metodoDePago}', [MetodoDePagoController::class, 'update'])->name('metodos_de_pago.update');
Route::delete('/metodosDePago/{metodoDePago}', [MetodoDePagoController::class, 'destroy'])->name('metodos_de_pago.destroy');
Route::get('/metodosDePago/{metodoDePago}/delete', [MetodoDePagoController::class, 'delete'])->name('metodos_de_pago.delete');



Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');

Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');  
Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');   
Route::get('/productos/{producto}/edit', [ProductoController::class, 'edit'])->name('productos.edit');   
Route::put('/productos/{producto}', [ProductoController::class, 'update'])->name('productos.update');   
Route::delete('/productos/{producto}', [ProductoController::class, 'destroy'])->name('productos.destroy');   
Route::get('/productos/{producto}', [ProductoController::class, 'show'])->name('productos.show');   


Route::get('/usuarios/list',[UsuarioController::class, 'list'])->name('user.list');
Route::get('/usuario/creado', [UsuarioController::class, 'create'])->middleware('guest');;
Route::post('/usuario/creado', [UsuarioController::class, 'store'])->name('user.store');
Route::post('/usuario/update', [UsuarioController::class, 'update'])->name('user.update.data');
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('user.index');
Route::get('/usuarios/{id}/editar', [UsuarioController::class, 'edit'])->name('user.update');
Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy'])->name('user.destroy'); 











