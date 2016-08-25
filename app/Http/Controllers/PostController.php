<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use App\Http\Requests;

class PostController extends Controller
{

    public function postCreate(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = Auth::user()->id;
        $post->save();
        return "them thanh cong";
    }

    public function postDelete()
    {
        
    }

    public function postEdit()
    {
        
    }

    public function postAddComment()
    {
        
    }

    public function getListComment()
    {
        
    }

}
