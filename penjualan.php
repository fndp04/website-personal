<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">              
            <div class="card">
              
              <div class="card-body">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                            Tambah Data
                        </button>
                        <br> </br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Tanggal Jual</th>
                    <th>Jumlah Penjualan</th>
                    <th>Harga Rp</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $no = 0;
                    $query = mysqli_query($koneksi,"SELECT * FROM trift");
                    while($mhs = mysqli_fetch_array($query)){
                      $no++
                    ?>
                  <tr>
                    <td width=5%><?php echo $no;?></td>
                    <td><?php echo $mhs['nama'];?></td>
                    <td><?php echo $mhs['tanggal_jual'];?></td>
                    <td><?php echo $mhs['jumlah'];?></td>
                    <td><?php echo $mhs['harga'];?></td>
                    <td> 
                                          <a onclick="hapus_data(<?php echo $mhs['id']; ?>)" class="btn btn-sm btn-danger">Hapus</a>
                                          <a href="index.php?page=edit-data&& id=<?php echo $mhs['id']; ?>" class="btn btn-sm btn-success">Edit</a>
                                          <a class= "view-data btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-view" 
                                          data-nama="<?php echo $mhs['nama']; ?>"
                                          data-tanggaljual="<?php echo $mhs['tanggal_jual']; ?>"
                                          data-jumlahbeli="<?php echo $mhs['jumlah']; ?>"
                                          data-harga="<?php echo $mhs['harga']; ?>">View Data</a>
                                        </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Tambah Data  -->
<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="get" action="add/tambah_data.php">
            <div class="modal-body">
            
              <div class="form-row">
                <div class="col">
                <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Tanggal Jual" name="tanggal_jual" required>
                </div>
                   <div class="col">
                  <input type="text" class="form-control" placeholder="Jumlah Beli" name="jumlah" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Bayar" name="harga" required>
                </div>
                </div>
           
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
 <!-- Akhir Tambah Data  -->

 <!-- View Data  -->
 <div class="modal fade" id="modal-view">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">View Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="get" action="add/tambah_data.php">
            <div class="modal-body">
            
              <div class="form-row">
                <div class="col">
                    Nama Brand : <span id='nama'> </span>
                </div>
                <div class="col">
                  Tanggal Jual : <span id='tanggal_jual'> </span>
                </div>
                   <div class="col">
                  Jumlah Beli : <span id='jumlah'> </span>
                </div>
                <div class="col">
                  Bayar : <span id='harga'> </span>
                </div>
                </div>
           
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
            </div>
        </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
 <!-- Akhir View Data  -->

  <!-- Awal Hapus Data  -->
<script>
  function hapus_data (data_id){
    Swal.fire({
      title: 'Apakah Data Akan Dihapus?',
      showCancelButton:true,
      confirmButtonText:'Hapus Data',
      confirmButtonColor:'#CD5C5C',
    }).then((result)=>{
      if (result.isConfirmed){
        window.location=("delete/hapus_data.php?id="+data_id)
      }
    })
  }
  </script>
   <!-- Akhir Hapus Data  -->