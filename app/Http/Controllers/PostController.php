<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;


use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('blog.index')->with('posts', $posts);
        // return view('blog.index', compact('posts', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('blog.create', compact('categories'));
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

        // $newImageName = uniqid() . '-' .$request->title . '.' . $request->image_path->extension();
        // $request->image_path->move(public_path()('images'), $newImageName);
        // $slug = Str::slug($request->title, '-');

        // Post::create([
        //     'title' => $request->input('title'),
        //     'description' => $request->input('description'),
        //     'slug' => $slug,
        //     'image_path' => $newImageName,
        //     'user_id' => auth()->user()->id
        // ]);

        $post = new Post();
        $post->title = $request->input('title');
        $post->category_id = $request->input('category_id');
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

        return redirect('blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('blog.show')->with('post', POST::where('id', $id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $post = POST::where('id', $id)->first();
        return view('blog.edit', compact('post','categories'));
        // return view('blog.edit')->with('post', POST::where('slug', $slug)->first());
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

        // $file= $request->file('image_path');
        // $filename= date('YmdHi').$file->getClientOriginalName();
        // $file->move(public_path('images'), $filename);

        // $slug = Str::slug($request->title, '-');


        // Post::where('slug', $slug)->update([
        //     'title' => $request->input('title'),
        //     'description' => $request->input('description'),
        //     'slug' => $slug,
        //     'image_path' => $filename,
        //     'user_id' => auth()->user()->id

        // ]);

        $post_update = Post::where('id', $id)->first();
        // dd($post_update);
        $post_update->title = $request->input('title');
        $post_update->category_id = $request->input('category_id');
        $slug = Str::slug($request->title, '-');
        $post_update->description = $request->input('description');
        $post_update->slug = $slug;
        // // $menu->uploadfile = $request->input('uploadfile');

        $file= $request->file('image_path');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('images'), $filename);
        $post_update->image_path = $filename;

        $post_update->update();
        // return view('blog.index')->with('posts', $posts);


        // return redirect('blog/'.$slug)->with('Success', 'Update Post succefully');
        return redirect('/blog')->with('Success', 'Update Post succefully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::where('id', $id)->delete();

        return redirect('/blog')->with('delete', 'Post deleted succefully');
    }
}
