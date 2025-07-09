<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use PHPUnit\Event\TestSuite\Loaded;

Route::get('/', function () {
    return view('home' , ['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about', ['title' => 'About us']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts'=> Post::filter(request(['search' , 'category', 'author']))->latest()->paginate(6)->withQueryString() ]);
});

Route::get('/posts/{post:slug}' , function(Post $post){
    return view('post', ['title' => 'Single Post', 'post' => $post ]);
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
 