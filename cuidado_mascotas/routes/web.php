<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Article;

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

// Vistas para visita
Route::get('/', function () {
    return view('visitor.index');
});

Route::get('/index', function () {
    return view('visitor.index');
});

Route::get('/contacto', function () {
    return view('visitor.contacto');
});

Route::get('/blog', function () {
    return view('blog');
});
//VISTAS PARA ADMINISTRADOR
Route::get('/home_admin', function () {
    return view('admin.home_admin');
});

Route::get('/crear_articulos', function () {
    return view('admin.crear_articulos');
})->name('crear_articulos');

Route::get('/editar_articulos', function () {
    return view('admin.editar_articulos');
});

Route::get('/eliminar_articulos', function () {
    return view('admin.eliminar_articulos');
});


Route::get('/login', function () {
    return view('visitor.login');
});


Route::post('/crear_articulos',function (Request $request){
    // Valida los datos del formulario
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ]);
    // Crea un nuevo artículo en la base de datos
    Article::create([
        'title' => $request->input('title'),
        'content' => $request->input('content'),
        'profile_id'=> $request->input('profile_id'),
    ]);
     return redirect('/home_admin');
});