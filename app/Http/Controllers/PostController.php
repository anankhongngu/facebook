<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Kernel;
use App\Post;
use App\User;
use App\Http\Resources\Post as PostResource;
use App\Http\Resources\PostCollection;

class PostController extends Controller
{
    
    public function index() {
        return new PostCollection(request()->user()->posts);
    }


    //
    public function store() {

    	$data = request()->validate([
    		'data.attributes.body' => '',
    	]);

    	// dd($data);

    	$post = request()->user()->posts()->create($data['data']['attributes']);

    	return new PostResource($post);
    }

    public function show() {
        
    } 
}
