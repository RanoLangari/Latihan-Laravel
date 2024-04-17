<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = DB::table("post")->select('id','title','content', 'updated_at')->where('active', true)->get();
        $view_data =[
            "posts"=> $posts
        ];
        return view('posts.index', $view_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');
        DB::table('post')->insert([
            'title' => $title,
            'content' => $content,
            'created_at' => date('Y-m-d H-i-s'),
            'updated_at' => date('Y-m-d H-i-s')
            ]); 
        return redirect('posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts = DB::table("post")->select('title','content', 'updated_at')->where('id', $id)->first();
        $view_data =[
            "posts"=> $posts
        ];
        return view('posts.show', $view_data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $posts = DB::table("post")->select('id','title','content')->where('id', $id)->first();
        $view_data =[
            "posts"=> $posts
        ];
        return view('posts.edit', $view_data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('post')->where('id', $id)->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'updated_at' => date('Y-m-d H-i-s')
            ]);
        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('post')->where('id', $id)->delete();
        return redirect('posts');
    }
}
