<?php
          
          // kelong start
           if(@$_GET['page'] == 'kelong-profil-desa')          
          {
            include "views/kelong/index1.php";
          }
          else if(@$_GET['page'] == 'kelong-wilayah-administratif')          
          {
            include "views/kelong/index2.php";
          }
           else if(@$_GET['page'] == 'kelong-data-pendidikan-dalam-kk')          
          {
            include "views/kelong/index3.php";
          }
          else if(@$_GET['page'] == 'kelong-data-pendidikan-ditempuh')          
          {
            include "views/kelong/index4.php";
          }
          else if(@$_GET['page'] == 'kelong-data-pekerjaan')          
          {
            include "views/kelong/index5.php";
          }
          else if(@$_GET['page'] == 'kelong-data-agama')          
          {
            include "views/kelong/index6.php";
          }
          else if(@$_GET['page'] == 'kelong-data-jenis-kelamin')          
          {
            include "views/kelong/index7.php";
          }
          else if(@$_GET['page'] == 'kelong-data-warga-negara')          
          {
            include "views/kelong/index8.php";
          }
          else if(@$_GET['page'] == 'kelong-penerima-raskin')          
          {
            include "views/kelong/index9.php";
          }
          else if(@$_GET['page'] == 'kelong-blsm')          
          {
            include "views/kelong/index10.php";
          }
          else if(@$_GET['page'] == 'kelong-pkh')          
          {
            include "views/kelong/index11.php";
          }
          else if(@$_GET['page'] == 'kelong-bedahrumah')          
          {
            include "views/kelong/index12.php";
          }
          else if(@$_GET['page'] == 'kelong-jamkesmas')          
          {
            include "views/kelong/index13.php";
           // kelong end
          }

        ?>