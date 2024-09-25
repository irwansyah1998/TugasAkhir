<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tabel Pesanan - Edit Pesanan</h1>
            <a href="<?php echo base_url('pengguna/admin/tabel/pesanan/insert');?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-right fa-sm text-white-50"></i> Tambah Data <i class="fas fa-arrow-left fa-sm text-white-50"></i></a>
          </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary text-center">Daftar Pesanan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="dataTable" class="table table-bordered dataTable" role="grid" aria-describedby="dataTable_info" style="width:100%" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Kode pesanan</th>
                      <th>Tanggal</th>
                      <th>Nama pemesan</th>
                      <th>No telp</th>
                      <th>Jenis baju</th>
                      <th>Total pesanan</th>
                      <th>Harga / Pcs</th>
                      <th>Total harga</th>
                      <th>Fungsi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Kode pesanan</th>
                      <th>Tanggal</th>
                      <th>Nama pemesan</th>
                      <th>No telp</th>
                      <th>Jenis baju</th>
                      <th>Total pesanan</th>
                      <th>Harga / Pcs</th>
                      <th>Total harga</th>
                      <th>Fungsi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php if ($tabel != false) {
                      foreach ($tabel as $tb) { ?>
                      <tr>
                        <td><?php echo $tb->kode_pesanan; ?></td>
                        <td><?php echo $tb->thn_pesan."/";
                                  if($tb->bln_pesan<10){echo '0'.$tb->bln_pesan."/";}else{echo $tb->bln_pesan."/";}
                                  if($tb->tgl_pesan<10){echo '0'.$tb->tgl_pesan;}else{echo $tb->tgl_pesan;} ?></td>
                        <td><?php echo $tb->nama_pemesan; ?></td>
                        <td><?php echo $tb->no_telp; ?></td>
                        <td><?php echo $tb->jenis_baju; ?></td>
                        <td><?php echo $tb->total_pesanan; ?></td>
                        <td><?php echo "Rp.".$tb->harga; ?></td>
                        <td><?php echo "Rp.".$tb->total_harga; ?></td>
                        <td>
                          <form action="<?php echo base_url('pengguna/admin/tabel/pesanan/edit');?>" method="POST">
                            <input type="hidden" name="kode" value="<?php echo $tb->kode_pesanan; ?>">
                            <input type="hidden" name="id_pes" value="<?php echo $tb->id; ?>">
                            <input class="btn btn-primary btn-user btn-block" type="submit" name="submit" value="Edit">
                            <input class="btn btn-primary btn-danger btn-block" type="submit" name="submit" value="Hapus">
                          </form>
                        </td>
                      </tr>
                    <?php }
                      }else{ ?>
                    <tr>
                      <td>(No Data)</td>
                      <td>(No Data)</td>
                      <td>(No Data)</td>
                      <td>(No Data)</td>
                      <td>(No Data)</td>
                      <td>(No Data)</td>
                      <td>(No Data)</td>
                      <td>(No Data)</td>
                      <td>(No Data)</td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->