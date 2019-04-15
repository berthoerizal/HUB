<?php
          
          // pengujan start
           if(@$_GET['page'] == 'pengujan-profil-desa')          
          {
            include "views/pengujan/index1.php";
          }
          else if(@$_GET['page'] == 'pengujan-wilayah-administratif')          
          {
            include "views/pengujan/index2.php";
          }
           else if(@$_GET['page'] == 'pengujan-data-pendidikan-dalam-kk')          
          {
            include "views/pengujan/index3.php";
          }
          else if(@$_GET['page'] == 'pengujan-data-pendidikan-ditempuh')          
          {
            include "views/pengujan/index4.php";
          }
          else if(@$_GET['page'] == 'pengujan-data-pekerjaan')          
          {
            include "views/pengujan/index5.php";
          }
          else if(@$_GET['page'] == 'pengujan-data-agama')          
          {
            include "views/pengujan/index6.php";
          }
          else if(@$_GET['page'] == 'pengujan-data-jenis-kelamin')          
          {
            include "views/pengujan/index7.php";
          }
          else if(@$_GET['page'] == 'pengujan-data-warga-negara')          
          {
            include "views/pengujan/index8.php";
          }
          else if(@$_GET['page'] == 'pengujan-penerima-raskin')          
          {
            include "views/pengujan/index9.php";
          }
          else if(@$_GET['page'] == 'pengujan-blsm')          
          {
            include "views/pengujan/index10.php";
          }
          else if(@$_GET['page'] == 'pengujan-pkh')          
          {
            include "views/pengujan/index11.php";
          }
          else if(@$_GET['page'] == 'pengujan-bedahrumah')          
          {
            include "views/pengujan/index12.php";
          }
          else if(@$_GET['page'] == 'pengujan-jamkesmas')          
          {
            include "views/pengujan/index13.php";
           // pengujan end
          }

        ?>