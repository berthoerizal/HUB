<?php
          
          // mantanglama start
           if(@$_GET['page'] == 'mantanglama-profil-desa')          
          {
            include "views/mantanglama/index1.php";
          }
          else if(@$_GET['page'] == 'mantanglama-wilayah-administratif')          
          {
            include "views/mantanglama/index2.php";
          }
           else if(@$_GET['page'] == 'mantanglama-data-pendidikan-dalam-kk')          
          {
            include "views/mantanglama/index3.php";
          }
          else if(@$_GET['page'] == 'mantanglama-data-pendidikan-ditempuh')          
          {
            include "views/mantanglama/index4.php";
          }
          else if(@$_GET['page'] == 'mantanglama-data-pekerjaan')          
          {
            include "views/mantanglama/index5.php";
          }
          else if(@$_GET['page'] == 'mantanglama-data-agama')          
          {
            include "views/mantanglama/index6.php";
          }
          else if(@$_GET['page'] == 'mantanglama-data-jenis-kelamin')          
          {
            include "views/mantanglama/index7.php";
          }
          else if(@$_GET['page'] == 'mantanglama-data-warga-negara')          
          {
            include "views/mantanglama/index8.php";
          }
          else if(@$_GET['page'] == 'mantanglama-penerima-raskin')          
          {
            include "views/mantanglama/index9.php";
          }
          else if(@$_GET['page'] == 'mantanglama-blsm')          
          {
            include "views/mantanglama/index10.php";
          }
          else if(@$_GET['page'] == 'mantanglama-pkh')          
          {
            include "views/mantanglama/index11.php";
          }
          else if(@$_GET['page'] == 'mantanglama-bedahrumah')          
          {
            include "views/mantanglama/index12.php";
          }
          else if(@$_GET['page'] == 'mantanglama-jamkesmas')          
          {
            include "views/mantanglama/index13.php";
           // mantanglama end
          }

        ?>