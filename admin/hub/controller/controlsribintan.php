<?php
          
          // sribintan start
           if(@$_GET['page'] == 'sribintan-profil-desa')          
          {
            include "views/sribintan/index1.php";
          }
          else if(@$_GET['page'] == 'sribintan-wilayah-administratif')          
          {
            include "views/sribintan/index2.php";
          }
           else if(@$_GET['page'] == 'sribintan-data-pendidikan-dalam-kk')          
          {
            include "views/sribintan/index3.php";
          }
          else if(@$_GET['page'] == 'sribintan-data-pendidikan-ditempuh')          
          {
            include "views/sribintan/index4.php";
          }
          else if(@$_GET['page'] == 'sribintan-data-pekerjaan')          
          {
            include "views/sribintan/index5.php";
          }
          else if(@$_GET['page'] == 'sribintan-data-agama')          
          {
            include "views/sribintan/index6.php";
          }
          else if(@$_GET['page'] == 'sribintan-data-jenis-kelamin')          
          {
            include "views/sribintan/index7.php";
          }
          else if(@$_GET['page'] == 'sribintan-data-warga-negara')          
          {
            include "views/sribintan/index8.php";
          }
          else if(@$_GET['page'] == 'sribintan-penerima-raskin')          
          {
            include "views/sribintan/index9.php";
          }
          else if(@$_GET['page'] == 'sribintan-blsm')          
          {
            include "views/sribintan/index10.php";
          }
          else if(@$_GET['page'] == 'sribintan-pkh')          
          {
            include "views/sribintan/index11.php";
          }
          else if(@$_GET['page'] == 'sribintan-bedahrumah')          
          {
            include "views/sribintan/index12.php";
          }
          else if(@$_GET['page'] == 'sribintan-jamkesmas')          
          {
            include "views/sribintan/index13.php";
           // sribintan end
          }

        ?>