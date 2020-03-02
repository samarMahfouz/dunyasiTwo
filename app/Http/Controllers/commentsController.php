<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class commentsController extends Controller
{
    //
    public function showComments() {
      $comments = Comment::all();
      return view('content.posts', compact('comments'));
    }
    public function commentNew(Post $post){
       Comment::create([
         'body'     => request('body'),
         'post_id'  => $post->id
      ]);
      return back();
    }
}
