<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
class PostController extends Controller
{
    //
    function add()
    {
        // DB::table('posts')->insert(
        //     ['title' => 'Post3', 'content' => 'content3', 'user_id' => 2]
        // );

        // $post = new Post;
        // $post->title ="Laravel Pro 1";
        // $post->content = "Content Laravel Pro 1";
        // $post->user_id = 5;
        // $post->votes = 40;
        // $post->save();

        Post::create([
            'title'=>'Create user 4',
            'content'=>'Content create 4',
            'user_id'=>4,
            'votes'=>145

        ]);

    }
    function show()
    {
        // $posts = DB::table('posts')->get();
        // // foreach($posts as $post){
        // //     echo $post->title;
        // //     echo $post->content;
        // //     echo "<br>";
        // // }
        // return $posts;
        // $posts = DB::table('posts')->select('title','content')->first();
        // $posts = DB::table('posts')->where('id',2)->first(); 
        // echo $posts->user_id;
        // print_r($posts);
        // $numbers_posts = DB::table('posts')->where('user_id',4)->count();
        // echo $numbers_posts;
        // $max = DB::table('posts')->max('user_id');
        // $min = DB::table('posts')->min('user_id');
        // $avg = DB::table('posts')->avg('user_id');
        // // echo $avg;
        // $posts = DB::table('posts')->join('users','users.id','=','posts.user_id')
        // ->select('users.name','posts.title')->get();
        // print_r($posts);
        // return $posts;
        // $posts = DB::table('posts')->where('user_id','>',1)->get();
        // $posts = DB::table('posts')->where('title','Like','%iphone%')->get();

        // $posts = DB::table('posts')
        // ->where([
        //     ['title','like','%iphone%'],
        //     ['votes','<',20]
        // ])->get();

        // $posts = DB::table('posts')
        // ->where('votes','<',20)
        // ->orWhere('user_id','=',4)->get();

        // $posts = DB::table('posts')
        // ->selectRaw("COUNT('id') as number_post,user_id")
        // ->groupBy('user_id')
        // ->orderBy('number_post','desc')->get();

        // $posts = DB::table('posts')
        // ->orderBy('votes','desc')
        // ->get();

        // $posts = DB::table('posts')
        // ->offset(2)
        // ->limit(2)
        // ->get();
        // echo "<pre>";
        // print_r($posts);
        // echo "</pre>";

    }
    function update($id)
    {
        #QUERRY BUILDER

        // DB::table('posts')
        //     ->where('id', $id)
        //     ->update([
        //         'title' => 'Iphone 12 ProMax',
        //         'votes' => 20
        //     ]);

        #ELOQUENT ORM
        // $post = Post::find($id);
        // $post->title ="Laravel Pro 2";
        // $post->content = "Content Laravel Pro 1";
        // $post->user_id = 5;
        // $post->votes = 40;
        // $post->save();

        $post = Post::where('id',$id)
        ->update([
            'title'=>'Update',
            'content'=>'Content update',
            'user_id'=>4,
            'votes'=>75
        ]);

    }
    function delete($id)
    {
        // return DB::table('posts')
        //     ->where('id', $id)
        //     ->delete();

        $post = Post::find($id);

        $post->delete();

        // Post::where('user_id',5)->delete();

        // Post::destroy($id);

        // return Post::destroy([6,9]);


    }
    function read(){
        // $posts = Post::all();
        // echo "<pre>";
        // print_r($posts);
        // echo "</pre>";

        // $posts = Post::where('title','like','%iphone%')->get();

        // $post = Post::where('user_id',2)->first();

        // $post = Post::find([1,2]);
        // return $post;

        // $posts = Post::orderBy('votes','desc')->get();

        // $posts = Post::selectRaw("COUNT('id') as number_post,user_id")
        // ->groupBy('user_id')
        // ->orderBy('number_post','desc')->get();

        // $posts = Post::offset(1)->limit(2)->get();
        // return $posts;

        // $posts = Post::withTrashed()->get();
        $posts = Post::onlyTrashed()->get();
        return $posts;
    }
    function restore($id){
        Post::onlyTrashed()
        ->where('id',$id)
        ->restore();
    }
    function permanentlyDelete($id){
        Post::onlyTrashed()
        ->where('id',$id)
        ->forceDelete();
    }
}
