<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use DB;
class PagesController extends Controller
{
    //
    public function admin() {
      $users = User::all();
      $stop_comment = DB::table('settings')->where('name', 'stop_comment')->value('value');
      return view('content.admin', compact('users', 'stop_comment'));
    }
    public function admininfo() {
      $user = User::where('name', 'samar')->first();
      $un =$user->name;

      return view('content.aboutme', compact('user'));
    }

    public function spesificUser() {
      $user = User::all();
      return view('content.posts', compact('user'));
    }
    public function statistics() {
      $users    = DB::table('users')->count();
      $posts    = DB::table('posts')->count();
      $comments = DB::table('comments')->count();
      $cats = DB::table('categories')->count();
      return view('content.statistics', compact('users', 'posts', 'comments', 'cats'));
    }

}
