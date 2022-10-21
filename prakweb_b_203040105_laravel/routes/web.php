<?php

use Illuminate\Support\Facades\Route;

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
    return view('home',[
       "title" => "Home" 
    ]);
});





Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Rafliansyah",
        "email" => "Rafliansyah@gamail.com",
        "image" => "rf.jpeg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
         "title" => "judul post pertama" , 
         "slug" => "judul-post-pertama",
         "author" => "Rafliansyah",
         "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea blanditiis eaque quisquam, rem accusamus, excepturi placeat iusto omnis molestiae eius maxime ducimus exercitationem nisi sed quod consequuntur aut provident doloribus odit. Corporis explicabo libero deleniti animi in ab, quidem dignissimos quos cupiditate velit rem consequatur, accusantium delectus? Enim inventore tempora officiis. Esse sit pariatur ab numquam harum excepturi repudiandae quo doloribus quaerat est. Iusto iure quam dicta officiis nemo fugiat tempora eveniet ea consequatur, distinctio magni laudantium sit explicabo veritatis?"
        ],
        [
            "title" => "judul post kedua" ,
            "slug" => "judul-post-kedua", 
            "author" => "farhan",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea blanditiis eaque quisquam, rem accusamus, excepturi placeat iusto omnis molestiae eius maxime ducimus exercitationem nisi sed quod consequuntur aut provident doloribus odit. Corporis explicabo libero deleniti animi in ab, quidem dignissimos quos cupiditate velit rem consequatur, accusantium delectus? Enim inventore tempora officiis. Esse sit pariatur ab numquam harum excepturi repudiandae quo doloribus quaerat est. Iusto iure quam dicta officiis nemo fugiat tempora eveniet ea consequatur, distinctio magni laudantium sit explicabo veritatis?"
        ],
    ];

    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});