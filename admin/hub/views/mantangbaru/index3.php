<?php
              include "model/header/header_mantang.php"; //nama header_ (ikutin nama kecamatan, jadi setiap desa tidak perlu di ganti kecuali beda kecamatan)
              include "model/kecamatan/null/index3.php"; //yang ini tidak perlu di ganti
              include "model/kecamatan/mantang/index3.php"; //yang ini di ganti jika pindah kecamatan
          ?>
<label class="section-title">Desa Mantang Baru</label> 
      <p class="mg-b-20 mg-sm-b-40">Data Berdasarkan Pendidikan Dalam KK</p>
            <div class="row">
              <div class="col-md-12">
              <?php
 
 function bacaHTML($url){
 // inisialisasi CURL
 $data = curl_init();
 // setting CURL
 curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($data, CURLOPT_URL, $url);
 // menjalankan CURL untuk membaca isi file
 $hasil = curl_exec($data);
 curl_close($data);
 return $hasil;
 }
  
  
 $kodeHTML = bacaHTML('http://mantangbaru.simdes-bintan.id/index.php/first/statistik/0'); //statisik di ganti dengan nama desa
 $pecah = explode('<div class="box-body">', $kodeHTML);
 $pecahLagi = explode('</div', $pecah[1]);
  
 
 echo $pecahLagi[0];
 
 ?>
 <?php
 
 
 function empat($url){
 // inisialisasi CURL
 $data = curl_init();
 // setting CURL
 curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($data, CURLOPT_URL, $url);
 // menjalankan CURL untuk membaca isi file
 $hasil = curl_exec($data);
 curl_close($data);
 return $hasil;
 }
  
  
 $kodeHTML = empat('http://mantangbaru.simdes-bintan.id/index.php/first/statistik/0'); //statistik di ganti dengan nama desa
 $pecah = explode('<section class="blog-section section-padding">', $kodeHTML);
 $pecahLagi = explode('<div class="box-tools pull-right">', $pecah[1]);
  
 
 echo $pecahLagi[0];
  
 ?>
 </div>
</div>
</div>