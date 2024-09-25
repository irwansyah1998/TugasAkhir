<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tabel Bahan - Edit Warna Bahan</h1>
            <a href="<?php echo base_url('pengguna/admin/tabel/bahan/warna/tambah');?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-right fa-sm text-white-50"></i> Tambah Data <i class="fas fa-arrow-left fa-sm text-white-50"></i></a>
          </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary text-center">Daftar Nama Bahan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="dataTable" class="table table-bordered dataTable" role="grid" aria-describedby="dataTable_info" style="width:100%" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama</th>
                      <th>Kode</th>
                      <th>Fungsi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No.</th>
                      <th>Nama</th>
                      <th>Kode</th>
                      <th>Fungsi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php if ($tabel != false) {
                      $no=0;
                      foreach ($tabel as $tb) {
                      $no++; ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $tb->warna_bhn;?></td>
                      <td><?php echo $tb->kode;?></td>
                      <td>
                        <form action="<?php echo base_url('pengguna/admin/tabel/bahan/warna/edit');?>" method="POST">
                          <input type="hidden" name="id" value="<?php echo $tb->id; ?>">
                          <input type="hidden" name="kode" value="<?php echo $tb->kode;?>">
                          <input class="btn btn-primary btn-user btn-block" type="submit" name="edit" value="Edit">
                          <input class="btn btn-primary btn-danger btn-block" type="submit" name="delete" value="Hapus">
                        </form>
                      </td>
                    </tr>
                      <?php } ?>
                    <?php }else{?>
                    <tr>
                      <td>(no data)</td>
                      <td>(no data)</td>
                      <td>(no data)</td>
                      <td>(no data)</td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->