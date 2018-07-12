<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;

class PostController extends Controller
{
    public function displaypost()
    {
        return view ('displaypost');
    }
    public function posting(Request $request)
    {
    	$rules = array(
    			'title'		=>'required',
    			'body'	=>'required'
    		);
    		 $this->validate( $request , $rules);

    		$post = new Post();
    		$post->title = $request->title;
    		$post->body = $request->body;
    		$post->email = Auth::user()->email;
    		$post->save();

            return redirect()->route('project.displaypost')->with(['success' => true, 'message'=>'Post Successfully.. Now view post!!!!']);
    }
    public function viewpost()
    {
        $post = Post::all();
        return view('displaypost',['post'=>$post]);
    }

    public function deletePost(Request $request)
    {   

        Post::where('id', $request->delid)->delete();
        return redirect()->route('project.displaypost')->with(['success' => true, 'message' => 'Your post is deleted successfully!']);
    }


}

