
<a href="" class="btn btn-primary" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i> Tambah</a>
<br>
<div id="tambah" class="modal fade">
      <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Tambah Pengelola Website</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
           <?php $attribut='class="form-horizontal"'; 
                echo form_open(base_url('pengelola'),$attribut); 
            ?>
          <div class="modal-body pd-25">
               <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Nama Lengkap: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" >
                </div>
                <div class="form-group">
                  <label class="form-control-label">Username: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="username" placeholder="Username" >
                </div>
                <div class="form-group">
                  <label class="form-control-label">Password: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="password" name="password" placeholder="Password" >
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-primary" value="Simpan" name="submit">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
          <?php echo form_close(); ?>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->
