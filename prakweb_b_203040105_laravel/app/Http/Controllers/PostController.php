<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
  public function index(){

    $posts = Post::latest();

    $title = '';
    if(request('category')){
      $category ='in' . Category::firsWhere('slug', request('category'));
    } 
    if(request('author')) {
      $author = User::firsWhere('username', request('author'));
      $title = 'by' . $author;
    }

    // dd(request('search'));
    return view('posts', [
      "title" => "posts" ,
      "active" => 'posts',
      "posts" => Post::latest()->filter(request(['search','category']))->paginate(7)->withQueryString()

      // "posts" => $posts->get()
    
  ]);

    $query->when($filters['category'] ?? false, function($query, $category) {
        return $query->whereHas('category', function($query) use ($category) {
          $query->where('slug', $category);
        });
  });

}

  public function show(Post $post) {
    return view('post', [
      "title" => "Single Post",
      "active" => 'post',
      "post" =>$post
  ]);
  }
}