
<a href="" class="btn btn-danger btn-sm" style="margin: 2px; width: 80px;" data-toggle="modal" data-target="#hapus<?php echo $user->username ?>"><i class="fa fa-trash"></i> Hapus</a>
<br>
<div id="hapus<?php echo $user->username ?>" class="modal fade">
      <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Hapus Pengelola Website</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body pd-25">
              Yakin ingin menghapus data ini ?
          </div>
          <div class="modal-footer">
            <a href="<?php echo base_url('pengelola/hapus/'.$user->username); ?>" class="btn btn-danger" >Hapus</a>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->
