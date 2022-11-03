<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => 'about',
        "name" => "MuhamadRafliansyah",
        "email" => "203040105@unpas.mail.ac.id",
        "image" => "rf.jpeg"

    ]);
});

Route::get('/blog', [PostController::class, 'index']);

//halaman single
Route::get('posts/{post:slug}', [PostController::class, 'show']);

//newroute
Route::get('categories',function() { 
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => category::all()
    ]);
});

Route :: get('/categories/{category:slug}', function(Category $category){
    return view('posts', [
        'title' => "Post by Category :$category->name",
        'posts' => $category->posts->load('category', 'author'),
        
    ]);
});

Route::get('/authors/{author:username}', function(User $author) {
return view('posts', [
    'title' => "Post By Author : $author->name",
    'active' => 'posts',
    'posts' => $author->posts->load('category', 'author'),
]);
});


Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);