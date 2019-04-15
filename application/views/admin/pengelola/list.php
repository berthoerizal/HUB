<div class="slim-mainpanel">
  <div class="container">
    <div class="slim-pageheader">
      <ol class="breadcrumb slim-breadcrumb">
        <li class="breadcrumb-item">
          <a href="?home">Home
          </a>
        </li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?>
        </li>
      </ol>
      <h6 class="slim-pagetitle">Monitoring Simdes Prima
      </h6>
    </div>
    <!-- slim-pageheader -->
    <div class="section-wrapper">
      <h4 class="page-header">
       <?php echo $title; ?>
      </h4>
      <hr>
      <div class="row">
        <div class="col-sm-3">
        </div>
      </div>
      <!-- end -->
      <!-- <div class="section-wrapper"> -->
      <p> <?php 
            if($this->session->flashdata('sukses'))
            {
              echo '<div class="alert alert-success">';
              echo $this->session->flashdata('sukses');
              echo '</div>';
            }
            //error validasi
            echo validation_errors('<div class="alert alert-warning">','</div>'); ?></p>
      <?php  include('tambah.php'); ?>
      <br>
      <div class="row">
        <div class="col-md-12 table-responsive">
          <table class="table" id="table_id">
            <thead>
              <tr>
                <th>No.</th>
                <th >Nama Lengkap
                </th>
                <th>Username
                </th>
                <th>Kontak
                </th>
                <th>Tanggal
                </th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=0; foreach ($user as $user) { ?>
                <tr>
                  <td><?php echo $i=$i+1; ?></td>
                  <td><?php echo $user->nama; ?></td>
                  <td><?php echo $user->username; ?></td>
                  <td><?php if($user->telepon==""){ echo "-"; }else{echo $user->telepon;} ?><br><?php echo $user->email ?></td>
                  <td><?php echo date("d F Y", strtotime($user->tanggal)); ?></td>
                  <td>
                   <?php include('hapus.php'); ?> <a style="margin: 2px; width: 80px;" href="<?php echo base_url('pengelola/detail/'.$user->username); ?>" class="btn btn-success btn-sm"><i class="fa fa-user"></i> Detail</a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
      </div>
    </div>