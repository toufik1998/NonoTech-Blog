<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Reply;


use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required',

        ]);

        $comment = new Comment();
        $comment->comment = $request->input('comment');
        $comment->post_id = $request->input('post_id');
        $comment->user_id = auth()->user()->id;

        $comment->save();

        return redirect()->back()->with('success', 'Comment submitted successfully!');




    }

    // public function reply(Request $request)
    // {
    //     $request->validate([
    //         'comment' => 'required',
    //         'parent_id' => 'required|exists:comments,id'
    //     ]);

    //     $comment = new Comment();
    //     $comment->comment = $request->input('comment');
    //     $comment->post_id = $request->input('post_id');
    //     $comment->user_id = auth()->user()->id;
    //     $comment->parent_id = $request->input('parent_id');

    //     $comment->save();

    //     return redirect()->back()->with('success', 'Reply submitted successfully!');
    // }


    // public function reply(Request $request)
    // {
    //     $request->validate([
    //         'comment' => 'required',
    //         'parent_id' => 'required|exists:comments,id'
    //     ]);

    //     $comment = new Comment();
    //     $comment->comment = $request->input('comment');
    //     $comment->post_id = $request->input('post_id');
    //     $comment->user_id = auth()->user()->id;
    //     $comment->parent_id = $request->input('parent_id');

    //     $comment->save();

    //     // Get the parent comment
    //     $parentComment = Comment::find($request->input('parent_id'));

    //     // Get the existing replies for the parent comment
    //     $replies = $parentComment->replies;

    //     // Add the new reply to the replies array
    //     $replies[] = $comment;

    //     // Update the replies attribute of the parent comment
    //     $parentComment->update(['replies' => $replies]);

    //     // Add the new child comment to the parent's replies
    //     // $parentComment->replies()->save($comment);

    //     return redirect()->back()->with('success', 'Reply submitted successfully!');
    // }

//     public function reply(Request $request)
// {
//     $request->validate([
//         'comment' => 'required',
//         'parent_id' => 'required|exists:comments,id'
//     ]);

//     $comment = Comment::create([
//         'comment' => $request->input('comment'),
//         'post_id' => $request->input('post_id'),
//         'user_id' => auth()->user()->id,
//         'parent_id' => $request->input('parent_id')
//     ]);

//     // // Get the parent comment
//     // $parentComment = Comment::findOrFail($request->input('parent_id'));

//     // // Get the existing replies for the parent comment
//     // $replies = $parentComment->replies;

//     // // Add the new reply to the replies array
//     // $replies[] = $comment;

//     // // Update the replies attribute of the parent comment
//     // $parentComment->update(['replies' => $replies]);

//  $parentComment = $comment->parentComment;
//     $parentComment->replies()->save($comment);


//     return redirect()->back()->with('success', 'Reply submitted successfully!');
// }

    public function reply(Request $request)
    {
        $comment=Comment::find($request->id);
        $request->validate([
            'comment' => 'required',
        ]);
        $reply=Reply::create([
            'reply' => $request->input('comment'),
            'comment_id' => $comment->id,
            'user_id' => auth()->user()->id
        ]);
        $reply->comment_id = $reply->id;
        $comment->save();
        return redirect()->back()->with('success', 'Reply submitted successfully!');
    }






    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, $id)
    {
        // dd($id);
        $request->validate([
            'comment' => 'required',
        ]);

        $comment = Comment::find($id);
        $comment->comment = $request->input('comment');
        $comment->save();
        // dd($comment);
        return response()->json([
            'status' => 'success',
            'message' => 'Comment updated successfully!',
            // 'comment' => $comment
        ]);



    }


    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'comment' => 'required',
    //     ]);

    //     $comment = Comment::find($id);
    //     $comment->comment = $request->input('comment');
    //     $comment->save();

    //     // Fetch the updated comment from the database again
    //     $updatedComment = Comment::find($id);

    //     return response()->json([
    //         'status' => 'success',
    //         'message' => 'Comment updated successfully!',
    //         'comment' => $updatedComment
    //     ]);
    // }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Comment::destroy($id);
        return redirect()->back();
    }
}
