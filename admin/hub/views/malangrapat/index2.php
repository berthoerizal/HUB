          <?php
              include "model/header/header_gunung_kijang.php";
              include "model/kecamatan/null/index2.php";
              include "model/kecamatan/gunungkijang/index2.php";
          ?>

    <label class="section-title">Desa Malang Rapat</label>
      <p class="mg-b-20 mg-sm-b-40">Wilayah Administratif Desa</p>
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
$kodeHTML = bacaHTML('http://malangrapat.simdes-bintan.id/index.php/first/wilayah');

$pecah = explode('<div class="box-body">', $kodeHTML);



$pecahLagi = explode('</table>', $pecah[1]);
 
echo $pecahLagi[0];
?>
  </body>
</html>