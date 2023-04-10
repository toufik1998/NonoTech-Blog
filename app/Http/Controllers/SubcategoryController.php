<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
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

        $subcategories = Subcategory::query();
        if ($searchQuery) {
            $subcategories->where('subcategory', 'like', "%$searchQuery%");
        }
        $subcategories = $subcategories->paginate(5);
        return view('subcategory.index', compact('subcategories', 'categoryCount', 'tagCount', 'postCount', 'userCount'));
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

        $categories = Category::all();

        return view('subcategory.create', compact('categoryCount', 'tagCount', 'postCount', 'userCount', 'categories'));
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
            'subcategory' => 'required',
            'category_id' => 'required',

        ]);

        $subcategory = new Subcategory();
        $subcategory->subcategory = $request->input('subcategory');
        $subcategory->category_id = $request->input('category_id');

        $subcategory->save();

        return redirect('subcategory')->with('flash_message', 'Subcategory added secuusefully');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */

     public function edit($id)
     {
         $categoryCount = Category::count();
         $tagCount = Tag::count();
         $postCount = Post::count();
         $userCount = User::count();

         $subcategory = Subcategory::find($id);
         return view('subcategory.edit', compact('subcategory', 'categoryCount', 'tagCount', 'postCount', 'userCount'));
     }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */

     public function update(Request $request, $id)
    {
        $request->validate([
            'subcategory' => 'required',

        ]);

        $subcategory_update = Subcategory::where('id', $id)->first();
        $subcategory_update->subcategory = $request->input('subcategory');

        $subcategory_update->update();

        return redirect('subcategory')->with('flash message', 'SubCategory updated');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subcategory::destroy($id);
        return redirect('subcategory')->with('flash_message', 'SubCategory deleted succefully');
    }
}
