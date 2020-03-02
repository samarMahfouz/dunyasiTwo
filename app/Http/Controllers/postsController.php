<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use DB;
class postsController extends Controller
{
    public function showPosts(){
      $posts = Post::with('category')->get();
      $cat_name = Category::all();
      $stop_comment = DB::table('settings')->where('name', 'stop_comment')->value('value');

      return view('content.posts', compact('posts', 'cat_name'));
    }
    public function allPosts() {
      $posts = Post::all();
      $cat_name = Category::all();
      return view('content.allposts', compact('posts', 'cat_name'));
    }
    public function viewPost(Post $post) {
      return view('content.post', compact('post'));
    }
    public function postNew(Request $request){
      $this->validate(request(), [
        'name' => 'required|min:5',
        'body'  => 'required',
      ]);
      $img_name = time() . '.' . $request->url->getClientOriginalExtension();
      $post = new Post;
      $post->name = request('name');
      $post->body  = request('body');
      $post->url   =   $img_name;
      $post->cat_id = request('cat_id');
      $post->save();
      $request->url->move(public_path('upload'), $img_name);
      return redirect()->back();
    }
    public function delete(Post $post){
      $post->delete();
      return back();
    }
}
