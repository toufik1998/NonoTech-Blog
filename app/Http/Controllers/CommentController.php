<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;



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
    // public function update(Request $request, $id)
    // {

    //     $request->validate([
    //         'comment' => 'required',

    //     ]);

    //     $comment_update = Comment::where('id', $id)->first();
    //     $comment_update->comment = $request->input('comment');
    //     $comment_update->post_id = $request->input('post_id');
    //     $comment_update->user_id = auth()->user()->id;

    //     $comment_update->update();

    //     session()->flash('updated_comment_id', $comment_update->id);

    //     return redirect()->back()->with('success', 'Comment updated successfully!');


    // }

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
            'comment' => $comment
        ]);
    }


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
