<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Article;
use App\Models\Profile;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

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
    $articles = Article::all();
    return view('visitor.blog', ['articulos'=>$articles]);
});

//rutas protegidas
Route::middleware(['auth'])->group (function(){
        Route::get('/crear_articulos', function () {
            return view('admin.crear_articulos');
        })->name('crear_articulos');

        Route::get('/editar_articulos', function () {
        return view('admin.editar_articulos');
        });
        
        Route::get('/abm_articles', function (Request $request) {
            if (Auth::check() && Auth::user()->role == 'editor') {
                $articulos = Article::all();
                $categories = Category::all();
                return view('admin.abm_articles', compact('articulos','categories'));
            }
    
            return redirect('/login_admin');
        });
});


//CREAR USUARIO


//VISTAS PARA ADMINISTRADOR
Route::get('/registro_admin', function () {
    return view('admin.registro_admin');
});
Route::get('/login_admin', function () {
    return view('admin.login_admin');
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

Route::get('/editar_articulos/{id}', function ($id) {
    $article = Article::find($id);
    
    
    return view('admin.editar_articulos', [
        'article' => $article,  

    ]);

});

Route::patch('/editar_articulos/{id}', function (Request $request, $id) {
    $validator = Validator::make($request->all(), [
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ]);

    if ($validator->fails()) {
        return redirect("/editar_articulos/{$id}") 
            ->withErrors($validator)
            ->withInput();
    }

    $data = [
        'title' => $request->input('title'),
        'content' => $request->input('content'),
    ];

    $article = Article::find($id);
    $article->update($data);

    return redirect('/abm_articles'); 
});
Route::get('/eliminar_articulos/{id}', function ($id) {
    $article = Article::find($id);
    if ($article) {
        // Desvincula todas las categorías relacionadas
        $article->categories()->detach();

        // Elimina el artículo
        $article->delete();
    }
    return redirect('/abm_articles');
 
});

