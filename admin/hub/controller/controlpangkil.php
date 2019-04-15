<?php
          
          // pangkil start
           if(@$_GET['page'] == 'pangkil-profil-desa')          
          {
            include "views/pangkil/index1.php";
          }
          else if(@$_GET['page'] == 'pangkil-wilayah-administratif')          
          {
            include "views/pangkil/index2.php";
          }
           else if(@$_GET['page'] == 'pangkil-data-pendidikan-dalam-kk')          
          {
            include "views/pangkil/index3.php";
          }
          else if(@$_GET['page'] == 'pangkil-data-pendidikan-ditempuh')          
          {
            include "views/pangkil/index4.php";
          }
          else if(@$_GET['page'] == 'pangkil-data-pekerjaan')          
          {
            include "views/pangkil/index5.php";
          }
          else if(@$_GET['page'] == 'pangkil-data-agama')          
          {
            include "views/pangkil/index6.php";
          }
          else if(@$_GET['page'] == 'pangkil-data-jenis-kelamin')          
          {
            include "views/pangkil/index7.php";
          }
          else if(@$_GET['page'] == 'pangkil-data-warga-negara')          
          {
            include "views/pangkil/index8.php";
          }
          else if(@$_GET['page'] == 'pangkil-penerima-raskin')          
          {
            include "views/pangkil/index9.php";
          }
          else if(@$_GET['page'] == 'pangkil-blsm')          
          {
            include "views/pangkil/index10.php";
          }
          else if(@$_GET['page'] == 'pangkil-pkh')          
          {
            include "views/pangkil/index11.php";
          }
          else if(@$_GET['page'] == 'pangkil-bedahrumah')          
          {
            include "views/pangkil/index12.php";
          }
          else if(@$_GET['page'] == 'pangkil-jamkesmas')          
          {
            include "views/pangkil/index13.php";
           // pangkil end
          }

        ?>