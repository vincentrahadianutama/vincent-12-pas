@extends('layouts.newsLayouts')

    @section('judul')
    Berita Terkini
    @endsection

    @section('content')
    <h1>{{$news->title}}</h1>
    <img src="{{asset('/img'. $news->image)}}">
    <p>{{$news->news}}</p>

    <a href="/news" class="btn btn-secondary btn-sm">Kembali</a>
    @endsection