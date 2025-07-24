
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?= $title?></h1>

        

        <div class="row">
            <div class="col-lg-12">
            
                <a href="checkout_blackstone" class="btn btn-blackstone btn-block" style="color:black">
                <i class="fab fa-blogger-b fa-fw"></i> - Material Check OUT BLACKSTONE</a>
                <a href="checkout_rossi" class="btn btn-rossi btn-block" style="color:blue" >
                <i class="fab fa-rust fa-fw"></i> - Material Check OUT ROSSI</a>
                <a href="checkout_ariat" class="btn btn-blackstone btn-block">
                <i class="fab fa-amazon fa-fw"></i> - Material Check OUT ARIAT</a>

            </div>
        </div>


    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Modal -->
<div class="modal fade" id="newCheckinModal" tabindex="-1" aria-labelledby="newCheckinModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="newCheckinModalLabel">Add Material Check In</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
            <form action="<?= base_url('warehouse');?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="id_transaksi">ID Transaksi</label>
                        <input type="text" name="id_transaksi" class="form-control" value="WG-<?=date("Y");?><?=random_string('numeric', 8);?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_masuk">Date Check IN</label>
                        <input type="date" name="tanggal_masuk" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="no_sj">No Surat Jalan</label>
                        <input type="text" name="no_sj" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="supplier">Supplier</label>
                        <input type="text" name="supplier" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="po_number">PO Number</label>
                        <input type="text" name="po_number" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="art">Art</label>
                        <input type="text" name="art" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="kode_material">Kode Material</label>
                        <input type="text" name="kode_material" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="nama_material">Nama Material</label>
                        <input type="text" name="nama_material" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="qty">Quantity</label>
                        <input type="text" name="qty" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="unit">Unit</label>
                        <input type="text" name="unit" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="ket">Keterangan</label>
                        <input type="text" name="ket" class="form-control" >
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>




<script>

  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  });

</script>