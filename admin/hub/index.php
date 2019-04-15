<!DOCTYPE html>
<html lang="en">
  <head>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Twitter -->
    <meta name="twitter:site" content="@sm.performa">
    <meta name="twitter:creator" content="@themepixels">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    <!-- Meta -->
    <meta name="description" content="Monitoring simdes prima kabupaten bintan">
    <meta name="author" content="edo lorenza">
    <title>Monitoring | Kecamatan</title>
    <!-- vendor css -->
    <link href="assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <!-- Slim CSS -->
    <link rel="stylesheet" href="assets/css/slim.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <link href="assets/img/logodes.png" rel="shortcut icon">
  </head>
  <body>
<section>
    <div class="slim-header with-sidebar">
      <div class="container-fluid">
        <div class="slim-header-left">
           <h2 class="slim-logo"><a href="http://simdes-bintan.id">SimdesPrima<span></span></a></h2>
          <a href="" id="slimSidebarMenu" class="slim-sidebar-menu"><span></span></a>
        </div><!-- slim-header-left -->
        </div><!-- header-right -->
      </div><!-- container-fluid -->
    </div><!-- slim-header -->
</section>
      <div class="slim-body">
      <div class="slim-sidebar">
        <label class="sidebar-label">Navigation</label>
        <ul class="nav nav-sidebar">
          <li class="sidebar-nav-item with-sub">
            <a href="" class="sidebar-nav-link"><i class="icon ion-ios-home-outline"></i>Info Desa</a>
            <ul class="nav sidebar-nav-sub">
              <li class="nav-sub-item">
                <a href="?page=Profil-Desa" class="nav-sub-link">Profil Desa</a>
              </li>
              <li class="nav-sub-item">
                <a href="?page=Wilayah-Administratif" class="nav-sub-link">Wilayah Administratif</a>
              </li>
              </li>
            </ul>
          </li>
        </ul>
        <!-- batas akhir menu satu -->
        <ul class="nav nav-sidebar">
          <li class="sidebar-nav-item with-sub">
            <a href="" class="sidebar-nav-link"><i class="icon ion-stats-bars"></i>Data Kependudukan</a>
            <ul class="nav sidebar-nav-sub">
              <li class="nav-sub-item">
                <a href="?page=Data-pendidikan-dalam-kk" class="nav-sub-link">Data Pendidikan Dalam KK</a>
              </li>
              <li class="nav-sub-item">
                <a href="?page=Data-pendidikan-ditempuh" class="nav-sub-link">Data Pendidikan Ditempuh</a>
              </li>
              <li class="nav-sub-item">
                <a href="?page=Data-pekerjaan" class="nav-sub-link">Data Pekerjaan</a>
              </li>
              <li class="nav-sub-item">
                <a href="?page=Data-Agama" class="nav-sub-link">Data Agama</a>
              </li>
              <li class="nav-sub-item">
                <a href="?page=Data-jenis-kelamin" class="nav-sub-link">Data Jenis Kelamin</a>
              </li>
              <li class="nav-sub-item">
                <a href="?page=Data-Warga-Negara" class="nav-sub-link">Data Warga Negara</a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- batas akhir menu dua -->

        <ul class="nav nav-sidebar">
          <li class="sidebar-nav-item with-sub">
            <a href="" class="sidebar-nav-link"><i class="icon ion-pie-graph"></i>Data Program Bantuan</a>
            <ul class="nav sidebar-nav-sub">
              <li class="nav-sub-item">
                <a href="?page=Penerima-raskin" class="nav-sub-link">Penerima Raskin</a>
              </li>
              <li class="nav-sub-item">
                <a href="?page=Penerima-blsm" class="nav-sub-link">Penerima BLSM</a>
              </li>
              <li class="nav-sub-item">
                <a href="?page=Penerima-pkh" class="nav-sub-link">Penerima PKH</a>
              </li>
              <li class="nav-sub-item">
                <a href="?page=Penerima-bedah-rumah" class="nav-sub-link">Penerima Bedah Rumah</a>
              </li>
              <li class="nav-sub-item">
                <a href="?page=Penerima-jamkesmas" class="nav-sub-link">Penerima Jamkesmas</a>
              </li>
            </ul>
          </li>
        </ul>

        <ul class="nav nav-sidebar">
          <li class="sidebar-nav-item">
            <a href="http://simdes-bintan.id/desa" class="sidebar-nav-link"><i class="icon ion-person-stalker"></i>Total Penduduk</a>
          </li>
        </ul>
            
              <ul class="nav nav-sidebar">
          <li class="sidebar-nav-item">
            <a href="http://simdes-bintan.id/kecamatan" class="sidebar-nav-link"><i style="font-size: 20px;" class="fa fa-users"></i>Total Penduduk Kec.</a>
          </li>
        </ul>
        
        
      </div><!-- slim-sidebar -->
      <div class="slim-mainpanel">
      <div class="container">
       
              <?php
              include "controller/controlairgelubi.php";
                include "controller/controlbatulepuk.php";
                  include "controller/controlberakit.php";
                    include "controller/controlbintanbuyu.php";
                      include "controller/controlbusung.php";
                        include "controller/controldendun.php";
                          include "controller/controlekanganculai.php";
                            include "controller/controlgunungkijang.php";
                              include "controller/controlkampunghilir.php";
                                include "controller/controlkampungmelayu.php";
                                  include "controller/controlkelong.php";
                                      include "controller/controlkualasempang.php";
                                         include "controller/controlkukup.php";
                                            include "controller/controllall.php";
                                                include "controller/controllancangkuning.php";
                                                  include "controller/controlmalangrapat.php";
                                                    include "controller/controlmantangbaru.php";
                                                      include "controller/controlmantangbesar.php";
                                                    include "controller/controlmantanglama.php";
                                                  include "controller/controlmapur.php";
                                                include "controller/controlnumbing.php";
                                              include "controller/controlpangkil.php";
                                            include "controller/controlpenaga.php";
                                          include "controller/controlpengikik.php";
                                        include "controller/controlpengudang.php";
                                      include "controller/controlpengujan.php";
                                    include "controller/controlpulaumentebung.php";
                                  include "controller/controlpulaupinang.php";
                                include "controller/controlsebonglagoi.php";
                              include "controller/controlsebongpereh.php";
                            include "controller/controlsribintan.php";
                          include "controller/controltelukbakau.php";
                        include "controller/controlteluksasah.php";
                      include "controller/controltembeling.php";
                    include "controller/controltoapaya.php";
                include "controller/controltoapayaselatan.php";
              include "controller/controltoapayautara.php";
              ?>
        </div><!-- container -->
    </div>
    <script src="assets/lib/jquery/js/jquery.js"></script>
    <script src="assets/lib/popper.js/js/popper.js"></script>
    <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
    <script src="assets/lib/jquery.cookie/js/jquery.cookie.js"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/js/slim.js"></script>
  </body>
</html>
