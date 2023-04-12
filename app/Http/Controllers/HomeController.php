<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Reply;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $totalRows = Post::count();
        $skipRows = max($totalRows - 3, 0);
        $previousthreeRows = Post::skip($skipRows)->take(3)->get();


        $last_post = Post::latest()->limit(1)->get();
        $last_two_posts = Post::latest()->limit(2)->get();
        $last_four_posts = Post::latest()->limit(4)->get();

        $random_posts = Post::inRandomOrder()->limit(8)->get();
        $all_posts = Post::all();
        $all_categories = Category::all();

        $most_read_posts = Post::orderByDesc('views')->take(3)->get();

        $users_posts = Post::join('users', 'posts.user_id', '=', 'users.id')
            ->where('users.is_admin', false)
            ->inRandomOrder()
            ->limit(8)
            ->get();


        return view('welcome', compact('random_posts', 'all_posts', 'all_categories', 'last_four_posts', 'last_post', 'last_two_posts', 'previousthreeRows', 'most_read_posts', 'users_posts'));

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $post = Post::find($id);
        $post->increment('views');
        $random_posts = Post::inRandomOrder()->limit(3)->get();
        $most_read_posts = Post::orderByDesc('views')->take(5)->get();

        // Find related posts based on category
        $related_posts = Post::where('category_id', $post->category_id)
        ->where('id', '<>', $post->id)
        ->orderBy('created_at', 'desc')
        ->take(3)
        ->get();

        // Fetch parent comments and their child comments
        $replies = Reply::all();
        $comments = Comment::where('post_id', $id)->get();


        return view('home.show', compact('post', 'random_posts', 'most_read_posts', 'comments','replies', 'related_posts'));

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $posts = Post::where('title', 'like', '%'.$searchTerm.'%')->orderBy('created_at', 'desc')->paginate(5);

        return view('home.search', compact('posts', 'searchTerm'));
    }
}
