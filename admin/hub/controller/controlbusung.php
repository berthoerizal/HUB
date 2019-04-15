<?php
          
          // telukbakau start
           if(@$_GET['page'] == 'busung-profil-desa')          
          {
            include "views/busung/index1.php";
          }
          else if(@$_GET['page'] == 'busung-wilayah-administratif')          
          {
            include "views/busung/index2.php";
          }
           else if(@$_GET['page'] == 'busung-data-pendidikan-dalam-kk')          
          {
            include "views/busung/index3.php";
          }
          else if(@$_GET['page'] == 'busung-data-pendidikan-ditempuh')          
          {
            include "views/busung/index4.php";
          }
          else if(@$_GET['page'] == 'busung-data-pekerjaan')          
          {
            include "views/busung/index5.php";
          }
          else if(@$_GET['page'] == 'busung-data-agama')          
          {
            include "views/busung/index6.php";
          }
          else if(@$_GET['page'] == 'busung-data-jenis-kelamin')          
          {
            include "views/busung/index7.php";
          }
          else if(@$_GET['page'] == 'busung-data-warga-negara')          
          {
            include "views/busung/index8.php";
          }
          else if(@$_GET['page'] == 'busung-penerima-raskin')          
          {
            include "views/busung/index9.php";
          }
          else if(@$_GET['page'] == 'busung-blsm')          
          {
            include "views/busung/index10.php";
          }
          else if(@$_GET['page'] == 'busung-pkh')          
          {
            include "views/busung/index11.php";
          }
          else if(@$_GET['page'] == 'busung-bedahrumah')          
          {
            include "views/busung/index12.php";
          }
          else if(@$_GET['page'] == 'busung-jamkesmas')          
          {
            include "views/busung/index13.php";
           // telukbakau end
          }

        ?>