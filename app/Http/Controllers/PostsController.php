<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id,$xs)
    {
        return "its member number ". $id ." " .$xs;
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
        return "this is show yaaaaa ";
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
    public function contact(){
        $friends = ['jose','micky','note','missy','tofe'];
        return view('contact', compact('friends'));
    }


    public function show_post($id,$name){

        return view('show_post', compact('id','name'));
    }
    /*
    |--------------------------------------------------------------------------
    | Eloquent retriveing  Data
    |--------------------------------------------------------------------------
    |*/


    public function uni(){

        $posts = Post:: where('id', 5)->orderBy('id','desc')->take(1)->get();
        foreach ($posts as $post){

            return $post -> title;
        }


    }
    /*
|--------------------------------------------------------------------------
| Eloquent inserting Data
|--------------------------------------------------------------------------
|*/


    public function ins(){

        $post = new Post();

        $post->title = 'Eloquent is here';
        $post->content='Hallo this data is inserted by Eloquent Model';

        $post->save();
    }

    public function ins2(){

        $post = Post::find(1);

        $post->title = 'Eloquent is here 2222 ';
        $post->content='Hallo this data is inserted by Eloquent Model2222 ';

        $post->save();
    }
}


