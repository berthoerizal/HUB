<?php
          
          // dendun start
           if(@$_GET['page'] == 'dendun-profil-desa')          
          {
            include "views/dendun/index1.php";
          }
          else if(@$_GET['page'] == 'dendun-wilayah-administratif')          
          {
            include "views/dendun/index2.php";
          }
           else if(@$_GET['page'] == 'dendun-data-pendidikan-dalam-kk')          
          {
            include "views/dendun/index3.php";
          }
          else if(@$_GET['page'] == 'dendun-data-pendidikan-ditempuh')          
          {
            include "views/dendun/index4.php";
          }
          else if(@$_GET['page'] == 'dendun-data-pekerjaan')          
          {
            include "views/dendun/index5.php";
          }
          else if(@$_GET['page'] == 'dendun-data-agama')          
          {
            include "views/dendun/index6.php";
          }
          else if(@$_GET['page'] == 'dendun-data-jenis-kelamin')          
          {
            include "views/dendun/index7.php";
          }
          else if(@$_GET['page'] == 'dendun-data-warga-negara')          
          {
            include "views/dendun/index8.php";
          }
          else if(@$_GET['page'] == 'dendun-penerima-raskin')          
          {
            include "views/dendun/index9.php";
          }
          else if(@$_GET['page'] == 'dendun-blsm')          
          {
            include "views/dendun/index10.php";
          }
          else if(@$_GET['page'] == 'dendun-pkh')          
          {
            include "views/dendun/index11.php";
          }
          else if(@$_GET['page'] == 'dendun-bedahrumah')          
          {
            include "views/dendun/index12.php";
          }
          else if(@$_GET['page'] == 'dendun-jamkesmas')          
          {
            include "views/dendun/index13.php";
           // dendun end
          }

        ?>