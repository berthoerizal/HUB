<?php
          
          // toapaya start
           if(@$_GET['page'] == 'toapaya-profil-desa')          
          {
            include "views/toapaya/index1.php";
          }
          else if(@$_GET['page'] == 'toapaya-wilayah-administratif')          
          {
            include "views/toapaya/index2.php";
          }
           else if(@$_GET['page'] == 'toapaya-data-pendidikan-dalam-kk')          
          {
            include "views/toapaya/index3.php";
          }
          else if(@$_GET['page'] == 'toapaya-data-pendidikan-ditempuh')          
          {
            include "views/toapaya/index4.php";
          }
          else if(@$_GET['page'] == 'toapaya-data-pekerjaan')          
          {
            include "views/toapaya/index5.php";
          }
          else if(@$_GET['page'] == 'toapaya-data-agama')          
          {
            include "views/toapaya/index6.php";
          }
          else if(@$_GET['page'] == 'toapaya-data-jenis-kelamin')          
          {
            include "views/toapaya/index7.php";
          }
          else if(@$_GET['page'] == 'toapaya-data-warga-negara')          
          {
            include "views/toapaya/index8.php";
          }
          else if(@$_GET['page'] == 'toapaya-penerima-raskin')          
          {
            include "views/toapaya/index9.php";
          }
          else if(@$_GET['page'] == 'toapaya-blsm')          
          {
            include "views/toapaya/index10.php";
          }
          else if(@$_GET['page'] == 'toapaya-pkh')          
          {
            include "views/toapaya/index11.php";
          }
          else if(@$_GET['page'] == 'toapaya-bedahrumah')          
          {
            include "views/toapaya/index12.php";
          }
          else if(@$_GET['page'] == 'toapaya-jamkesmas')          
          {
            include "views/toapaya/index13.php";
           // toapaya end
          }

        ?>