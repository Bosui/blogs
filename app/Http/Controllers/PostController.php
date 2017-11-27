<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = post::orderBy('id', 'desc') -> paginate(5);
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show  the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
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
        $this->validate($request, array(
                'title'=>'required|max:255',
                'slug'=> 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                'body'=>'required'
              ));

        $post = new Post;
        $post ->title = $request ->title;
        $post->slug = $request -> slug;
        $post->body = $request -> body;

        $post->save();

        Session::flash('success','The blog pos create successuflly save !');

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
        return view('posts.show') -> withPost($post);

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
        return view('posts.edit') -> withPost($post);
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
        // validate exif_read_data
        $this->validate($request, array(
                'title'=>'required|max:255',
                'slug'=> 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                'body'=>'required'
              ));
        $post = Post::find($id);
        $post-> title = $request->input('title' );
        $post-> slug = $request->input('slug');
        $post-> body = $request->input('body');

        $post->save();
        //set flash dara whit success messsages
        Session::flash('success', 'This post was successfully saved');
        // redirect whith flash data to posts.show
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
        //
        $post= Post::find($id);
        $post->delete();
        Session::flash('success', 'The post was successfully deleted.');
        return redirect() ->route('posts.index');
    }
}
