<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<link rel="stylesheet" href="{{ asset('landingpage/css/bootstrap.min.css') }}">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Portal Kab. Nganjuk</title>
  <link href="{{ asset('landingpage/img/log.png') }}" rel="shortcut icon" />

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('landingpage/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{ asset('landingpage/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="{{ asset('landingpage/css/grayscale.css') }}" rel="stylesheet">
  <link href="{{ asset('landingpage/css/footer-distributed-with-address-and-phones.css') }}" rel="stylesheet">
  <link href="{{ asset('landingpage/css/grid.css') }}" rel="stylesheet">
  <link href="{{ asset('landingpage/css/style.css') }}" rel="stylesheet">
  <!--<script src=""></script>-->
  <script src="{{ asset('landingpage/js/hvr.js') }}"></script>
  <script>
    (function() {
      var cx = '003045040388392274474:2dx0pzkmxdw';
      var gcse = document.createElement('script');
      gcse.type = 'text/javascript';
      gcse.async = true;
      gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
      '//www.google.com/cse/cse.js?cx=' + cx;
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(gcse, s);
    })();
  </script>
</head>

<style type="text/css">
  header {
    position: relative;
    background-color: black;
    height: 75vh;
    min-height: 25rem;
    width: 100%;
    overflow: hidden;
  }

  header video {
   position: fixed;
   right: 0;
   bottom: 0;
   min-width: 100%;
   min-height: 100%;
 }

 header .container {
  position: relative;
  z-index: 2;
}

header .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.5;
  z-index: 1;
}

@media (pointer: coarse) and (hover: none) {
  header {
    background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
  }
  header video {
    display: none;
  }
}
</style>

<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="{{ asset('landingpage/img/logo.png') }}" width="90%"/> </a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
           <!--  <li class="nav-item">
              <a class="nav-link">| Portal Resmi Pemerintah Kabupaten Nganjuk </a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div class=""></div>
      <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="{{ asset('landingpage/img/3mbvid.mp4') }}" type="video/mp4">
        </video>
        <div class="container h-100">

          <div class="intro-body">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 mx-auto">
                 <center><a href="{{ url('/beranda') }}" style="margin-top: 160px; margin-bottom: 1px " class="btn btn-default btn-lg">Website Pemkab Nganjuk</a></center> 
               </div>            
             </div>
             
             <div class="main col-lg-8 mx-auto ">
              <ul id="og-grid" class="og-grid">
              <li>
                
                <a onClick="window.open('{{ url('/beranda') }}');" >
                  <img src="{{ asset('landingpage/images/12.png') }}" width="150" height="150" class="lazy img-responsive img-border"/>
                  <div class="caption"><p style="font-size: 9pt !important; text-align: center;">Beranda</p></div>               
                </a>  
              </li>

               <li>
                <a href="#" data-title="Informasi Anggaran" data-description='
                <div class="center-block">
                  <div class="row">
                    <div class="span3">
                      <ul>
                        <li><a href="" target="_blank">Transparansi Anggaran Daerah (TPAD)</a></li>                     
                        <li><a href="" target="_blank">Sistem Akuntabilitas Kinerja Instansi Pemerintahan (SAKIP)</a></li>
                      </ul>
                    </div>                    
                  </div>
                </div>
                '>   
                <img src="{{ asset('landingpage/images/11.png') }}" width="150" height="150" class="lazy img-responsive img-border"/>
                <div class="caption"><p style="font-size: 9pt !important; text-align: center;">Informasi Anggaran</p></div>              
              </a>       
            </li>
            
            <li>
              <a href="#" data-title="informasi pendidikan" data-description='
              <div class="center-block">
                <div class="row">
                  <div class="span3">
                    <ul>
                      
                      <li><a href="" target="_blank">Layanan Pendidikan</a></li> 

                      <li><a href="" target="_blank">Dinas Kesehatan Kabupaten Nganjuk</a></li>

                      <li><a href="" target="_blank">Layanan RSUD Kertosono</a></li>

                      <li><a href="" target="_blank">Layanan RSUD Nganjuk</a></li>

                      <li><a href="" target="_blank">Jampersal</a></li>

                      <li><a href="" target="_blank">Jamkesmas</a></li>                     
                      
                    </ul>
                  </div>                    
                </div>
              </div>
              '>              
              <img src="{{ asset('landingpage/images/13.png') }}" width="150" height="150" class="lazy img-responsive img-border"/>
              <div class="caption"><p style="font-size: 9pt !important; text-align: center;">Informasi Layanan Masyarakat</p></div>   
            </a>       
          </li>
          
          
          <li>
            <a href="#" data-title="Pelayanan Perizinan" data-description='
            <div class="center-block">
              <div class="row">
                <div class="span3">
                  <ul>                     
                    <li><a href="" target="_blank">Pelayanan Perizinan Berusaha Terintegrasi Secara Elektronik</a></li>
                  </ul>
                  <ul>
                    <li><a href="" target="_blank">Sistem Pelayanan Perizinan Terpadu Online (DPMPTSP)</a></li>
                  </ul>
                </div>                    
              </div>
            </div>
            '>   
            <img src="{{ asset('landingpage/images/14.png') }}" width="150" height="150" class="lazy img-responsive img-border"/>
            <div class="caption"><p style="font-size: 9pt !important; text-align: center;">Pelayanan Perizinan</p></div>              
          </a>       
        </li>

        <li>
          <a href="#" data-title="Pariwisata" data-description='
          <div class="center-block">
            <div class="row">
              <div class="span3">
                <ul>
                  
                  <li><a href="#" target="_blank">Daftar Hotel </a></li>
                  
                  <li><a href="#" target="_blank">Calendar Event 2019</a></li>
                  
                  <li><a href="#" target="_blank">Peta Wilayah</a></li>
                  
                  <li><a href="#" target="_blank">Potensi Wisata</a></li>
                  
                  <li><a href="#" target="_blank">Wisata Kuliner</a></li>
                  
                  <li><a href="#" target="_blank">Olahraga</a></li>
                  
                  <li><a href="#" target="_blank">Daftar Hotel / Penginapan </a></li>
                  
                  <li><a href="#" target="_blank">Transportasi</a></li>
                  
                  <li><a href="#" target="_blank">Money Changer</a></li>
                </ul>
              </div>                    
            </div>
          </div>
          '>              
          <img src="{{ asset('landingpage/images/15.png') }}" width="150" height="150" class="lazy img-responsive img-border"/>
          <div class="caption"><p style="font-size: 9pt !important; text-align: center;">Pariwisata</p></div>   
        </a>  
      </li>
      <li>
        
        <a onClick="window.open('/lapor');" data-title="LAPOR" data-description=''>
          <img src="{{ asset('landingpage/images/16.png') }}" width="150" height="150" class="lazy img-responsive img-border"/>
          <div class="caption"><p style="font-size: 9pt !important; text-align: center;">LAPOR</p></div>               
        </a>  
      </li>
    </ul>
  </div>
</div><!--container-->
</div>
</div>


</header>
<div class="container text-center">
  <p>Copyright &copy; Dinas Komunikasi dan Informatika Kab. Nganjuk 2020</p>
</div>


<!-- Bootstrap core JavaScript -->
<script src="{{ asset('landingpage/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('landingpage/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Plugin JavaScript -->
<script src="{{ asset('landingpage/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

<!-- Custom scripts for this template -->
<script src="{{ asset('landingpage/js/grayscale.min.js') }}"></script>

<!-- lazy load -->
<script src="{{ asset('landingpage/js/lazyload.js') }}"></script>
<script src="{{ asset('landingpage/js/grid.js') }}"></script>
    <script>
      $(function() {
        Grid.init();
      });
    </script>