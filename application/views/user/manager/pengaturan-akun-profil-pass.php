<?php
foreach ($tabel as $tb) {
  $id_user=$tb->id;
}
?>
<div class="container-fluid">
<!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Ubah Password</h1>
          <p class="mb-4"></p>
          <?php if(isset($exist)){
           if ($exist=='password') {
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
              <h6 class="m-0 font-weight-bold text-primary text-center">Ubah Password</h6>
            </div>
            <div class="card-body">
              <form style="width: 75%; margin: auto;" action="<?php echo base_url('pengguna/admin/setting/akun/profil/edit');?>" method="POST">
              <div class="row">
                <div class="col font-weight-bold text-center">
                  <img src="<?php echo base_url('/asset/gambar/user.png');?>" style="width: 200px; height: 200px; margin: auto;">
                  <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Password Baru :</h6>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input type="text" disabled class="form-control" name="jns_usr" value="<?php echo $this->session->userdata('status'); ?>">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Username :</h6>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input type="text" name="username" class="form-control" required value="<?php echo $this->session->userdata('nama'); ?>">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Email :</h6>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input type="text" name="username" class="form-control" required value="<?php echo $this->session->userdata('email'); ?>">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <input type="submit" name="update_usr_mail" value="Ubah" class="btn btn-success btn-user btn-block">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <a class="btn btn-primary btn-danger btn-block" href="<?php echo base_url('pengguna/admin/setting/akun/profil');?>">Kembali</a>
                </div>
              </div>
              </form>
              
                    
              
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->