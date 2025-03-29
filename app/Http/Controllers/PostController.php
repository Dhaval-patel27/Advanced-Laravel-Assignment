<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showpostfrom()
    {


        if (Auth::check() && Auth::user()->status == 'Admin') {
            return view('registerpost');
        } elseif (Auth::check() && Auth::user()->status == 'Normal') {
            return redirect(route('normal'));
        } else {
            return redirect(route('userlogin'));
        }


        // return view('registerpost');

        // if (Auth::check()) {
        //     return view('registerpost');
        // } else {
        //     return redirect(route('userlogin'));
        // }
    }
    public function addpost(Request $request)
    {


        // image Upload
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('upload'), $imageName);



        // dd($request->all());
        // dd(Auth::user());
        $p_id = Auth::user()->id;
        $posts = new Post;

        $posts->title = $request->title;
        $posts->decs = $request->decs;
        $posts->image = $imageName;
        $posts->date = $request->date;
        $posts->u_id = $p_id;
        $posts->save();
        return redirect(route('myshowpost', Auth::id()));
    }

    public function showpost()
    {

        if (Auth::check() && Auth::user()->status == 'Admin') {
            $posts = Post::where('u_id', Auth::id())->get();
            return view('showpost', ['post' => $posts]);
        } elseif (Auth::check() && Auth::user()->status == 'Normal') {
            return redirect(route('normal'));
        } else {
            return redirect(route('userlogin'));
        }



        // if (Auth::check()) {
        //     $posts = Post::where('u_id', Auth::id())->get();
        //     return view('showpost', ['post' => $posts]);
        // } else {
        //     return redirect(route('userlogin'));
        // }
    }

    public function normal()
    {
        $post_data = Post::all();
        return view('normal', ['post_data' => $post_data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post_data = Post::find($id);
        return view('editform', ['post_data' => $post_data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // image Upload
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('upload'), $imageName);

        $posts = Post::find($id);
        $p_id = Auth::user()->id;


        $posts->title = $request->title;
        $posts->decs = $request->decs;
        $posts->image = $imageName;
        $posts->date = $request->date;
        $posts->u_id = $p_id;
        $posts->save();
        return redirect(route('myshowpost', Auth::id()));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect(route('myshowpost', Auth::id()));
    }
}