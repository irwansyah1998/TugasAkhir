<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tabel Bahan</h1>
            <a href="<?php echo base_url('pengguna/admin/tabel/bahan/tabel/tambah');?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-right fa-sm text-white-50"></i> Tambah Data <i class="fas fa-arrow-left fa-sm text-white-50"></i></a>
          </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary text-center">Daftar  Bahan Dan Harga Bahan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="dataTable" class="table table-bordered dataTable" role="grid" aria-describedby="dataTable_info" style="width:100%" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Kode</th>
                      <th>Nama Bahan</th>
                      <th>Jenis Bahan</th>
                      <th>Warna Bahan</th>
                      <th>Harga Bahan (/Roll)</th>
                      <th>Harga Bahan (/Meter)</th>
                      <th>Harga Bahan (/Kg)</th>
                      <th>Tanggal Update</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No.</th>
                      <th>Kode</th>
                      <th>Nama Bahan</th>
                      <th>Jenis Bahan</th>
                      <th>Warna Bahan</th>
                      <th>Harga Bahan (/Roll)</th>
                      <th>Harga Bahan (/Meter)</th>
                      <th>Harga Bahan (/Kg)</th>
                      <th>Tanggal Update</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php if ($tabel != false) {
                      $no=0;
                      foreach ($tabel as $tb) {
                        $no++;
                        ?>
                      <tr>
                        <td><?php echo $no; ?></td>  
                        <td><?php echo $tb->kode_bhn; ?></td>
                        <td><?php echo $tb->nama_bhn; ?></td>
                        <td><?php echo $tb->jenis_bhn; ?></td>
                        <td><?php echo $tb->warna_bhn; ?></td>
                        <td><?php echo $tb->harga_rol; ?></td>
                        <td><?php echo $tb->harga_meter; ?></td>
                        <td><?php echo $tb->harga_kilo; ?></td>
                        <td><?php echo $tb->thn_update.'/'.$tb->bln_update.'/'.$tb->tgl_update; ?></td>
                      </tr>
                     <?php }
                    }else{?>
                    <tr>
                      <td>(no data)</td>
                      <td>(no data)</td>
                      <td>(no data)</td>
                      <td>(no data)</td>
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