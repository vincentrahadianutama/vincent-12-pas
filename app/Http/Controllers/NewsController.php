<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NewsController extends Controller
{
    public function create(){
        return view('news.create');
    }

    public function push(Request $request){
         $request->validate([
            'title' => 'required',
            'image'=> 'image|file',
            'news'=> 'required'
        ]);
        if($request->file('image')){
            $validatedData['image']= $request->file('image')->store('/public/img');
        }
        DB::table('news')->insert([
            "title"=>request("title"),
            "image"=>request("image"),
            "news"=>request("news")
        ]);

        return redirect('/news');
    }

    public function index(){
        $news = DB::table('news')->get();
        return view('news.news', ['news'=>$news]);
    }

    public function show($id){
      $news  = DB::table('news')->where('id', $id)->first();
      return view('news.lihat', ['news'=>$news]);
    }
    public function edit($id) {
        $news  = DB::table('news')->where('id', $id)->first();
        return view('news.edit', ['news'=>$news]);
    }
    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'image'=> 'image|file',
            'news'=> 'required'
        ]);
        DB::table('news')
        ->where('id', $id)
        ->update(['title'=>$request->title,"image"=>$request->image, "news"=>$request->news]);
        return redirect('/news');
    }
    public function delete($id){
    DB::table('news')->where('id', $id)->delete();
    return redirect('/news');
    }
    }
