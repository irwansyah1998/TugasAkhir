<?php
  if (isset($tabel)) {
    if ($tabel != false) {
      foreach ($tabel as $tb) {
        $id = $tb->id;
        $username = $tb->username;
        $email = $tb->email;
        $jns_usr = $tb->hak_akses;
      }
    }
  }
?>
<div class="container-fluid">
<!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Edit Pengguna / User</h1>
          <p class="mb-4"></p>
          <?php if(isset($pass)){ ?>
          <div class="row">
                  <div class="col-12">
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          <strong>Password Tidak Sama !!!</strong>
          
                          <ol>
                              <li>Pastikan Password Sama</li>
                              <li>Gunakan Karakter Simbol seperti @,#,! Untuk Memperkuat Password</li>
                              <li>Gunakan Password Dengan Panjang 6 Karakter Untuk Memperkuat Password</li>
                          </ol> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  </div>
          </div>
          <?php } ?>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary text-center">Edit Password Pengguna / User</h6>
            </div>
            <div class="card-body">
              <form style="width: 75%; margin: auto;" action="<?php echo base_url('pengguna/admin/setting/akun/edit');?>" method="POST">
                <?php if (isset($tabel)){
                  if ($tabel != false) { ?>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <?php }
                } ?>
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
                  <input type="text" name="username" value="<?php echo $username; ?>" class="form-control" readonly>
                </div>
                <div class="col">
                  <input type="text" name="email" value="<?php echo $email; ?>" class="form-control" readonly>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Password Baru :</h6>
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
                  <h6 class="m-0 font-weight-bold">Masukkan Ulang Password Baru :</h6>
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
                  <input type="submit" id="btn" name="update" value="Simpan" class="btn btn-primary btn-user btn-block" disabled>
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