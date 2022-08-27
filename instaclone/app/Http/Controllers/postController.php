<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use App\Models\Image;



class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::orderBy('id','desc')->paginate(5);

        $user = auth()->user();

 

        return view('posts.index', compact('posts','user'));
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user();
        return view('posts.create', compact('user'));
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
      
            'image' => 'required',
      
        ]);
       
        $post = new post();
        $post->caption = $request->caption;

        $post->user_id = auth()->user()->id;
        $post->save();
        foreach ($request->file('image') as $imagefile) {  
            $image = new Image;
            $path = $imagefile->store('public/images');
            $image->post_id = $post->id;
            
            
            $image->image = basename($path);
            $image->save();
   }
        return redirect()->route('posts.index')->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = post::find($id);
        $image = Image::where('post_id',$id)->get();
        $user = auth()->user();
        return view('posts.show', compact('post','image','user'));
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function edit($id)
    {
        $post = post::find($id);
        return view('posts.edit', compact('post'));
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
            'image' => 'required',
        ]);
        $post = post::find($id);
        $post->caption = $request->caption;
        $post->save();
        foreach ($request->file('image') as $imagefile) {  
            $image = new Image;
            $path = $imagefile->store('public/images');
            $image->post_id = $post->id;
            
            
            $image->image = basename($path);
            $image->save();
    }
        return redirect()->route('posts.index')->with('success','Post updated successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = post::find($id);
        $image = Image::where('post_id',$id)->get();
        foreach($image as $img){
            $img->delete();
        }
        $post->delete();
        return redirect()->route('posts.index')->with('success','Post deleted successfully');
    }
}
