<?php
              include "model/header/header_tambelan.php";
              include "model/kecamatan/null/index5.php";
              include "model/kecamatan/tambelan/index5.php";
          ?>
<!-- <div class="section-wrapper"> -->
    <label class="section-title">Desa Kukup</label>
      <p class="mg-b-20 mg-sm-b-40">Data Pekerjaan</p>
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
  
  
 $kodeHTML = bacaHTML('http://kukup.simdes-bintan.id/index.php/first/statistik/1');
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
  
  
 $kodeHTML = empat('http://kukup.simdes-bintan.id/index.php/first/statistik/1');
 $pecah = explode('<section class="blog-section section-padding">', $kodeHTML);
 $pecahLagi = explode('<div class="box-tools pull-right">', $pecah[1]);
  
 
 echo $pecahLagi[0];
  
 ?>
</div>
</div>
</div>