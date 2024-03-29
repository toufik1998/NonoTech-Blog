<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;


use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $tags = Tag::all();

    //     return view('tags.index', compact('tags'));

    // }

    public function index(Request $request)
    {
        $categoryCount = Category::count();
        $tagCount = Tag::count();
        $postCount = Post::count();
        $userCount = User::count();

        $searchQuery = $request->input('searchQuery');

        $tags = Tag::query();
        if ($searchQuery) {
            $tags->where('name', 'like', "%$searchQuery%");
        }
        $tags = $tags->paginate(5);
        return view('tags.index', compact('tags', 'categoryCount', 'tagCount', 'postCount', 'userCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryCount = Category::count();
        $tagCount = Tag::count();
        $postCount = Post::count();
        $userCount = User::count();

        return view('tags.create', compact('categoryCount', 'tagCount', 'postCount', 'userCount'));
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
            'tag' => 'required|unique:App\Models\Tag,name|max:255',
        ]);


        $tag = new Tag();
        $tag->name = $request->input('tag');

        $tag->save();

        return redirect('tag')->with('flash_message', 'Tag added secuusefully');
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
        $categoryCount = Category::count();
        $tagCount = Tag::count();
        $postCount = Post::count();
        $userCount = User::count();

        $tag = Tag::find($id);
        return view('tags.edit', compact('tag', 'categoryCount', 'tagCount', 'postCount', 'userCount'));
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
            'tag' => 'required|unique:App\Models\Tag,name|max:255',
        ]);


        $tag_update = Tag::where('id', $id)->first();
        $tag_update->name = $request->input('tag');

        $tag_update->update();

        return redirect('tag')->with('flash message', 'tag updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tag::destroy($id);
        return redirect('tag')->with('flash_message', 'tag deleted succefully');
    }
}
