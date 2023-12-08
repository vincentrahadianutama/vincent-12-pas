@extends('layouts.newsLayouts')

    @section('judul')
    Berita Terkini
    @endsection

    @section('content')
    @csrf
   <main class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleFade" class="carousel slide carousel-fade">
                    <div class="carousel-inner">
                    @forelse($news as $key => $value)
                      <div class="carousel-item active">
                        <img src="{{asset('/img'. $value->image)}}" class="d-block w-100" alt="">
                      </div>
                     
                      
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Berita Terkini</h4>
                    </div>
                    <div class="container p-2">
                        <div class="row gx-2 ">
                            <div class="col-4 my-2">
                           
                                <div class="card" style="width: 18rem;">
                                <div style="max-height: 35px; overflow:hidden;">
                                <img src="{{asset('/img'. $value->image)}}" >
                              </div>
                                
                                    <div class="card-body">
                                      <h5 class="card-title">{{$value->title}}</h5>
                                      <p class="card-text">{{$value->news}}</p>
                                      @empty
                                      <p>Tidak ada berita</p>
                                      @endforelse
                                      <a href="/news" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                    
                                  </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </main>
   @endsection
   