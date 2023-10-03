<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Article;
use App\Models\Profile;
use App\Models\Category;
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
Route::get('/registro_admin', function () {
    return view('admin.registro_admin');
});
Route::get('/login_admin', function () {
    return view('admin.login_admin');
});
Route::get('/crear_articulos', function () {
    return view('admin.crear_articulos');
})->name('crear_articulos');

Route::get('/editar_articulos', function () {
    return view('admin.editar_articulos');
});

Route::post('/login_admin', function(Request $request){
    $user = User::where('email', $request->input('email'))
    ->where('role', 'editor')
    ->first();

    if(Hash::check($request->input('password'), $user -> password)){
      Auth::login($user);
    return redirect('/abm_articles');  
    };
    return redirect('/registro_admin');   
});
Route::get('/abm_articles', function (Request $request) {
    $articulos = Article::all();
    return view('admin.abm_articles', ['articulos' => $articulos]);
    $categories = Category::all();
    if (Auth::check() && Auth::user()->role == 'editor') {
        return view('admin.abm_articles', compact('categories'));
    }

    return redirect('/login_admin');
 });


//CREAR USUARIO
Route::post('registro_admin',function (Request $request){
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
        'password' => Hash::make($request->input('password')),
        //defino el rol amano 
        'role' => 'editor',
    ]);
    Profile::create([
        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name'),
        'user_id' => $user->id,
    ]);
    return redirect('/login_admin');
});
Route::post('/crear_articulos', function (Request $request) {
    $user = Auth::user();
    
    // Valida los datos del formulario
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'category' => 'required|string', // Asegúrate de que el nombre del campo coincida con tu formulario
    ]);
    // Crea un nuevo artículo en la base de datos
    $article = Article::create([
        'title' => $request->input('title'),
        'content' => $request->input('content'),   
        'profile_id' => $user->id
    ]);

    // Aquí verifica si se proporcionó una categoría en el formulario
    $categoryName = $request->input('category');
    if (!empty($categoryName)) {
        // Crea una nueva categoría si no existe
        $category = Category::firstOrCreate(['name' => $categoryName]);

        // Asocia el artículo con la categoría creada o existente
        $article->categories()->attach($category->id);
    }
    
    // Guarda el artículo
    $article->save();

    return redirect('/abm_articles');
});

// Ruta para mostrar el formulario de edición
Route::put('/editar_articulos/{id}', function ($id) {
    $article = Article::find($id);
    // Comprueba si el artículo existe
    if (!$article) {
        abort(404);
    }
    return view('admin.editar_articulos', ['article' => $article]);
});

// Ruta para procesar la actualización del artículo
Route::post('/editar_articulos/{id}', function (Request $request, $id) {
    // Valida los datos del formulario
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'profile_id' => 'required|integer', // Asegúrate de que profile_id sea un entero
    ]);

    // Busca el artículo por su ID
    $article = Article::find($id);

    // Comprueba si el artículo existe
    if (!$article) {
        abort(404);
    }

    // Actualiza los campos del artículo con los datos validados
    $article->update($validatedData);

    // Redirige a la página de administración de artículos
    return redirect('/abm_articles');
});





 Route::get('/eliminar_articulos', function () {
    return view('admin.eliminar_articulos');
});
 



// Ruta para eliminar un artículo
Route::delete('/eliminar_articulos/{id}', function ($id) {
    $article = Article::find($id);
    // Comprueba si el artículo existe
    if (!$article) {
        abort(404);
    }
    // Elimina el artículo de la base de datos
    $article->delete();
    // Redirige a la página de administración de artículos o a donde desees
    return redirect('/abm_articles');
});
