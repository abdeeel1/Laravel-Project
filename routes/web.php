<?php

use App\Http\Controllers\contollerTps;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    return view("home");
})->name('home');

Route::get('/about', function(){
    return view("about");
})->name('about');

Route::get('/contact', function(){
    return view("contact");
})->name('contact');

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('details');
















































/* Route::get('/', function () {
    return view('welcome');
});
 */

// Method 1

/* Route::post('/home', 'App\Http\Controllers\contollerTps@handleForm');

Route::get('/login', 'App\Http\Controllers\contollerTps@showForm');
Route::post('/login', 'App\Http\Controllers\contollerTps@handleForm');

Route::get('/welcome/{name}', 'App\Http\Controllers\helloController@sayHello')->middleware('isAbdessamadUser');

Route::get('/profile/form', 'App\Http\Controllers\ProfileController@showForm');
Route::post('/profile/submit', 'App\Http\Controllers\ProfileController@handleSubmit'); */


/* Route::get("/greet/{name}", "App\Http\Controllers\Exercice1@sayHelloName"); */


/* Route::get("/welcome", function() {
    return 'welcome to laravel';
});

Route::get("/about", function() {
    return 'this is about page';
});

Route::get("/user/{id}", function($id){
    return "User ID : $id";
});

Route::get("/post/{id}/{slug}", function($id, $slug){
    return "$id - $slug";
});

Route::get("/contact-us", function(){
    return "contact us page";
})->name("contact");


Route::prefix('/admin')->group(function(){
    Route::get("/dashboard", function(){return "admin dashboard";});
    Route::get("/users", function(){return "users list";});
    Route::get("/settings", function(){return "settings";});
});

Route::post("/submit", function(){return "show form";});
Route::get("/profile/{name?}", function(?string $name = null){return "hello $name";}); */






/*


Method 2

Route::get('/tps', contollerTps::class . '@myTps');


Url Dynamic:

Route::get('/user/{name}', function($name) {
    return "Hello $name";
});

Route::get('/post/{id}', function($id) {
    return "You are viewing post number $id";
});

Route::get('/product/{category}/{id}', function($category, $id) {
    return "Category $category, Product id $id";
});

Controllers Method:

php artisan make:controller PageController

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function home(){
        return 'Welcome to HomePage';
    }

    public function about(){
        return "This is About Page";
    }

    public function contact(){
        return "Contact Page";
    }
}

Route::get('/', 'App\Http\Controllers\PageController@home');
Route::get('/about', 'App\Http\Controllers\PageController@about');
Route::get('/contact', 'App\Http\Controllers\PageController@contact');

*/



/* Route::get("/", [PageController::class,"home"])->name('home');
Route::get("/about", [PageController::class, "about"])->name('about');
Route::get("projects", [PageController::class, "projects"])->name('projects');
Route::get("/contact", [PageController::class,"contact"])->name('contact'); */




/*Exercice 1 :
Route::get('/', function(){
    return "Home Page";
});

Route::get('/login', function(){
    return "Login Page";
});

Route::get('/page/{id}', function($id){
    return "Page N $id";
});

/* Route::get('{n}', function($n) { 
return 'Je suis la page ' . $n . ' !'; 
});

Route::get('contact', function() { 
return "C'est moi le contact."; 
}); 

Route::get('/test/{param}', function($param){
    return view("test", ["param" => $param]);
});

Route::get("/formation/{formation}/filiere/{filiere}/groupe/{groupe}/stagiaire/{stagiaire?}", 
function($formation, $filiere, $groupe, $stagiaire = null){
    $date = date("Y");
    if($stagiaire == null){
        $stagiaire = $date;
    }
    return view("formation", compact('formation', 'filiere', 'groupe', 'stagiaire'));
});*/


// Exercice 2: 
/* Route::get("/bienvenue", function(){
    return "Bienvenue sur mon site Laravel !";
});

Route::get("/user/{nom}", function($nom){
    return "Bonjour $nom";
});

Route::get("/produit/{id}", function($id){
    return "Détails du produit numéro $id";
})->whereNumber('id');

Route::get("/message/{destinataire?}", function($des = "Message général"){
    return "Message pour $des";
})->whereNumber('id'); */

//message 3:
/* Route::get('/calculer/addition/{a}/{b}', function($a, $b){
    $result = $a + $b;
    return "$a + $b = $result";
})->whereNumber('a','b');
Route::get('/calculer/soustraction/{a}/{b}', function($a, $b){
    $result = $a - $b;
    return "$a - $b = $result";
})->whereNumber('a','b');
Route::get('/calculer/multiplication/{a}/{b}', function($a, $b){
    $result = $a * $b;
    return "$a * $b = $result";
})->whereNumber('a','b');
Route::get('/calculer/division/{a}/{b}', function($a, $b){
    if($b == 0){
        return "Error Divisid by 0";
    }else{
        $result = $a / $b;
    }
    return "$a / $b = $result";
})->whereNumber('a','b');
 */


// Exercice 1:


/* Route::get('/home/{result?}', function($result = null){
    return view('calculatriceView', ["result" => $result]);
})->name('home');


Route::post('/calculer', function(Request $request){
    $a = $request->input('a');
    $b = $request->input('b');
    $op = $request->input('op');

    $result = "";

    switch ($op) {
        case '+':
            $result = $a + $b;
            break;
        case '-':
            $result = $a - $b;
            break;
        case '*':
            $result = $a * $b;
            break;
        case '/':
            $result = ($b != 0) ? $a / $b : "Divised Impssible !";
            break;
    }

    return redirect()->route('home', ["result" => $result]);
}); */


// Exercice 2:
/* Route::get('/', function(){
    return view("home");
})->name('home');
Route::get('/about', function(){
    return view("about");
})->name('about'); */

