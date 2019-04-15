<?php
          
          // pengikik start
           if(@$_GET['page'] == 'pengikik-profil-desa')          
          {
            include "views/pengikik/index1.php";
          }
          else if(@$_GET['page'] == 'pengikik-wilayah-administratif')          
          {
            include "views/pengikik/index2.php";
          }
           else if(@$_GET['page'] == 'pengikik-data-pendidikan-dalam-kk')          
          {
            include "views/pengikik/index3.php";
          }
          else if(@$_GET['page'] == 'pengikik-data-pendidikan-ditempuh')          
          {
            include "views/pengikik/index4.php";
          }
          else if(@$_GET['page'] == 'pengikik-data-pekerjaan')          
          {
            include "views/pengikik/index5.php";
          }
          else if(@$_GET['page'] == 'pengikik-data-agama')          
          {
            include "views/pengikik/index6.php";
          }
          else if(@$_GET['page'] == 'pengikik-data-jenis-kelamin')          
          {
            include "views/pengikik/index7.php";
          }
          else if(@$_GET['page'] == 'pengikik-data-warga-negara')          
          {
            include "views/pengikik/index8.php";
          }
          else if(@$_GET['page'] == 'pengikik-penerima-raskin')          
          {
            include "views/pengikik/index9.php";
          }
          else if(@$_GET['page'] == 'pengikik-blsm')          
          {
            include "views/pengikik/index10.php";
          }
          else if(@$_GET['page'] == 'pengikik-pkh')          
          {
            include "views/pengikik/index11.php";
          }
          else if(@$_GET['page'] == 'pengikik-bedahrumah')          
          {
            include "views/pengikik/index12.php";
          }
          else if(@$_GET['page'] == 'pengikik-jamkesmas')          
          {
            include "views/pengikik/index13.php";
           // pengikik end
          }

        ?>