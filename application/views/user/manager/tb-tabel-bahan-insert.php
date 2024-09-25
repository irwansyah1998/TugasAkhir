<div class="container-fluid">
<!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tabel Bahan - Insert</h1>
          <p class="mb-4"></p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary text-center">Masukkan Data Bahan</h6>
            </div>
            <div class="card-body">
              <form style="width: 75%; margin: auto;" action="<?php echo base_url('pengguna/admin/tabel/bahan/tabel/insup');?>" method="POST">
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Nama Bahan :</h6>
                </div>
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Jenis Bahan :</h6>
                </div>
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Warna Bahan :</h6>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <select class="form-control" name="nm_bhn" required>
                    <option value="">Pilih Nama Bahan</option>
                  <?php foreach ($tabel_nama as $tbn) { ?>
                    <option value="<?php echo $tbn->kode; ?>"><?php echo $tbn->nama_bhn; ?></option>
                  <?php } ?>
                  </select>
                </div>
                <div class="col">
                  <select class="form-control" name="jns_bhn" required>
                    <option value="">Pilih Jenis Bahan</option>
                    <?php foreach ($tabel_jenis as $tbj) { ?>
                    <option value="<?php echo $tbj->kode; ?>"><?php echo $tbj->jenis_bhn; ?></option>
                  <?php } ?>
                  </select>
                </div>
                <div class="col">
                  <select class="form-control" name="wrn_bhn" required>
                    <option value="">Pilih warna Bahan</option>
                    <option value="nul">-</option>
                    <?php foreach ($tabel_warna as $tbw) { ?>
                    <option value="<?php echo $tbw->kode; ?>"><?php echo $tbw->warna_bhn; ?></option>
                  <?php } ?>
                  </select>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Harga Bahan /Roll :</h6>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input class="form-control" type="number" min="0" name="hrg_rol" placeholder="Rp." step="500" required>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Harga Bahan /Meter :</h6>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input class="form-control" type="number" min="0" name="hrg_m" placeholder="Rp." step="500" required>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Harga Bahan /Kg :</h6>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input class="form-control" type="number" name="hrg_kg" placeholder="Rp." step="500" required>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Harga Per-tanggal :</h6>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <select class="form-control" name="tgl" required>
                    <option value="">Tanggal</option>
                    <?php for ($i=1; $i<=31 ; $i++) { ?>
                    <option value="<?php echo $i ;?>"><?php echo $i ;?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col">
                  <select class="form-control" name="bln" required>
                    <option value="">Pilih Bulan</option>
                    <?php for ($i=1; $i<=12 ; $i++) { ?>
                    <option value="<?php echo $i; ?>"><?php if($i==1){echo "Januari";}elseif($i==2){echo "Febuari";}elseif($i==3){echo "Maret";}elseif($i==4){echo "April";}elseif($i==5){echo "Mei";}elseif($i==6){echo "Juni";}elseif($i==7){echo "Juli";}elseif($i==8){echo "Agustus";}elseif($i==9){echo "September";}elseif($i==10){echo "Oktober";}elseif($i==11){echo "November";}elseif($i==12){echo "Desember";} ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col">
                  <input class="form-control" type="number" min="1111" max="9999" name="thn" placeholder="Tahun" required>
                  <?php ?>
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