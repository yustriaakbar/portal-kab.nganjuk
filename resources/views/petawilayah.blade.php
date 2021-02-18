@extends('layouts.ui')
@section('judul','Portal Kab. Nganjuk')
@section('content')
    <div class="bradcam_area breadcam_bg bradcam_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Peta Wilayah</h3>
                        <p><a href="{{ url('/beranda') }}">Home /</a> Peta Wilayah</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->
    <br><br><br>
    <h3 class="text-center">Peta Wilayah</h3>
    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253102.01813797693!2d111.79512528438403!3d-7.605523516073563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e784be1466228d1%3A0x3027a76e352bdc0!2sKabupaten%20Nganjuk%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1601189667656!5m2!1sid!2sid" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <br><br>
@endsection
