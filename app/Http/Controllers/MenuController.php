<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;




use Illuminate\Http\Request;
use Illuminate\Support\Str;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        // $categories = Category::all();
        return view('dashboard')->with('posts', $posts);
        // return view('dashboard', compact('posts', 'categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view("menu.create", compact('categories'));
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
            'title' => 'required',
            'description' => 'required',
            'image_path' => 'required|mimes:jpg,png,jpeg'
        ]);

        

        $post = new Post();
        $post->title = $request->input('title');
        // $post->category_option = $request->input('category_option');
        $post->category_id =  $request->input('category_id');
        $post->description = $request->input('description');
        $slug = Str::slug($request->input('title'), '-');
        $post->slug = $slug;
        $post->user_id = auth()->user()->id;
        // $menu->uploadfile = $request->input('uploadfile');

        $file= $request->file('image_path');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('images'), $filename);
        $post->image_path = $filename;

        $post->save();

        return redirect('menu_plat')->with('flash_message', 'plat added secuusefully');

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
        $post = Post::find($id);
        $categories = Category::all();

        // return view('menu.edit')->with('post', $post);
        return view('menu.edit', compact('post', 'categories'));

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
        $post_update = Post::where('id', $id)->first();
        // dd($post_update);
        $post_update->title = $request->input('title');
        $post_update->category_option = $request->input('category_option');

        $slug = Str::slug($request->title, '-');
        $post_update->description = $request->input('description');
        $post_update->slug = $slug;
        // // $menu->uploadfile = $request->input('uploadfile');

        $file= $request->file('image_path');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('images'), $filename);
        $post_update->image_path = $filename;

        $post_update->update();

        return redirect('menu_plat')->with('flash message', 'student updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect('menu_plat')->with('flash_message', 'plat deleted succefully');
    }
}
