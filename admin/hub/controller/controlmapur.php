<?php
          
          // mapur start
           if(@$_GET['page'] == 'mapur-profil-desa')          
          {
            include "views/mapur/index1.php";
          }
          else if(@$_GET['page'] == 'mapur-wilayah-administratif')          
          {
            include "views/mapur/index2.php";
          }
           else if(@$_GET['page'] == 'mapur-data-pendidikan-dalam-kk')          
          {
            include "views/mapur/index3.php";
          }
          else if(@$_GET['page'] == 'mapur-data-pendidikan-ditempuh')          
          {
            include "views/mapur/index4.php";
          }
          else if(@$_GET['page'] == 'mapur-data-pekerjaan')          
          {
            include "views/mapur/index5.php";
          }
          else if(@$_GET['page'] == 'mapur-data-agama')          
          {
            include "views/mapur/index6.php";
          }
          else if(@$_GET['page'] == 'mapur-data-jenis-kelamin')          
          {
            include "views/mapur/index7.php";
          }
          else if(@$_GET['page'] == 'mapur-data-warga-negara')          
          {
            include "views/mapur/index8.php";
          }
          else if(@$_GET['page'] == 'mapur-penerima-raskin')          
          {
            include "views/mapur/index9.php";
          }
          else if(@$_GET['page'] == 'mapur-blsm')          
          {
            include "views/mapur/index10.php";
          }
          else if(@$_GET['page'] == 'mapur-pkh')          
          {
            include "views/mapur/index11.php";
          }
          else if(@$_GET['page'] == 'mapur-bedahrumah')          
          {
            include "views/mapur/index12.php";
          }
          else if(@$_GET['page'] == 'mapur-jamkesmas')          
          {
            include "views/mapur/index13.php";
           // mapur end
          }

        ?>