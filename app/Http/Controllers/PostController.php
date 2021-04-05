<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    function add(){
        DB::table('posts')->insert(
            ['title'=>'Post2','content'=>'content2','user_id'=>2]
        );
    }
    function show(){
        // $posts = DB::table('posts')->get();
        // // foreach($posts as $post){
        // //     echo $post->title;
        // //     echo $post->content;
        // //     echo "<br>";
        // // }
        // return $posts;
        // $posts = DB::table('posts')->select('title','content')->first();
        $posts = DB::table('posts')->where('id',2)->first(); 
        echo $posts->user_id;
        // print_r($posts);

    }
}
