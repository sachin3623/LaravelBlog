<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;
use App\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('posts.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->Validate($request, array(
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'category_id' => 'required',
            'body' => 'required'

             ));

        //store in database
        $post = new Post;

        $post->title= $request->title;
        $post->author= $request->author;
        $post->category_id= $request->category_id;
        $post->body= $request->body;

        $post->save();
        //sessions
        Session::flash('success', 'The blog post was successfully saved!');

        return redirect()->route('posts.show', $post->id);


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
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //finding in the database
        $post = Post::find($id);

        //returning
        return view('posts.edit')->withPost($post);

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
        //validation
        $this->Validate($request, array(
           'title' => 'required|max:255',
            'body' => 'required'  
             ));
        //save

        $post= Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');

        //save
        $post->save();

        //set flash data for flash messages 
         Session::flash('success', 'This post was successfully saved');

         return redirect()->route('posts.show', $post->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        Session::flash('success', 'The post was successfully deleted');
        return redirect()->route('posts.index');
    }
}
