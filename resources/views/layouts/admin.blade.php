<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('judul')</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="images/logo.png" type="image/x-icon"/>

    <!-- Fonts and icons -->
    <script src="{{ asset('admin/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {"families":["Lato:300,400,700,900"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['admin/css/fonts.min.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/atlantis.min.css') }}">

</head>
<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">
                
                <a href="{{url('home')}}" class="logo">
                    <img src="" class="navbar-brand">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
                
                <div class="container-fluid">
                    <div class="collapse" id="search-nav">
                        <form class="navbar-left navbar-form nav-search mr-md-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-search pr-1">
                                        <i class="fa fa-search search-icon"></i>
                                    </button>
                                </div>
                                <input type="text" placeholder="Search ..." class="form-control">
                            </div>
                        </form>
                    </div>
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item toggle-nav-search hidden-caret">
                            <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                <div class="avatar-sm">
                                @if(empty(Auth::user()->photo))
                                    <img src="{{ asset('images/photo/profile.png') }}" alt="..." class="avatar-img rounded-circle">
                                @else
                                    <img src="{{asset($foto_profil->photo)}}" alt="..." class="avatar-img rounded-circle">
                                @endif  
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg">
                                            @if(empty(Auth::user()->photo))
                                                <img src="{{ asset('images/photo/profile.png') }}" alt="image profile" class="avatar-img rounded">
                                            @else
                                                <img src="{{asset($foto_profil->photo)}}" alt="image profile" class="avatar-img rounded">
                                            @endif
                                            </div>
                                            <div class="u-text">
                                                <h4>{{ Auth::user()->name }}</h4>
                                                <p class="text-muted">{{ Auth::user()->email }}</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">My Profile</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">           
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            @if(empty(Auth::user()->photo))
                            <img src="{{ asset('images/photo/profile.png') }}" alt="..." class="avatar-img rounded-circle">
                            @else
                            <img src="{{asset($foto_profil->photo)}}" alt="..." class="avatar-img rounded-circle">
                            @endif
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    {{ Auth::user()->name }}
                                    <span class="user-level">Administrator</span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>

                            <div class="collapse in" id="collapseExample">
                                <ul class="nav">
                                    <li>
                                        <a href="#profile">
                                            <span class="link-collapse">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#edit">
                                            <span class="link-collapse">Edit Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#settings">
                                            <span class="link-collapse">Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-primary">
                        @if(Request::is('dashboard'))
                        <li class="nav-item nav-link active">
                        @else
                        <li class="nav-item">
                        @endif
                            <a href="{{url('dashboard')}}">
                                <i class="fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <!--
                        @if(Request::is('user'))
                        <li class="nav-item nav-link active">
                        @else
                        <li class="nav-item">
                        @endif
                            <a href="{{url('user')}}">
                                <i class="fas fa-users"></i>
                                <p>Manajemen User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#forms">
                                <i class="fas fa-warehouse"></i>
                                <p>Manajemen Fasilitas</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="forms">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="">
                                            <span class="sub-item">Kesehatan</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>-->
                        @if(Request::is('slider'))
                        <li class="nav-item active">
                            <a data-toggle="collapse" href="#websetting">
                                <i class="fas fa-cog"></i>
                                <p>Web Setting</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse show" id="websetting">
                                <ul class="nav nav-collapse">
                                    <li class="active">
                                        <a href="{{url('slider')}}">
                                            <span class="sub-item">Slideshow</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="{{url('manajemen-berita')}}">
                                            <span class="sub-item">Manajemen Berita</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('manajemen-galeri')}}">
                                            <span class="sub-item">Galeri</span>
                                        </a>
                                    </li>                                                                 
                        @elseif(Request::is('manajemen-berita'))
                        <li class="nav-item active">
                            <a data-toggle="collapse" href="#websetting">
                                <i class="fas fa-cog"></i>
                                <p>Web Setting</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse show" id="websetting">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="{{url('slider')}}">
                                            <span class="sub-item">Slideshow</span>
                                        </a>
                                    </li>                                   
                                    <li class="active">
                                        <a href="{{url('manajemen-berita')}}">
                                            <span class="sub-item">Manajemen Berita</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('manajemen-galeri')}}">
                                            <span class="sub-item">Galeri</span>
                                        </a>
                                    </li>                                    
                        @elseif(Request::is('manajemen-galeri'))
                        <li class="nav-item active">
                            <a data-toggle="collapse" href="#websetting">
                                <i class="fas fa-cog"></i>
                                <p>Web Setting</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse show" id="websetting">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="{{url('slider')}}">
                                            <span class="sub-item">Slideshow</span>
                                        </a>
                                    </li>                                   
                                    <li>
                                        <a href="{{url('manajemen-berita')}}">
                                            <span class="sub-item">Manajemen Berita</span>
                                        </a>
                                    </li>                                   
                                    <li class="active">
                                        <a href="{{url('manajemen-galeri')}}">
                                            <span class="sub-item">Galeri</span>
                                        </a>
                                    </li>
                        @else
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#websetting">
                                <i class="fas fa-cog"></i>
                                <p>Web Setting</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="websetting">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="{{url('slider')}}">
                                            <span class="sub-item">Slideshow</span>
                                        </a>
                                    </li>                                   
                                    <li>
                                        <a href="{{url('manajemen-berita')}}">
                                            <span class="sub-item">Manajemen Berita</span>
                                        </a>
                                    </li>                                   
                                    <li>
                                        <a href="{{url('manajemen-galeri')}}">
                                            <span class="sub-item">Galeri</span>
                                        </a>
                                    </li>
                        @endif
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->
        @yield('content')
    </div>

    <!--   Core JS Files   -->
    <script src="{{ asset('admin/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('admin/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('admin/js/core/bootstrap.min.js') }}"></script>

    <!-- jQuery UI -->
    <script src="{{ asset('admin/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ asset('admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>


    <!-- Chart JS -->
    <script src="{{ asset('admin/js/plugin/chart.js/chart.min.js') }}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{ asset('admin/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Chart Circle -->
    <script src="{{ asset('admin/js/plugin/chart-circle/circles.min.js') }}"></script>

    <!-- Datatables -->
    <script src="{{ asset('admin/js/plugin/datatables/datatables.min.js') }}"></script>

    <!-- Bootstrap Notify -->
    <script src="{{ asset('admin/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

    <!-- jQuery Vector Maps -->
    <script src="{{ asset('admin/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>

    <!-- Sweet Alert -->
    <script src="{{ asset('admin/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Atlantis JS -->
    <script src="{{ asset('admin/js/atlantis.min.js') }}"></script>
    <script>
        Circles.create({
            id:'circles-1',
            radius:45,
            value:60,
            maxValue:100,
            width:7,
            text: 3,
            colors:['#f1f1f1', '#FF9E27'],
            duration:400,
            wrpClass:'circles-wrp',
            textClass:'circles-text',
            styleWrapper:true,
            styleText:true
        })

        Circles.create({
            id:'circles-2',
            radius:45,
            value:70,
            maxValue:100,
            width:7,
            text: 2,
            colors:['#f1f1f1', '#2BB930'],
            duration:400,
            wrpClass:'circles-wrp',
            textClass:'circles-text',
            styleWrapper:true,
            styleText:true
        })

        Circles.create({
            id:'circles-3',
            radius:45,
            value:40,
            maxValue:100,
            width:7,
            text: 12,
            colors:['#f1f1f1', '#F25961'],
            duration:400,
            wrpClass:'circles-wrp',
            textClass:'circles-text',
            styleWrapper:true,
            styleText:true
        })

        var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

        var mytotalIncomeChart = new Chart(totalIncomeChart, {
            type: 'bar',
            data: {
                labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
                datasets : [{
                    label: "Total Income",
                    backgroundColor: '#ff9e27',
                    borderColor: 'rgb(23, 125, 255)',
                    data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false,
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            display: false //this will remove only the label
                        },
                        gridLines : {
                            drawBorder: false,
                            display : false
                        }
                    }],
                    xAxes : [ {
                        gridLines : {
                            drawBorder: false,
                            display : false
                        }
                    }]
                },
            }
        });

        $('#lineChart').sparkline([105,103,123,100,95,105,115], {
            type: 'line',
            height: '70',
            width: '100%',
            lineWidth: '2',
            lineColor: '#ffa534',
            fillColor: 'rgba(255, 165, 52, .14)'
        });
    </script>
    @yield('js')
    @yield('script')
</body>
</html>
