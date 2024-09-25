<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">User Akun - Hapus</h1>
          <p class="mb-4"></p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary text-center">Apakah Anda Yakin Ingin akun Dengan username :<br><u><?php echo $username; ?></u> ?</h6>
            </div>
            <div class="card-body">
              <form action="<?php echo base_url('pengguna/admin/setting/akun/edit');?>" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="hidden" name="username" value="<?php echo $username; ?>">
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <input class="btn btn-danger btn-user btn-block" type="submit" name="delete" value="Ya, Saya Yakin" >
              </form>
              <br>
              <a href="<?php echo base_url('pengguna/admin/setting/akun/');?>" class="btn btn-success btn-user btn-block">
                <span class="text">Tidak, Bawa saya kembali</span>
              </a>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->