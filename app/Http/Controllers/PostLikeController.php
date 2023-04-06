<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;

class PostLikeController extends Controller
{
    public function store(Post $post, Request $request)
    {
        $like = new Like();
        $like->user_id = $request->user()->id;
        $post->likes()->save($like);

        if($request->ajax()){
            return response()->json(['likesCount' => $post->likes->count()]);
        }

        return back();
    }

    public function destroy(Post $post, Request $request)
    {
        $like = Like::where('user_id', $request->user()->id)
            ->where('post_id', $post->id)
            ->first();

            

        if ($like) {
            $like->delete();

            if($request->ajax()){
                return response()->json(['likesCount' => $post->likes->count()]);
            }
        }

        return back();
    }
}
