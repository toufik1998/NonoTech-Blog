<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;


use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {
        $categoryCount = Category::count();
        $tagCount = Tag::count();
        $postCount = Post::count();
        $userCount = User::count();

        $searchQuery = $request->input('searchQuery');

        $categories = Category::query();
        if ($searchQuery) {
            $categories->where('category', 'like', "%$searchQuery%");
        }
        $categories = $categories->paginate(5);
        return view('category.index', compact('categories', 'categoryCount', 'tagCount', 'postCount', 'userCount'));
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

        return view('category.create', compact('categoryCount', 'tagCount', 'postCount', 'userCount'));
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
            'category' => 'required',

        ]);

        $category = new Category();
        $category->category = $request->input('category');

        $category->save();

        return redirect('category')->with('flash_message', 'plat added secuusefully');


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

        $category = Category::find($id);
        return view('category.edit', compact('category', 'categoryCount', 'tagCount', 'postCount', 'userCount'));
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
            'category' => 'required',

        ]);

        $category_update = Category::where('id', $id)->first();
        $category_update->category = $request->input('category');

        $category_update->update();

        return redirect('category')->with('flash message', 'student updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect('category')->with('flash_message', 'plat deleted succefully');
    }
}
