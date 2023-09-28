<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Profile;
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
    return view('visitor.blog');
});
//VISTAS PARA ADMINISTRADOR
Route::get('/login_admin', function () {
    return view('admin.login_admin');
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

Route::get('/abm_articles', function () {
    return view('admin.abm_articles');
});
//CREAR USUARIO
Route::post('login_admin',function (Request $request){
    $request->validate([
        'nombre' => 'required|string|max:50',
        'email' => 'required|string|email|max:100|unique:users',
        'password' => 'required|string|min:8|max:255',
        'first_name' => 'required|string|max:25',
        'last_name' => 'required|string|max:25',
    ]);
    $user = User::create([
        'nombre' => $request->input('nombre'),
        'email' => $request->input('email'),
        'password' => bcrypt($request->input('password')),
    ]);
    Profile::create([
        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name'),
        'user_id' => $user->id,
    ]);
    return redirect('/abm_articles');
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
        'profile_id' => $request->input('profile_id'),
    ]);
    // Asocia el artículo con el perfil del usuario
  
     return redirect('/abm_articles');
});
