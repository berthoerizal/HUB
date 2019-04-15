<div class="slim-mainpanel">
  <div class="container">
    <div class="slim-pageheader">
      <ol class="breadcrumb slim-breadcrumb">
        <li class="breadcrumb-item">
          <a href="?home">Home
          </a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Total Penduduk Desa
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
      <label class="section-title">Total Penduduk Desa
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

        $nama_desa = array(NULL,'Gunung Kijang','Malang Rapat','Teluk Bakau','Lancang Kuning','Bintan Buyu','Tembeling',
                          'Penaga','Pengujan','Pangkil','Batu Lepuk','Kampung Hilir','Kampung Melayu',
                          'Kukup','Pulau Mentebung','Pulau Pinang','Pengikik','Berakit','Pengudang',
                          'Sri Bintan','Ekang Anculai','Sebong Lagoi','Sebong Pereh','Toapaya','Toapaya Utara',
                          'Toapaya Selatan','Mantang Baru','Mantang Besar','Mantang Lama','Dendun','Kelong',
                          'Air Gelubi','Mapur','Numbing' ,'Busung','Teluk Sasah','Kuala Sempang'); ?>
        <div class="col-md-12 table-responsive">
          <table class="table" id="table_id">
            <thead>
              <tr>
                <th data-sorter="false" scope="col">No.
                </th>
                <th scope="col">Nama Desa
                </th>
                <th scope="col">Jumlah Laki-Laki
                </th>
                <th scope="col">Jumlah Perempuan
                </th>
                <th scope="col">Jumlah Penduduk
                </th>
              </tr>
            </thead>
            <tbody>
              <?php for($i=1;$i<=36;$i++){ ?>
                  <tr>
                      <td ><?php echo $i; ?></td>
                      <td><?php echo $nama_desa[$i]; ?></td>
                      <td><?php echo $result_L[$i]; ?></td>
                      <td><?php echo $result_P[$i]; ?></td>
                      <td><?php echo $result[$i]=$result_L[$i]+$result_P[$i]; ?></td>
                  </tr>
              <?php } ?>
            </tbody>
			 <tfoot>
              <tr>
                <th></th>
                <th>Total Penduduk</th>
                <th></th>
                <th></th>
                <th> <h5> 
					<?php $total_penduduk=0; for($i=1;$i<=36;$i++) { 							$total_penduduk=$total_penduduk+$result[$i]; } echo number_format($total_penduduk); ?> </h5> </td>
              </tr>
            </tfoot>
          </table>
      </div>
    </div>
    
