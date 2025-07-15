<?php


use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use PHPUnit\Event\TestSuite\Loaded;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard' , ['title' => 'Home Page']);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/about', function () {
    return view('about', ['title' => 'About us']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts'=> Post::filter(request(['search' , 'category', 'author']))->latest()->paginate(20)->withQueryString() ]);
});

Route::get('/posts/{post:slug}' , function(Post $post){
    return view('post', ['title' => 'Single Post', 'post' => $post ]);
});
Route::get('/submit' , function(){
    return view('submit', ['title' => 'Submit Blog anda']);
});

Route::get('/contact', function () {
    return view('contact' , ['nama' => "Tresnariyadi Hermana" , 'title' => 'Contact us']);
});
Route::get('/author/{user:username}' , function (User $user){
    // $posts = $user->posts->Load('category', 'author');
    return view('posts', ['title' => count($user->posts) . ' Articel by ' . $user->name, 'posts'=>$user->posts]);
});
Route::get('/categories/{category:slug}' , function (Category $category){
    //   $posts = $category->posts->Load('category', 'author');
    return view('posts', ['title' => count($category->posts) .' Articel in ' . $category->name, 'posts'=> $category->posts]);
});
require __DIR__.'/auth.php';