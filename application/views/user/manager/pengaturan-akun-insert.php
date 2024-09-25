<div class="container-fluid">
<!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tambah Pengguna / User</h1>
          <p class="mb-4"></p>
          <?php if(isset($exist)){
           if ($exist=='username') {
            ?>
          <div class="row">
                  <div class="col-12">
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          <strong>Username Atau Email Sudah Digunakan!!!</strong>
          
                          <ol>
                              <li>Gunakan Username Lainnya</li>
                              <li>Gunakan Email Yang Belum Didaftrakan</li>
                          </ol> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  </div>
          </div>
          <?php }
        } ?>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary text-center">Tambah Pengguna / User</h6>
            </div>
            <div class="card-body">
              <form style="width: 75%; margin: auto;" action="<?php echo base_url('pengguna/admin/setting/akun/edit');?>" method="POST">
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Jenis User :</h6>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <select class="form-control" name="jns_usr" required>
                    <option value="">Pilih Jenis User</option>
                    <option value="Manager">Manager/Owner</option>
                    <option value="Staff">Staff</option>
                    <option value="Staff">Promosi</option>
                    <option value="Pengguna">Pengguna</option>
                  </select>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Username :</h6>
                </div>
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Email :</h6>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input type="text" name="username" value="" class="form-control" required>
                </div>
                <div class="col">
                  <input type="email" name="email" value="" class="form-control" required>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Password :</h6>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input type="password" id="pass1" onChange="cekPass();" name="pass1" value="" class="form-control" required>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Masukkan Ulang Password :</h6>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input type="password" id="pass2" onChange="cekPass();" name="pass2" value="" class="form-control" required>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <input type="submit" id="btn" name="insert" value="Simpan" class="btn btn-primary btn-user btn-block" disabled>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <a class="btn btn-primary btn-danger btn-block" href="<?php echo base_url('/pengguna/admin/setting/akun/');?>">Kembali</a>
                </div>
              </div>
              </form>
              
                    
              
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->