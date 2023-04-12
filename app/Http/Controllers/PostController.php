<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;


use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index(Request $request)
    {
        $searchQuery = $request->input('searchQuery');

        $posts = Post::query();
        if ($searchQuery) {
            $posts->where('title', 'like', "%$searchQuery%")
                ->orWhere('description', 'like', "%$searchQuery%");
        }
        // $posts = $posts->paginate(10);
        $posts = $posts->where('user_id', auth()->user()->id)->paginate(10);

        return view('blog.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Post::all();
        $postCount = $posts->where('user_id', auth()->user()->id)->count();

        $categories = Category::all();
        $tags = Tag::all();
        $subcategories = Subcategory::all();

        return view('blog.create', compact('categories', 'tags', 'postCount', 'subcategories'));
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
            'subcategory_id' => 'required',
            'tags' => 'required'
        ]);


        $post = new Post();
        $post->title = $request->input('title');
        $post->category_id = $request->input('category_id');
        $post->subcategory_id =  $request->input('subcategory_id');
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

        $posts = Post::all();
        $postCount = $posts->where('user_id', auth()->user()->id)->count();

        $post = Post::find($id);

        return view('blog.show', compact('post', 'postCount'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::all();
        $postCount = $posts->where('user_id', auth()->user()->id)->count();

        $categories = Category::all();
        $post = POST::where('id', $id)->first();
        $tags = Tag::all();
        $subcategories = Subcategory::all();

        return view('blog.edit', compact('post','categories', 'tags', 'postCount', 'subcategories'));
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
            'subcategory_id' => 'required',
            'tags' => 'required'
        ]);

        $post_update = Post::where('id', $id)->first();

        $post_update->title = $request->input('title');
        $post_update->category_id = $request->input('category_id');
        $post_update->subcategory_id = $request->input('subcategory_id');
        $slug = Str::slug($request->title, '-');
        $post_update->description = $request->input('description');
        $post_update->slug = $slug;

        $file= $request->file('image_path');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('images'), $filename);
        $post_update->image_path = $filename;

        $post_update->save();

        $tags = $request->input('tags');
        $post_update->tags()->sync($tags);

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
