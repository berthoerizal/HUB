<?php
          
          // telukbakau start
           if(@$_GET['page'] == 'teluksasah-profil-desa')          
          {
            include "views/teluksasah/index1.php";
          }
          else if(@$_GET['page'] == 'teluksasah-wilayah-administratif')          
          {
            include "views/teluksasah/index2.php";
          }
           else if(@$_GET['page'] == 'teluksasah-data-pendidikan-dalam-kk')          
          {
            include "views/teluksasah/index3.php";
          }
          else if(@$_GET['page'] == 'teluksasah-data-pendidikan-ditempuh')          
          {
            include "views/teluksasah/index4.php";
          }
          else if(@$_GET['page'] == 'teluksasah-data-pekerjaan')          
          {
            include "views/teluksasah/index5.php";
          }
          else if(@$_GET['page'] == 'teluksasah-data-agama')          
          {
            include "views/teluksasah/index6.php";
          }
          else if(@$_GET['page'] == 'teluksasah-data-jenis-kelamin')          
          {
            include "views/teluksasah/index7.php";
          }
          else if(@$_GET['page'] == 'teluksasah-data-warga-negara')          
          {
            include "views/teluksasah/index8.php";
          }
          else if(@$_GET['page'] == 'teluksasah-penerima-raskin')          
          {
            include "views/teluksasah/index9.php";
          }
          else if(@$_GET['page'] == 'teluksasah-blsm')          
          {
            include "views/teluksasah/index10.php";
          }
          else if(@$_GET['page'] == 'teluksasah-pkh')          
          {
            include "views/teluksasah/index11.php";
          }
          else if(@$_GET['page'] == 'teluksasah-bedahrumah')          
          {
            include "views/teluksasah/index12.php";
          }
          else if(@$_GET['page'] == 'teluksasah-jamkesmas')          
          {
            include "views/teluksasah/index13.php";
           // telukbakau end
          }

        ?>