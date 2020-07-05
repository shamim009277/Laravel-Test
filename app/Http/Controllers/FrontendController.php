<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;


class FrontendController extends Controller
{
    public function homePage(){
        
        $single_post=Blog::inRandomOrder()
                      ->where('type','=',2)
                      ->where('status','=',1)
                      ->first();
        $single_video=Blog::inRandomOrder()
                      ->where('type','=',1)
                      ->where('status','=',1)
                      ->first();

    	$blog_posts = Blog::where('type','=',2)
    	              ->where('status','=',1)
    	              ->get();
    	$video_posts = Blog::where('type','=',1)
    	              ->where('status','=',1)
    	              ->get();
    	return view('frontend.home',compact('blog_posts','single_post','video_posts','single_video'));
    }

    public function blogPostDetails($id){

        $post=Blog::where('type','=',2)
                      ->where('status','=',1)
                      ->where('id','=',$id)
                      ->first();
        return view('frontend.details_blog',compact('post'));
    }
    public function videoPostDetails($id){
    	$video=Blog::where('type','=',1)
                      ->where('status','=',1)
                      ->where('id','=',$id)
                      ->first();
        return view('frontend.details_video_post',compact('video'));
    }
}
