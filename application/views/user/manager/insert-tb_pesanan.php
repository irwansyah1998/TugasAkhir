<div class="container-fluid">
<!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tabel Pesanan - Insert</h1>
          <p class="mb-4"></p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary text-center">Masukkan Data Pesanan</h6>
            </div>
            <div class="card-body">
              <form style="width: 75%; margin: auto;" action="<?php echo base_url('pengguna/admin/tabel/pesanan/edit/insup');?>" method="POST">
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Tanggal :</h6>
                </div>
              </div>
              <div class="row" >
                <div class="col">
                  <select name="tanggal" class="form-control" required>
                    <option value="">Pilih Tanggal</option>
                    <?php for ($i=1; $i<=31 ; $i++) { ?>
                    <option value="<?php echo $i ;?>"><?php echo $i ;?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col">
                  <select name="bulan" class="form-control" required>
                    <option value="">Pilih Bulan</option>
                    <?php for ($i=1; $i<=12 ; $i++) { ?>
                    <option value="<?php echo $i; ?>"><?php if($i==1){echo "Januari";}elseif($i==2){echo "Febuari";}elseif($i==3){echo "Maret";}elseif($i==4){echo "April";}elseif($i==5){echo "Mei";}elseif($i==6){echo "Juni";}elseif($i==7){echo "Juli";}elseif($i==8){echo "Agustus";}elseif($i==9){echo "September";}elseif($i==10){echo "Oktober";}elseif($i==11){echo "November";}elseif($i==12){echo "Desember";} ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col">
                  <input placeholder="Masukkan Tahun" type="number" min="1970" max="9999" name="tahun" value="" class="form-control" required>
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
                  <input type="text" maxlength="50" name="nama" value="" class="form-control" required>
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
                  <input type="number" min="0" name="n_telp" value="" class="form-control" required>
                </div>
                <div class="col">
                  <input type="email" maxlength="70" name="email" value="" class="form-control" required>
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
                  <input type="text" maxlength="255" name="alamat" value="" class="form-control" required>
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
                  <input type="text" name="j_baju" maxlength="255" value="" class="form-control" required>
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
                  <input id="j_3xl" onchange="pesanan()" type="number" min="0" max="9999" name="ju_3xl" value="0" class="form-control psnan" required>
                </div>
                <div class="col">
                  <input id="j_2xl" onchange="pesanan()" type="number" min="0" max="9999" name="ju_2xl" value="0" class="form-control psnan" required>
                </div>
                <div class="col">
                  <input id="j_xl" onchange="pesanan()" type="number" min="0" max="9999" name="ju_xl" value="0" class="form-control psnan" required>
                </div>
                <div class="col">
                  <input id="j_l" onchange="pesanan()" type="number" min="0" max="9999" name="ju_l" value="0" class="form-control psnan" required>
                </div>
                <div class="col">
                  <input id="j_m" onchange="pesanan()" type="number" min="0" max="9999" name="ju_m" value="0" class="form-control psnan" required>
                </div>
                <div class="col">
                  <input id="j_s" onchange="pesanan()" type="number" min="0" max="9999" name="ju_s" value="0" class="form-control psnan" required>
                </div>
                <div class="col">
                  <input id="j_lain" onchange="pesanan()" type="number" min="0" max="9999" name="ju_lain" value="0" class="form-control psnan" required>
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
                  <input type="text" name="ket" value="" class="form-control" required>
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
              </div>
              <div class="row">
                <div class="col">
                  <input id="j_tot" readonly onchange="tot_harga()" type="number" min="0" max="99999999" name="t_pesan" value="0" class="form-control" required>
                </div>
                <div class="col">
                  <input id="rp_psn" onchange="tot_harga()" step="500" type="number" min="0" value="0" max="999999999999999" placeholder="Rp." name="harga_pcs" value="" class="form-control" required>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Total Harga :</h6>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input id="hrg_tot" readonly type="number" min="0" max="999999999999999" placeholder="Rp." name="t_harga" value="" class="form-control" required>
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
                  <input id="uang_byr" onchange="blm_byr()" step="500" type="number" min="0" max="999999999999999" placeholder="Rp." name="t_bayar" value="0" class="form-control" required>
                </div>
                <div class="col">
                  <input id="b_byr" readonly type="number" min="0" max="999999999999999" placeholder="Rp." name="b_bayar" value="0" class="form-control" required>
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