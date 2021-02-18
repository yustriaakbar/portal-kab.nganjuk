@extends('layouts.ui')
@section('judul','Beranda')
@section('css')
<style>
    .box{
        width: 250px;        
    }    
    .box.large{
        height: 300px;
    }
    .box.small{
        height: 400px;
        width: 500px;
    }
</style>
@endsection
@section('content')
<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    @foreach($slider as $value)
    <li data-target="#carousel-example-1z" data-slide-to="{{  $loop->index }}" class="{{ $loop->first ? 'active' : ''}}"></li>
    @endforeach
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner">
    <!--First slide-->
    @foreach($slider as $key => $sl)
    <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
      <img class="d-block w-100" src="{{ asset('images/slider/'.$sl->foto) }}"
        alt="First slide">
    </div>
    @endforeach 
    <!--/First slide-->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
<div class="our_department_area">
<div class="container mt-20">
    <h1 class="text-center"><strong>Berita Terkini</strong></h1>
    <br><br>
      <div class="row mb-2">
        @foreach($berita as $brt => $value)
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 h-md-250" style="background: rgb(235, 240, 243);">
            <div class="card-body d-flex flex-column align-items-start">
              <h4 class="mb-0">
                <div>
                <img class="box small" src="{{ asset('images/berita/'.$value->gambar) }}" style="max-width: 100%; max-height: 100%; display: block">
                </div>
                <br>
                <a class="text-dark" href="#">{{ $value->judul }}</a>
              </h4>
              <div class="mb-1 text-muted"><p>{{ $value->tanggal }} | {{ $value->name }}</p></div>
              <p class="card-text mb-auto">{!! Str::words($value->isi, 11,'....')  !!}</p>
              <a href="{{url('berita/'.$value->id)}}">Selengkapnya</a>
            </div>
            <!--
            <img class="card-img-right flex-auto d-none d-md-block" src="{{ asset('images/berita/'.$value->gambar) }}" width="150"> -->
          </div>
        </div>
        @endforeach
      </div>
    </div>
    </div>
</div>
@endsection