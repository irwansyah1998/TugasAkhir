<div class="container-fluid">

<!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Produksi - Produk</h1>
          <p class="mb-4"></p>
          <div class="row">
                  <div class="col-12">
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          <strong>Aturan Upload!!!</strong>
          
                          <ol>
                              <li>File yang di Upload Adalah File Gambar!!</li>
                              <li>Tipe File : PNG, JPG, JPEG</li>
                              <li>File Upload Max 2 MB</li>
                              <li>Lebar Maksimal : 1024 pixel</li>
                              <li>Tinggi Maksimal : 768 pixel</li>
                          </ol> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  </div>
          </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary text-center">Tambah Data Produk</h6>
            </div>
            <div class="card-body">
              <form style="width: 75%; margin: auto;" action="<?php echo base_url('/pengguna/admin/produksi/produk/insup');?>" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Kode Produk :</h6>
                </div>
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Tipe Produk :</h6>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input placeholder="Kode Produk..." type="text" name="kd_prdk" value="" class="form-control" required>
                </div>
                <div class="col">
                  <input placeholder="Tipe Produk..." type="text" name="tp_prdk" value="" class="form-control" required>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Nama Produk :</h6>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input placeholder="Nama Produk..." type="text" name="nm_prdk" value="" class="form-control" required>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Keterangan :</h6>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input placeholder="Keterangan..." type="text" name="ktrngn_prdk" value="" class="form-control" required>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Harga Produk :</h6>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input placeholder="Rp..." type="number" min="0" name="hrg_prdk" value="" class="form-control" required>
                </div>
              </div>
              <br>
              <div class="row" >
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Bahan :</h6>
                </div>
              </div>
              <div class="row" >
                <div class="col">
                  <select name="nm_bhn" class="form-control" required>
                    <option value="" >Nama Bahan</option>
                    <?php foreach ($nm_bhn as $tbn) { ?>
                    <option value="<?php echo $tbn->kode; ?>"><?php echo $tbn->nama_bhn; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col">
                  <select name="jns_bhn" class="form-control" required>
                    <option value="" >Jenis Bahan</option>
                    <?php foreach ($jns_bhn as $tbj) { ?>
                    <option value="<?php echo $tbj->kode; ?>"><?php echo $tbj->jenis_bhn; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col">
                  <select name="wrn_bhn" class="form-control" required>
                    <option value="">Warna Bahan</option>
                    <option value="nul">Tanpa Warna</option>
                    <?php foreach ($wrn_bhn as $tbw) { ?>
                    <option value="<?php echo $tbw->kode; ?>"><?php echo $tbw->warna_bhn; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <br>
              <div class="row" >
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Gambar :</h6>
                </div>
              </div>
              <div class="row" >
                <div class="col">
                  <input type="file" name="gmbr_prdk" class="form-control" required>
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
                  <a class="btn btn-primary btn-danger btn-block" href="<?php echo base_url('/pengguna/admin/produksi/produk');?>">Kembali</a>
                </div>
              </div>
              </form>
              
                    
              
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->