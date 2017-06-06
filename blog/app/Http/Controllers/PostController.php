<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    //
    public function index(Post $postModel)
    {
//        $posts = Post::all();
//        dd($posts);
//        $posts = Post::latest('id')->get();
//        $posts = Post::latest('published_at')->get();
//        echo Carbon::now();
//        $posts = Post::latest('published_at')
//            ->where('published_at', '<=', Carbon::now())
//            ->get();

        $posts = $postModel->getPublishedPosts();

        return view('post.index', ['posts' => $posts]);


    }

    public function unpublished(Post $postModel){

        $posts = $postModel->getUnpublishedPosts();

        return view('post.index', ['posts' => $posts]);
    }

    public function create(){

        return view('post.create');

    }

    public function store(Post $postModel, Request $request){
//        dd($request->all());

        $postModel->create($request->all());

        return redirect()->route('posts');

    }




}
