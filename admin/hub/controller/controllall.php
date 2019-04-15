<?php
            if(@$_GET['page'] == 'home' || @$_GET['page'] == '')          
            {
              include "views/home.php";
            }
            else if(@$_GET['page'] == 'Profil-Desa')          
            {
              include "model/kecamatan/null/index1.php";
            }
            else if(@$_GET['page'] == 'Wilayah-Administratif')          
            {
              include "model/kecamatan/null/index2.php";
            }
            else if(@$_GET['page'] == 'Data-pendidikan-dalam-kk')          
            {
              include "model/kecamatan/null/index3.php";
            }
            else if(@$_GET['page'] == 'Data-pendidikan-ditempuh')          
            {
              include "model/kecamatan/null/index4.php";
            }
            else if(@$_GET['page'] == 'Data-pekerjaan')          
            {
              include "model/kecamatan/null/index5.php";
            }
            else if(@$_GET['page'] == 'Data-Agama')          
            {
              include "model/kecamatan/null/index6.php";
            }
            else if(@$_GET['page'] == 'Data-jenis-kelamin')          
            {
              include "model/kecamatan/null/index7.php";
            }
            else if(@$_GET['page'] == 'Data-Warga-Negara')          
            {
              include "model/kecamatan/null/index8.php";
            }
            else if(@$_GET['page'] == 'Penerima-raskin')          
            {
              include "model/kecamatan/null/index9.php";
            }
            else if(@$_GET['page'] == 'Penerima-blsm')          
            {
              include "model/kecamatan/null/index10.php";
            }
            else if(@$_GET['page'] == 'Penerima-pkh')          
            {
              include "model/kecamatan/null/index11.php";
            }
            else if(@$_GET['page'] == 'Penerima-bedah-rumah')          
            {
              include "model/kecamatan/null/index11.php";
            }
            else if(@$_GET['page'] == 'Penerima-jamkesmas')          
            {
              include "model/kecamatan/null/index13.php";
              //kecamatan end
            }
            // total penduduk
            else if(@$_GET['page'] == 'total-penduduk')          
            {
              include "views/penduduk/total/index1.php";
              
            }
          ?>



