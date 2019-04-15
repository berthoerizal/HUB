<?php
          
          // pengudang start
           if(@$_GET['page'] == 'pengudang-profil-desa')          
          {
            include "views/pengudang/index1.php";
          }
          else if(@$_GET['page'] == 'pengudang-wilayah-administratif')          
          {
            include "views/pengudang/index2.php";
          }
           else if(@$_GET['page'] == 'pengudang-data-pendidikan-dalam-kk')          
          {
            include "views/pengudang/index3.php";
          }
          else if(@$_GET['page'] == 'pengudang-data-pendidikan-ditempuh')          
          {
            include "views/pengudang/index4.php";
          }
          else if(@$_GET['page'] == 'pengudang-data-pekerjaan')          
          {
            include "views/pengudang/index5.php";
          }
          else if(@$_GET['page'] == 'pengudang-data-agama')          
          {
            include "views/pengudang/index6.php";
          }
          else if(@$_GET['page'] == 'pengudang-data-jenis-kelamin')          
          {
            include "views/pengudang/index7.php";
          }
          else if(@$_GET['page'] == 'pengudang-data-warga-negara')          
          {
            include "views/pengudang/index8.php";
          }
          else if(@$_GET['page'] == 'pengudang-penerima-raskin')          
          {
            include "views/pengudang/index9.php";
          }
          else if(@$_GET['page'] == 'pengudang-blsm')          
          {
            include "views/pengudang/index10.php";
          }
          else if(@$_GET['page'] == 'pengudang-pkh')          
          {
            include "views/pengudang/index11.php";
          }
          else if(@$_GET['page'] == 'pengudang-bedahrumah')          
          {
            include "views/pengudang/index12.php";
          }
          else if(@$_GET['page'] == 'pengudang-jamkesmas')          
          {
            include "views/pengudang/index13.php";
           // pengudang end
          }

        ?>