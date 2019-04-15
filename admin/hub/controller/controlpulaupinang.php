<?php
          
          // pulaupinang start
           if(@$_GET['page'] == 'pulaupinang-profil-desa')          
          {
            include "views/pulaupinang/index1.php";
          }
          else if(@$_GET['page'] == 'pulaupinang-wilayah-administratif')          
          {
            include "views/pulaupinang/index2.php";
          }
           else if(@$_GET['page'] == 'pulaupinang-data-pendidikan-dalam-kk')          
          {
            include "views/pulaupinang/index3.php";
          }
          else if(@$_GET['page'] == 'pulaupinang-data-pendidikan-ditempuh')          
          {
            include "views/pulaupinang/index4.php";
          }
          else if(@$_GET['page'] == 'pulaupinang-data-pekerjaan')          
          {
            include "views/pulaupinang/index5.php";
          }
          else if(@$_GET['page'] == 'pulaupinang-data-agama')          
          {
            include "views/pulaupinang/index6.php";
          }
          else if(@$_GET['page'] == 'pulaupinang-data-jenis-kelamin')          
          {
            include "views/pulaupinang/index7.php";
          }
          else if(@$_GET['page'] == 'pulaupinang-data-warga-negara')          
          {
            include "views/pulaupinang/index8.php";
          }
          else if(@$_GET['page'] == 'pulaupinang-penerima-raskin')          
          {
            include "views/pulaupinang/index9.php";
          }
          else if(@$_GET['page'] == 'pulaupinang-blsm')          
          {
            include "views/pulaupinang/index10.php";
          }
          else if(@$_GET['page'] == 'pulaupinang-pkh')          
          {
            include "views/pulaupinang/index11.php";
          }
          else if(@$_GET['page'] == 'pulaupinang-bedahrumah')          
          {
            include "views/pulaupinang/index12.php";
          }
          else if(@$_GET['page'] == 'pulaupinang-jamkesmas')          
          {
            include "views/pulaupinang/index13.php";
           // pulaupinang end
          }

        ?>