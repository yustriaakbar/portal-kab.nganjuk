@extends('layouts.ui')
@section('judul','Berita')
@section('content')
    <!-- offers_area_start -->
    <div class="our_department_area">
        <div class="container">
         @foreach($berita as $brt => $value)
            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center mb-55">
                        <h2><strong>{{ $value->judul }}</strong></h2>
                    </div>
                </div>

        <div class="col-md-12">
            <div class="card-body d-flex flex-column align-items-start">
              <h4 class="mb-0">
                <img src="{{ asset('images/berita/'.$value->gambar) }}" style="max-width: 100%; max-height: 100%; display: block; margin: auto;">
                <br>
              <div class="text-muted"><p>{{ $value->tanggal }} | {{ $value->name }}</p></div>
              <p class="card-text mb-auto mt-5 text-justify">{{($value->isi)}}</p>
          </div>
        </div>
        @endforeach

            </div>
            
        </div>
    </div>
    <!-- offers_area_end -->
@endsection