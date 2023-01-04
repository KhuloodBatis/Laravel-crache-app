<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    // public function show($post){

    //     $posts = [
    //               'my-first-post'=>'Hello, this is my first blog post',
    //               'my-sceond-post'=>'Now i am getting the hang of this blogging thing'
    //             ];
    //          if(! array_key_exists($post,$posts)){
    //             abort(404, 'Sorry, that post was not found.');
    //          }
    //            return view('post',[
    //             'post'=>$posts[$post]
    //            ]);
    // }

    public function show($slug){
        // $post = Post::where('slug',$slug)->first();

        //  if(!$post){
        //     abort(404);
        //  }

         $post = Post::where('slug',$slug)->firstOrFail();

        return view('post',[
                'post'=>$post
            ]);
    }
}
