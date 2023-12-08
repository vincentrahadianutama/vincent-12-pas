@extends('layouts.newsLayouts')

@section('judul')
Menambahkan Berita
@endsection

@section('content')
<form action="/news" method="POST" enctype="multipart/form-data">
  @csrf
<div class="mb-3">
    <label class="form-label">Title</label>
    <input type="text" class="form-control" placeholder="Title" name="title">
  </div>
  @error('title')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
    <div class="mb-3">
    <label class="form-label">Image</label>
    <input type="file" class="form-control" placeholder="Title" name="image">
  </div>
  @error('image')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  <div class="mb-3">
    <label class="form-label">News Description</label>
    <textarea class="form-control" rows="10" cols="20" name="news"></textarea>
  </div>
  @error('news')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection