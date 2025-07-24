
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?= $title?></h1>

        

        <div class="row">
            <div class="col-lg-12">

            <?= form_error('form','<div class="alert alert-danger" role="alert">', '
                </div>'); ?>

                <?= $this->session->flashdata('message'); ?>
                <a href="<?= base_url().'warehouse/index_checkout';?>" class="btn btn-secondary mb-3" ><i class="fas fa-reply"></i> BACK</a>
            
                
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Surat</th>
                        <th>Date CheckIN</th>
                        <th>Date CheckOUT</th>
                        <th>Supplier</th>
                        <th>PO Number</th>
                        <th>Nama Material</th>
                        <th>To Department</th>
                        <th>Quantity</th>
                        <th>Unit</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($checkout as $co) : ?>
                    <tr>
                        <th><?= $i; ?></th>
                        <td><?= $co['no_sj']?></td>
                        <td><?= $co['tanggal_masuk']?></td>
                        <td><?= $co['tanggal_masuk']?></td>
                        <td><?= $co['supplier']?></td>
                        <td><?= $co['po_number']?></td>
                        <td><?= $co['nama_material']?></td>
                        <td><?= $co['dept_tujuan']?></td>
                        <td><?= $co['qty']?></td>
                        <td><?= $co['unit']?></td>
                        <td><?= $co['ket']?></td>
                        <td>
                            
                            <a href="" class="badge badge-success" data-toggle="modal" data-target="#CheckoutMaterialModal<?= $co['id_checkout'] ?>">Detail</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
                </table>
 

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

<?php foreach($checkout as $co) : ?>
<div class="modal fade" id="updateBrandModal<?= $co['id_checkout'] ?>" tabindex="-1" aria-labelledby="updateBrandModalLabel<?= $co['id_checkout'] ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="updateBrandModalLabel<?= $ci['id_checkin'] ?>">Update Brand</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
            <form action="<?= base_url('form/update_brand/'.$co['id_checkout'])?>" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id_brand" value="<?= $co['id_checkout']?>"> 
                    <div class="form-group">
                        <input type="text" class="form-control" id="brand_name<?= $ci['id_checkout'] ?>" name="brand_name" value="<?= $ci['no_sj']?>" placeholder="Brand Name">
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
<?php endforeach; ?>













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