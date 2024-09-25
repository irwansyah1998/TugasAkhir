<div class="container-fluid">
<!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tabel Nama Bahan - Insert</h1>
          <p class="mb-4"></p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary text-center">Masukkan Data Pesanan</h6>
            </div>
            <div class="card-body">
              <form style="width: 75%; margin: auto;" action="<?php echo base_url('pengguna/admin/tabel/bahan/warna/insup');?>" method="POST">
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Warna Bahan :</h6>
                </div>
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Kode Warna Bahan :</h6>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input placeholder="Masukkan Nama Bahan..." type="text" name="wrn_bhn" value="" class="form-control" required>
                </div>
                <div class="col">
                  <input placeholder="Masukkan Kode Bahan..." type="text" name="kd_bhn" value="" class="form-control" required>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-user btn-block">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <a class="btn btn-primary btn-danger btn-block" href="<?php echo base_url('/pengguna/admin/tabel/pesanan');?>">Kembali</a>
                </div>
              </div>
              </form>
              
                    
              
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->