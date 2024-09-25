<div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Produksi - Produk</h1>
            <a href="<?php echo base_url('/pengguna/admin/produksi/produk/insert');?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-right fa-sm text-white-50"></i> Tambah Data <i class="fas fa-arrow-left fa-sm text-white-50"></i></a>
          </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary text-center">Produk</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="dataTable" class="table table-bordered dataTable" role="grid" aria-describedby="dataTable_info" style="width:100%" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Tanggal Upload</th>
                      <th>Kode</th>
                      <th>Tipe</th>
                      <th>Nama</th>
                      <th>Keterangan</th>
                      <th>Harga</th>
                      <th>Gambar</th>
                      <th>Bahan</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Tanggal Upload</th>
                      <th>Kode</th>
                      <th>Tipe</th>
                      <th>Nama</th>
                      <th>Keterangan</th>
                      <th>Harga</th>
                      <th>Gambar</th>
                      <th>Bahan</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php if ($tabel != false) {
                      $no=0;
                      foreach ($tabel as $tb) {
                        $no++; ?>
                        <tr>
                          <td><?php echo $tb->tgl_update; ?></td>
                          <td><?php echo $tb->kode; ?></td>
                          <td><?php echo $tb->tipe_produk; ?></td>
                          <td><?php echo $tb->nama_produk; ?></td>
                          <td><?php echo $tb->keterangan; ?></td>
                          <td><?php echo 'Rp.'.$tb->harga_produk.',-'; ?></td>
                          <td>
                            <img style="height: 150px; width: 150px;" src="<?php echo base_url('/file/data/gambar/produk/'.$tb->gambar_produk);?>">
                          </td>
                          <td><?php echo $tb->kode_bhn; ?></td>
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