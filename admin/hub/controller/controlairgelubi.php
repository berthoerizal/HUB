<?php
          
          // airgelubi start
           if(@$_GET['page'] == 'airgelubi-profil-desa')          
          {
            include "views/airgelubi/index1.php";
          }
          else if(@$_GET['page'] == 'airgelubi-wilayah-administratif')          
          {
            include "views/airgelubi/index2.php";
          }
           else if(@$_GET['page'] == 'airgelubi-data-pendidikan-dalam-kk')          
          {
            include "views/airgelubi/index3.php";
          }
          else if(@$_GET['page'] == 'airgelubi-data-pendidikan-ditempuh')          
          {
            include "views/airgelubi/index4.php";
          }
          else if(@$_GET['page'] == 'airgelubi-data-pekerjaan')          
          {
            include "views/airgelubi/index5.php";
          }
          else if(@$_GET['page'] == 'airgelubi-data-agama')          
          {
            include "views/airgelubi/index6.php";
          }
          else if(@$_GET['page'] == 'airgelubi-data-jenis-kelamin')          
          {
            include "views/airgelubi/index7.php";
          }
          else if(@$_GET['page'] == 'airgelubi-data-warga-negara')          
          {
            include "views/airgelubi/index8.php";
          }
          else if(@$_GET['page'] == 'airgelubi-penerima-raskin')          
          {
            include "views/airgelubi/index9.php";
          }
          else if(@$_GET['page'] == 'airgelubi-blsm')          
          {
            include "views/airgelubi/index10.php";
          }
          else if(@$_GET['page'] == 'airgelubi-pkh')          
          {
            include "views/airgelubi/index11.php";
          }
          else if(@$_GET['page'] == 'airgelubi-bedahrumah')          
          {
            include "views/airgelubi/index12.php";
          }
          else if(@$_GET['page'] == 'airgelubi-jamkesmas')          
          {
            include "views/airgelubi/index13.php";
           // airgelubi end
          }

        ?>