@extends('layouts.ui')
@section('judul','Portal Kab. Nganjuk')
@section('css')

@endsection
@section('content')
    <!-- offers_area_start -->
    <div class="our_department_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center mb-55">
                        <h2><strong>GALERI</strong></h2>
                    </div>
                </div> 
        @foreach($foto as $gl)    
        <div class="col-md-3">
          <div class="card mb-4 shadow-sm">
            <img class="bd-placeholder-img card-img-top" src="{{ asset('images/galeri/'.$gl->foto) }}">
          </div>
        </div>
        @endforeach

           </div>
        </div>
    </div>
    <!-- offers_area_end -->
@endsection
@section('script')

@endsection