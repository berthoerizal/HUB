<div class="slim-mainpanel">
  <div class="container">
    <div class="slim-pageheader">
      <ol class="breadcrumb slim-breadcrumb">
        <li class="breadcrumb-item">
          <a href="?home">Home
          </a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Total Penduduk Kecamatan
        </li>
      </ol>
      <h6 class="slim-pagetitle">Monitoring Simdes Prima
      </h6>
    </div>
    <!-- slim-pageheader -->
    <div class="section-wrapper">
      <h4 class="page-header">
      </h4>
      <div class="row">
        <div class="col-sm-3">
        </div>
      </div>
      <!-- end -->
      <!-- <div class="section-wrapper"> -->
      <label class="section-title">Total Penduduk Kecamatan
      </label>
      <br>
      <div class="row">
     
        	  <?php 
            $result_L = array(NULL,$desa1_L,$desa2_L,$desa3_L,$desa4_L,$desa5_L,$desa6_L,
                              $desa7_L,$desa8_L,$desa9_L,$desa10_L,$desa11_L,$desa12_L,
                                                                                                                      $desa13_L,$desa14_L,$desa15_L,$desa16_L,$desa17_L,$desa18_L,
                                                            														$desa19_L,$desa20_L,$desa21_L,$desa22_L,$desa23_L,$desa24_L,
		                                                            $desa25_L,$desa26_L,$desa27_L,$desa28_L,$desa29_L,$desa30_L,
                                                            $desa31_L,$desa32_L,$desa33_L,$desa34_L,$desa35_L,$desa36_L);
    
            $result_P = array(NULL,$desa1_P,$desa2_P,$desa3_P,$desa4_P,$desa5_P,$desa6_P,
                              $desa7_P,$desa8_P,$desa9_P,$desa10_P,$desa11_P,$desa12_P,
                              $desa13_P,$desa14_P,$desa15_P,$desa16_P,$desa17_P,$desa18_P,
                              $desa19_P,$desa20_P,$desa21_P,$desa22_P,$desa23_P,$desa24_P,
                              $desa25_P,$desa26_P,$desa27_P,$desa28_P,$desa29_P,$desa30_P,
                              $desa31_P,$desa32_P,$desa33_P,$desa34_P,$desa35_P,$desa36_P);
    
            $nama_desa = array('NULL','Gunung Kijang','Malang Rapat','Teluk Bakau','Lancang Kuning','Bintan Buyu','Tembeling',
                              'Penaga','Pengujan','Pangkil','Batu Lepuk','Kampung Hilir','Kampung Melayu',
                              'Kukup','Pulau Mentebung','Pulau Pinang','Pengikik','Berakit','Pengudang',
                              'Sri Bintan','Ekang Anculai','Sebong Lagoi','Sebong Pereh','Toapaya','Toapaya Utara',
                              'Toapaya Selatan','Mantang Baru','Mantang Besar','Mantang Lama','Dendun','Kelong',
                              'Air Gelubi','Mapur','Numbing' ,'Busung','Teluk Sasah','Kuala Sempang'); 
    
        $nama_kec = array(NULL,'Gunung Kijang','Bintan Utara','Teluk Bintan',
                              'Tambelan','Telok Sebong','Toapaya',
                              'Mantang','Bintan Pesisir','Seri Kuala Lobam'); ?>


        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No.
                </th>
                <th scope="col">
                  Nama Kecamatan
                </th>
                <th scope="col">Nama Desa
                </th>
                <th scope="col">Jumlah Laki-Laki
                </th>
                <th scope="col">Jumlah Perempuan
                </th>
                <th scope="col">
                  Total Penduduk Desa
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td><?php echo $nama_kec[1]; ?></td>
                <td><?php echo $nama_desa[1] ;?></td>
                <td><?php echo $result_L[1] ;?></td>
                <td><?php echo $result_L[1] ;?></td>
                <td><?php echo $result[1]=$result_L[1]+$result_P[1]; ?></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td><?php echo $nama_desa[2]; ?></td>
                <td><?php echo $result_L[2]; ?></td>
                <td><?php echo $result_P[2]; ?></td>
                <td><?php echo $result[2]=$result_L[2]+$result_P[2]; ?></td>
              </tr>

              <tr>
                <td></td>
                <td></td>
                <td><?php echo $nama_desa[3]; ?></td>
                <td><?php echo $result_L[3]; ?></td>
                <td><?php echo $result_P[3]; ?></td>
                <td><?php echo $result[3]=$result_L[3]+$result_P[3]; ?></td>
              </tr>

              <tr style="background-color: #DEE2E6;">
                <td></td>
                <td><b>Total Penduduk Kecamatan</b></td>
                <td></td>
                <td><b><?php echo $result_L[1]+$result_L[2]+$result[3]; ?></b></td>
                <td><b><?php echo $result_P[1]+$result_P[2]+$result[3]; ?></b></td>
                <td><b><?php echo $result[1]+$result[2]+$result[3]; ?></b></td>
              </tr>

              <!-- BATAS COPY PASTE -->
              <tr style="height: 50px;">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
               
            </tbody>
          </table>
      </div>
    </div>

