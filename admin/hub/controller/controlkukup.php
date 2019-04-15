<?php
          
          // kukup start
           if(@$_GET['page'] == 'kukup-profil-desa')          
          {
            include "views/kukup/index1.php";
          }
          else if(@$_GET['page'] == 'kukup-wilayah-administratif')          
          {
            include "views/kukup/index2.php";
          }
           else if(@$_GET['page'] == 'kukup-data-pendidikan-dalam-kk')          
          {
            include "views/kukup/index3.php";
          }
          else if(@$_GET['page'] == 'kukup-data-pendidikan-ditempuh')          
          {
            include "views/kukup/index4.php";
          }
          else if(@$_GET['page'] == 'kukup-data-pekerjaan')          
          {
            include "views/kukup/index5.php";
          }
          else if(@$_GET['page'] == 'kukup-data-agama')          
          {
            include "views/kukup/index6.php";
          }
          else if(@$_GET['page'] == 'kukup-data-jenis-kelamin')          
          {
            include "views/kukup/index7.php";
          }
          else if(@$_GET['page'] == 'kukup-data-warga-negara')          
          {
            include "views/kukup/index8.php";
          }
          else if(@$_GET['page'] == 'kukup-penerima-raskin')          
          {
            include "views/kukup/index9.php";
          }
          else if(@$_GET['page'] == 'kukup-blsm')          
          {
            include "views/kukup/index10.php";
          }
          else if(@$_GET['page'] == 'kukup-pkh')          
          {
            include "views/kukup/index11.php";
          }
          else if(@$_GET['page'] == 'kukup-bedahrumah')          
          {
            include "views/kukup/index12.php";
          }
          else if(@$_GET['page'] == 'kukup-jamkesmas')          
          {
            include "views/kukup/index13.php";
           // kukup end
          }

        ?>