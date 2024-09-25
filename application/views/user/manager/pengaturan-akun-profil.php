<div class="container-fluid">
<!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Profil</h1>
          <p class="mb-4"></p>
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary text-center">Profil</h6>
            </div>
            <div class="card-body">
              <form style="width: 75%; margin: auto;" action="<?php echo base_url('pengguna/admin/setting/akun/profil/edit');?>" method="POST">
              <div class="row">
                <div class="col font-weight-bold text-center">
                  <img src="<?php echo base_url('/asset/gambar/user.png');?>" style="width: 200px; height: 200px; margin: auto;">
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Jenis User </h6>
                </div>
                <div class="col">
                  <h6 class="m-0 font-weight-bold">:</h6>
                </div>
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Admin</h6>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Username</h6>
                </div>
                <div class="col">
                  <h6 class="m-0 font-weight-bold">:</h6>
                </div>
                <div class="col">
                  <h6 class="m-0 font-weight-bold"><?php echo $this->session->userdata('nama'); ?></h6>
                  <input type="hidden" name="usrname" value="<?php echo $this->session->userdata('nama'); ?>">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold">Email</h6>
                </div>
                <div class="col">
                  <h6 class="m-0 font-weight-bold">:</h6>
                </div>
                <div class="col">
                  <h6 class="m-0 font-weight-bold"><?php echo $this->session->userdata('email'); ?></h6>
                  <input type="hidden" name="email" value="<?php echo $this->session->userdata('email'); ?>">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <input type="submit" name="E_mail" value="Ubah Email Dan Username" class="btn btn-success btn-user btn-block">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <input type="submit" name="psswrd" value="Ubah Password" class="btn btn-primary btn-user btn-block">
                </div>
              </div>
              </form>
              
                    
              
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->