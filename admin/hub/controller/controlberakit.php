<?php
          
          // berakit start
           if(@$_GET['page'] == 'berakit-profil-desa')          
          {
            include "views/berakit/index1.php";
          }
          else if(@$_GET['page'] == 'berakit-wilayah-administratif')          
          {
            include "views/berakit/index2.php";
          }
           else if(@$_GET['page'] == 'berakit-data-pendidikan-dalam-kk')          
          {
            include "views/berakit/index3.php";
          }
          else if(@$_GET['page'] == 'berakit-data-pendidikan-ditempuh')          
          {
            include "views/berakit/index4.php";
          }
          else if(@$_GET['page'] == 'berakit-data-pekerjaan')          
          {
            include "views/berakit/index5.php";
          }
          else if(@$_GET['page'] == 'berakit-data-agama')          
          {
            include "views/berakit/index6.php";
          }
          else if(@$_GET['page'] == 'berakit-data-jenis-kelamin')          
          {
            include "views/berakit/index7.php";
          }
          else if(@$_GET['page'] == 'berakit-data-warga-negara')          
          {
            include "views/berakit/index8.php";
          }
          else if(@$_GET['page'] == 'berakit-penerima-raskin')          
          {
            include "views/berakit/index9.php";
          }
          else if(@$_GET['page'] == 'berakit-blsm')          
          {
            include "views/berakit/index10.php";
          }
          else if(@$_GET['page'] == 'berakit-pkh')          
          {
            include "views/berakit/index11.php";
          }
          else if(@$_GET['page'] == 'berakit-bedahrumah')          
          {
            include "views/berakit/index12.php";
          }
          else if(@$_GET['page'] == 'berakit-jamkesmas')          
          {
            include "views/berakit/index13.php";
           // berakit end
          }

        ?>