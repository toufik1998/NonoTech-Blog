<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;





use Illuminate\Http\Request;
use Illuminate\Support\Str;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $searchQuery = $request->input('searchQuery');

    //     $posts = Post::all();
    //     // $categories = Category::all();
    //     // return view('dashboard')->with('posts', $posts);
    //     // return view('dashboard', compact('posts', 'categories'));
    //     if ($searchQuery) {
    //         $posts->where('title', 'like', "%$searchQuery%")
    //             ->orWhere('description', 'like', "%$searchQuery%");
    //     }
    //     $posts = $posts->get();
    //     return view('dashboard', compact('posts'));

    // }

    public function index(Request $request)
    {
        $searchQuery = $request->input('searchQuery');

        $posts = Post::query();
        if ($searchQuery) {
            $posts->where('title', 'like', "%$searchQuery%")
                ->orWhere('description', 'like', "%$searchQuery%");
        }
        $posts = $posts->paginate(10);
        return view('dashboard', compact('posts'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view("menu.create", compact('categories', 'tags'));
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
            'image_path' => 'required|mimes:jpg,png,jpeg',
            'category_id' => 'required',
            'tags' => 'required'
        ]);



        $post = new Post();
        $post->title = $request->input('title');
        // $post->category_option = $request->input('category_option');
        $post->category_id =  $request->input('category_id');
        $post->description = $request->input('description');
        $slug = Str::slug($request->input('title'), '-');
        $post->slug = $slug;
        $post->user_id = auth()->user()->id;



        $file= $request->file('image_path');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('images'), $filename);
        $post->image_path = $filename;

        //tags
        $tags = $request->input('tags');

        $post->save();

        // $post->tags()->sync($tags);
        $post->tags()->attach($tags);



        return redirect('adminboard')->with('flash_message', 'Post added secuusefully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd(POST::where('id', $id)->first());
        return view('menu.show')->with('post', POST::where('id', $id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $post = Post::find($id);
        $post = Post::with('tags')->find($id);

        $categories = Category::all();
        $tags = Tag::all();

        // dd($post);

        // return view('menu.edit')->with('post', $post);
        return view('menu.edit', compact('post', 'categories', 'tags'));

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
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image_path' => 'required|mimes:jpg,png,jpeg',
            'category_id' => 'required',
            'tags' => 'required'
        ]);

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

        $post_update->save();

        $tags = $request->input('tags');
        $post_update->tags()->sync($tags);

        // //tags
        // $tags = $request->input('tags');
        // // dd($tags);

        // $post_update->tags()->detach();
        // $post_update->tags()->attach($post_update->id,$tags);

        // $post_update->update();



        return redirect('adminboard')->with('flash message', 'student updated');
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
        return redirect('adminboard')->with('flash_message', 'plat deleted succefully');
    }
}
