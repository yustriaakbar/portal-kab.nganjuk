<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('judul')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="images/logo.png">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield('css')
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</head>
<body>
    <!-- header-start -->
    <header>       
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-lg-3">
                            <div class="logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('images/logo.png') }}" width="80" class="img-responsive">
                                    <img src="{{ asset('images/logo2.png') }}" width="200" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="{{ url('/beranda') }}">Beranda</a></li>

                                        <li><a href="#">Profil<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{ url('/kepaladaerah') }}">Kepala Daerah</a></li>
                                                <li><a href="{{ url('/lambang') }}">Lambang</a></li>
                                                <li><a href="{{ url('/visi-misi') }}">Visi-Misi</a></li>
                                                <li><a href="{{ url('/sejarah') }}">Sejarah</a></li>


                                            </ul>
                                        </li>
                                        <li><a href="{{ url('/galeri') }}">Galeri</a></li>
                                        <li><a href="#">Fasilitas<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{ url('/kesehatan') }}">Kesehatan</a></li>
                                                <li><a href="{{ url('/transportasi') }}">Transportasi</a></li>
                                                <li><a href="{{ url('/hotel') }}">Hotel</a></li>
                                                <li><a href="{{ url('/spbu') }}">SPBU</a></li>
                                                <li><a href="{{ url('/perbankan') }}">Perbankan</a></li>


                                            </ul>
                                        </li>
                                        <li><a href="{{ url('/peta') }}">Peta Wilayah</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-1 col-lg-none d-lg-block">
                            <div class="Appointment">
                                @if (Route::has('login'))
                                <div class="book_btn d-none d-lg-block">
                                    @auth
                                    <a href="{{ url('/dashboard') }}" class="">{{ Auth::user()->name }}</a>
                                    @else
                                    <a href="{{ url('/login') }}" class="">Login</a>
                                    @endauth
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    @yield('content')
                <!-- footer -->
            <footer class="page-footer" style="background-color:#50A0ff;  border-top : 10px solid #294AF9;">
                <div class="container text-center text-md-left">
                <div class="row text-center text-md-left pb-3">
                    <div class="col-md-4 " style="color: #424242; text-align:left;">
                    <br><br>
                    <p><div style="font-size:12pt; font-weight: bold; margin-top: -7%;" >Pemerintah Kabupaten Nganjuk</div><hr></p>
                    <p>
                        <i class="fa fa-home mr-1"></i> Jl. Jend. Basuki Rachmat No. 01 Nganjuk</p>
                    <p>
                        <i class="fa fa-envelope mr-1"></i> yustria@nganjuk.com</p>
                    <p>
                        <i class="fa fa-phone mr-1"></i> (0358) 123456
                    </p>
                    </div>

                    <!-- Grid column -->
                    <div class="col-md-8">
                        <br><br>
                    <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1398.2149030689927!2d111.90125516696953!3d-7.602275930714265!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e784b07b3b273bb%3A0xfcd004dbcaa09f16!2sPendopo+Kabupaten+Nganjuk!5e0!3m2!1sid!2sid!4v1552980936317" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    </div>
                </div>
                <hr>

                <!-- Grid row -->
                <div class="row d-flex align-items-center">
                    <div class="col-md-12" style="color: #424242; ">
                    <p class="text-center">© 2020 Copyright:
                        <a href="#">
                        <strong style="color: #424242; "> Dinas Komunikasi dan Informatika Kab. Nganjuk</strong>
                        </a>
                    </p>
                    </div>
                </div>
                <br>
            </footer>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }

        });
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
    </script>
    @yield('js')
</body>

</html>