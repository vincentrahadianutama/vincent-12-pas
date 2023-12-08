    @extends('layouts.newsLayouts')

    @section('judul')
    Berita Terkini
    @endsection

    @section('content')

    <table class="table">
    @csrf
  <thead>
  <a href="/news/create" class="btn btn-success btn-sm">Tambah</a>
    <tr>
      <th scope="col">no</th>
      <th scope="col">Judul</th>
      <th scope="col">Berita</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @forelse($news as $key => $value)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$value->title}}</td>
      <td>{{$value->news}}</td>
      <td><a href="/news/{{$value->id}}" class="btn btn-info btn-sm">Lihat</a>
      <a href="/news/{{$value->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
      <form action="/news/{{$value->id}}" method="POST">  
      @method('DELETE')
       <input type="submit" value="delete" class="btn btn-danger btn-sm">
       @empty
       <p>Tidak Ada Berita</p>
       </td>
      </form>
      @endforelse     
    </tr>
    
  </tbody>
</table>

   
   @endsection
   

    

