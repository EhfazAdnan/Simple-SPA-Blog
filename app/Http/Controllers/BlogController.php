<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function get_all_blog_post(){
        $posts = Post::with('user','category')->orderBy('id','desc')->get();
        return response()->json([
            'posts' => $posts
        ], 200);
    }

    public function getpost_by_id($id){
        $post = Post::with('user','category')->where('id',$id)->first();
        return response()->json([
            'post' => $post
        ], 200);
    }

    public function getAllCategories(){
        $categories = Category::all();
        return response()->json([
            'categories' => $categories
        ], 200);
    }

    public function get_all_post_by_cat_id($id){
        $posts = Post::with('user','category')->where('cat_id',$id)->orderBy('id','desc')->get();
        return response()->json([
            'posts' => $posts
        ], 200);
    }

    public function search_post(){
        $search = \Request::get('s');
        $posts = Post::with('user','category')->where('title','LIKE',"%$search%")->orWhere('description','LIKE',"%$search%")->get();
        return response()->json([
            'posts' => $posts
        ], 200);
    }
}
