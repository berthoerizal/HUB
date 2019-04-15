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
      <div class="row">
        <div class="col-md-12">
           <?php echo form_open(base_url('pengelola/detail/'.$user->username)); ?>
           <div class="col-md-6">
           <div class="form-group">
              <label class="form-control-label">Nama Lengkap: <span class="tx-danger">*</span></label>
              <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $user->nama ?>" >
           </div>
           <div class="form-group">
              <label class="form-control-label">Username:</label>
              <input class="form-control" type="text" name="username" placeholder="Username" value="<?php echo $user->username ?>" disabled >
           </div>
           <div class="form-group">
              <label class="form-control-label">Telepon:</label>
              <input class="form-control" type="text" name="telepon" placeholder="Telepon" value="<?php echo $user->telepon ?>" >
           </div>
           <div class="form-group">
              <label class="form-control-label">Email:</label>
              <input class="form-control" type="email" name="email" placeholder="Email" value="<?php echo $user->email ?>" >
           </div>
           <div class="form-group">
              <label class="form-control-label">Tanggal Terdaftar:</label>
              <input class="form-control" type="text" name="tanggal" placeholder="Tanggal Terdaftar" value="<?php echo date("d F Y",strtotime($user->tanggal)); ?>" disabled >
           </div>
           <div class="form-group">
              <input type="submit" value="Simpan" name="submit" class="btn btn-success">
               <input type="reset" name="reset" class="btn btn-default" value="Reset" />
            </div>
            </div>
           <?php echo form_close(); ?>
         </div>
      </div>
    </div>