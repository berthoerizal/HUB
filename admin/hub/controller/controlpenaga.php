<?php
          
          // penaga start
           if(@$_GET['page'] == 'penaga-profil-desa')          
          {
            include "views/penaga/index1.php";
          }
          else if(@$_GET['page'] == 'penaga-wilayah-administratif')          
          {
            include "views/penaga/index2.php";
          }
           else if(@$_GET['page'] == 'penaga-data-pendidikan-dalam-kk')          
          {
            include "views/penaga/index3.php";
          }
          else if(@$_GET['page'] == 'penaga-data-pendidikan-ditempuh')          
          {
            include "views/penaga/index4.php";
          }
          else if(@$_GET['page'] == 'penaga-data-pekerjaan')          
          {
            include "views/penaga/index5.php";
          }
          else if(@$_GET['page'] == 'penaga-data-agama')          
          {
            include "views/penaga/index6.php";
          }
          else if(@$_GET['page'] == 'penaga-data-jenis-kelamin')          
          {
            include "views/penaga/index7.php";
          }
          else if(@$_GET['page'] == 'penaga-data-warga-negara')          
          {
            include "views/penaga/index8.php";
          }
          else if(@$_GET['page'] == 'penaga-penerima-raskin')          
          {
            include "views/penaga/index9.php";
          }
          else if(@$_GET['page'] == 'penaga-blsm')          
          {
            include "views/penaga/index10.php";
          }
          else if(@$_GET['page'] == 'penaga-pkh')          
          {
            include "views/penaga/index11.php";
          }
          else if(@$_GET['page'] == 'penaga-bedahrumah')          
          {
            include "views/penaga/index12.php";
          }
          else if(@$_GET['page'] == 'penaga-jamkesmas')          
          {
            include "views/penaga/index13.php";
           // penaga end
          }

        ?>