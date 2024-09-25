<?php
foreach ($tabel as $tb) {
  $id = $tb->id;
  $kode = $tb->kode;
  $img_pic = $tb->gambar_produk;
  $time = $tb->tgl_update;
}
?>
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
              <h6 class="m-0 font-weight-bold text-primary text-center">Ubah Gambar Produk Dengan Kode <?php echo $kode; ?></h6>
            </div>
            <div class="card-body">
              <form style="width: 75%; margin: auto;" action="<?php echo base_url('/pengguna/admin/produksi/produk/insup');?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="hidden" name="kode" value="<?php echo $kode; ?>">
                <input type="hidden" name="time" value="<?php echo $time; ?>">
                <input type="hidden" name="gmbr_prdk" value="<?php echo $img_pic; ?>">
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Gambar Saat Ini:</h6>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <img style="height: 75%; width: 75%;" src="<?php echo base_url('/file/data/gambar/produk/'.$tb->gambar_produk);?>">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Gambar Baru:</h6>
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
                  <input type="submit" name="picture" value="Simpan" class="btn btn-primary btn-user btn-block">
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