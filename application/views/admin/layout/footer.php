     
    <script type="text/javascript">
    $(".num").counterUp({delay:10,time:1000});
  </script>




        </div><!-- container -->
    </div> 
    <script src="<?php echo base_url(); ?>admin/hub/assets/lib/jquery/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>admin/hub/assets/lib/popper.js/js/popper.js"></script>
    <script src="<?php echo base_url(); ?>admin/hub/assets/lib/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>admin/hub/assets/lib/jquery.cookie/js/jquery.cookie.js"></script>
    <script src="<?php echo base_url(); ?>admin/hub/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>admin/hub/assets/js/slim.js"></script>
    <script type="text/javascript" charset="utf8" src="<?php echo base_url(); ?>admin/table/datatables.js"></script>
    <script>
   $(document).ready(function() {
        var t = $('#table_id').DataTable( {
            "columnDefs": [ {
                "searchable": false,
                "orderable": false,
                "targets": 0
            } ],
            //export
            dom: 'Blfrtip',
            buttons: [
                { extend: 'copyHtml5', footer: true },
                { extend: 'excelHtml5', footer: true },
                { extend: 'csvHtml5', footer: true },
                { extend: 'pdfHtml5', footer: true }
            ]
            //end export
        } );
     
        t.on( 'order.dt search.dt', function () {
            t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } ).draw();
    } );
    </script>
  </body>
</html>