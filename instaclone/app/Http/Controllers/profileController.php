<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user)
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input =  $request->all();
        if($request->file('image')->isValid()){
            $path = $request->file('image')->store('public/images');
            $input['image'] = basename($path);
        }
        $user = auth()->user();
       
        $user->profile()->create($input);
        return redirect()->route('profile.show', $user->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $profile = User::find($id)->profile;

        $user = User::find($id);

        $posts = $user->posts;

        return view('profile.index', ['profile' => $profile, 'posts' => $posts]);
       
       
       
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = User::find($id)->profile;

        return view('profile.edit', ['profile' => $profile]);
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
        $input =  $request->only(['bio', 'gender', 'webiste']);
        if($request->file('image')->isValid()){
            $path = $request->file('image')->store('public/images');
            $input['image'] = basename($path);
        }
        $user = auth()->user();
        $user->profile()->update($input);
        return redirect()->route('profile.show', $user->id);
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
}
