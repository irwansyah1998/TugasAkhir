<div class="container-fluid">
  <?php
  foreach ($tabel as $tb) {
    $id_pes = $tb->id;
    $kode_p = $tb->kode_pesanan;
    $thn = $tb->thn_pesan;
    $bln = $tb->bln_pesan;
    $tgl = $tb->tgl_pesan;
    $nma = $tb->nama_pemesan;
    $n_telp = $tb->no_telp;
    $email = $tb->email_pemesan;
    $alamat = $tb->alamat_pemesan;
    $j_baju = $tb->jenis_baju;
    $ju_3xl = $tb->jumlah_3xl;
    $ju_2xl = $tb->jumlah_2xl;
    $ju_xl = $tb->jumlah_xl;
    $ju_l = $tb->jumlah_l;
    $ju_m = $tb->jumlah_m;
    $ju_s = $tb->jumlah_s;
    $ju_lain = $tb->jumlah_lainnya;
    $ket = $tb->keterangan;
    $t_pesan = $tb->total_pesanan;
    $harga_pcs = $tb->harga;
    $t_harga = $tb->total_harga;
    $t_bayar = $tb->telah_bayar;
    $b_bayar = $tb->belum_bayar;
    $status = $tb->status;
  }?>
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Pesanan - Edit</h1>
          <p class="mb-4"></p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary text-center">Edit Data Dengan Kode Pesanan <u><?php echo $pesanan; ?></u></h6>
            </div>
            <div class="card-body">
              <form style="width: 75%; margin: auto;" action="<?php echo base_url('pengguna/admin/tabel/pesanan/edit/insup');?>" method="POST">
              <input type="hidden" name="id_pes" value="<?php echo $id_pes; ?>">
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Tanggal :</h6>
                </div>
              </div>
              <div class="row" >
                <div class="col">
                  <select name="tanggal" class="form-control">
                    <?php for ($i=1; $i <=31; $i++) {
                    if ($tgl == $i) { ?>
                    <option selected value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php }else{?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                     <?php }
                    } ?>
                  </select>
                </div>
                <div class="col">
                  <select name="bulan" class="form-control">
                    <?php for ($i=1; $i <=12; $i++) {
                    if ($i == 1) {$b = "Januari";}elseif($i == 2){ $b="Febuari";}elseif($i == 3){ $b="Maret";}elseif($i == 4){ $b="April";}elseif($i == 5){ $b="Mei";}elseif($i == 6){ $b="Juni";}elseif($i == 7){ $b="Juli";}elseif($i == 8){ $b="Agustus";}elseif($i == 9){ $b="September";}elseif($i == 10){ $b="Oktober";}elseif($i == 11){ $b="November";}elseif($i == 12){ $b="Desember";}
                   if ($bln == $i) { ?>
                   <option selected value="<?php echo $i; ?>"><?php echo $b; ?></option>
                   <?php }else{ ?>
                   <option value="<?php echo $i; ?>"><?php echo $b; ?></option>
                   <?php }
                   } ?>
                  </select>
                </div>
                <div class="col">
                  <select name="tahun" class="form-control">
                    <?php for ($i=($thn-7); $i <=$thn ; $i++) {
                     if ($i==$thn) { ?>
                    <option selected value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php }else{ ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php }
                    } ?>
                    <?php for ($i=$thn+1; $i <=$thn+7 ; $i++) { ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Nama :</h6>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input type="text" name="nama" value="<?php echo $nma; ?>" class="form-control">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">No. Telp/HP :</h6>
                </div>
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Email :</h6>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input type="text" name="n_telp" value="<?php echo $n_telp; ?>" class="form-control">
                </div>
                <div class="col">
                  <input type="text" name="email" value="<?php echo $email; ?>" class="form-control">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Alamat :</h6>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input type="text" name="alamat" value="<?php echo $alamat; ?>" class="form-control">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Jenis Baju :</h6>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input type="text" name="j_baju" value="<?php echo $j_baju; ?>" class="form-control">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">XXXL :</h6>
               </div>
               <div class="col">
                  <h6 class="m-0 font-weight-bold">XXL :</h6>
               </div>
               <div class="col">
                  <h6 class="m-0 font-weight-bold">XL :</h6>
               </div>
               <div class="col">
                  <h6 class="m-0 font-weight-bold">L :</h6>
               </div>
               <div class="col">
                  <h6 class="m-0 font-weight-bold">M :</h6>
               </div>
               <div class="col">
                  <h6 class="m-0 font-weight-bold">S :</h6>
               </div>
               <div class="col">
                  <h6 class="m-0 font-weight-bold">Lainnya :</h6>
               </div>
              </div>
              <div class="row">
                <div class="col">
                  <input id="j_3xl" onchange="pesanan()" min="0" type="number" name="ju_3xl" value="<?php echo $ju_3xl; ?>" class="form-control">
                </div>
                <div class="col">
                  <input id="j_2xl" onchange="pesanan()" min="0" type="number" name="ju_2xl" value="<?php echo $ju_2xl; ?>" class="form-control">
                </div>
                <div class="col">
                  <input id="j_xl" onchange="pesanan()" min="0" type="number" name="ju_xl" value="<?php echo $ju_xl; ?>" class="form-control">
                </div>
                <div class="col">
                  <input id="j_l" onchange="pesanan()" min="0" type="number" name="ju_l" value="<?php echo $ju_l; ?>" class="form-control">
                </div>
                <div class="col">
                  <input id="j_m" onchange="pesanan()" min="0" type="number" name="ju_m" value="<?php echo $ju_m; ?>" class="form-control">
                </div>
                <div class="col">
                  <input id="j_s" onchange="pesanan()" min="0" type="number" name="ju_s" value="<?php echo $ju_s; ?>" class="form-control">
                </div>
                <div class="col">
                  <input id="j_lain" onchange="pesanan()" min="0" type="number" name="ju_lain" value="<?php echo $ju_lain; ?>" class="form-control">
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
                  <input type="text" name="ket" value="<?php echo $ket; ?>" class="form-control">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Total Pesanan :</h6>
                </div>
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Harga Pesanan /Pcs :</h6>
                </div>
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Total Harga :</h6>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input id="j_tot" readonly onchange="tot_harga()" type="number" name="t_pesan" value="<?php echo $t_pesan; ?>" class="form-control">
                </div>
                <div class="col">
                  <input id="rp_psn" onchange="tot_harga()" step="500" type="number" name="harga_pcs" value="<?php echo $harga_pcs; ?>" class="form-control">
                </div>
                <div class="col">
                  <input id="hrg_tot" readonly type="number" type="number" name="t_harga" value="<?php echo $t_harga; ?>" class="form-control">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Uang yang telah dibayar :</h6>
                </div>
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Uang Yang belum dibayar :</h6>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input id="uang_byr" onchange="blm_byr()" step="500" type="number" name="t_bayar" value="<?php echo $t_bayar; ?>" class="form-control">
                </div>
                <div class="col">
                  <input id="b_byr" readonly type="number" type="number" name="b_bayar" value="<?php echo $b_bayar; ?>" class="form-control">
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