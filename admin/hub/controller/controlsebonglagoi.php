<?php
          
          // sebonglagoi start
           if(@$_GET['page'] == 'sebonglagoi-profil-desa')          
          {
            include "views/sebonglagoi/index1.php";
          }
          else if(@$_GET['page'] == 'sebonglagoi-wilayah-administratif')          
          {
            include "views/sebonglagoi/index2.php";
          }
           else if(@$_GET['page'] == 'sebonglagoi-data-pendidikan-dalam-kk')          
          {
            include "views/sebonglagoi/index3.php";
          }
          else if(@$_GET['page'] == 'sebonglagoi-data-pendidikan-ditempuh')          
          {
            include "views/sebonglagoi/index4.php";
          }
          else if(@$_GET['page'] == 'sebonglagoi-data-pekerjaan')          
          {
            include "views/sebonglagoi/index5.php";
          }
          else if(@$_GET['page'] == 'sebonglagoi-data-agama')          
          {
            include "views/sebonglagoi/index6.php";
          }
          else if(@$_GET['page'] == 'sebonglagoi-data-jenis-kelamin')          
          {
            include "views/sebonglagoi/index7.php";
          }
          else if(@$_GET['page'] == 'sebonglagoi-data-warga-negara')          
          {
            include "views/sebonglagoi/index8.php";
          }
          else if(@$_GET['page'] == 'sebonglagoi-penerima-raskin')          
          {
            include "views/sebonglagoi/index9.php";
          }
          else if(@$_GET['page'] == 'sebonglagoi-blsm')          
          {
            include "views/sebonglagoi/index10.php";
          }
          else if(@$_GET['page'] == 'sebonglagoi-pkh')          
          {
            include "views/sebonglagoi/index11.php";
          }
          else if(@$_GET['page'] == 'sebonglagoi-bedahrumah')          
          {
            include "views/sebonglagoi/index12.php";
          }
          else if(@$_GET['page'] == 'sebonglagoi-jamkesmas')          
          {
            include "views/sebonglagoi/index13.php";
           // sebonglagoi end
          }

        ?>