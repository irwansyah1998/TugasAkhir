<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Daftar Akun</h1>
            <a href="<?php echo base_url('pengguna/admin/setting/akun/tambah');?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-right fa-sm text-white-50"></i> Tambah Pengguna <i class="fas fa-arrow-left fa-sm text-white-50"></i></a>
          </div>
          <?php if(isset($akun)){ ?>
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
              <h6 class="m-0 font-weight-bold text-primary text-center">Daftar Pengguna / User</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="dataTable" class="table table-bordered dataTable" role="grid" aria-describedby="dataTable_info" style="width:100%" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Hak Akses</th>
                      <th>Aktif</th>
                      <th>Fungsi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No.</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Hak Akses</th>
                      <th>Aktif</th>
                      <th>Fungsi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php if ($tabel != false) {
                      $no=0;
                      foreach ($tabel as $tb) {
                      $no++; ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $tb->username;?></td>
                      <td><?php echo $tb->email;?></td>
                      <td>
                        <form action="<?php echo base_url('pengguna/admin/setting/akun/edit');?>" method="POST">
                          <input type="hidden" name="id" value="<?php echo $tb->id;?>">
                          <input type="hidden" name="username" value="<?php echo $tb->username;?>">
                          <input type="hidden" name="email" value="<?php echo $tb->email;?>">
                          <select name="jns_usr" class="form-control" <?php if ($tb->email==$this->session->userdata('email') && $tb->username == $this->session->userdata('nama')){echo "disabled";} ?>>
                            <option value="Admin"<?php if($tb->hak_akses=='Admin'){echo "selected";} ?>>Admin</option>
                            <option value="Manager"<?php if($tb->hak_akses=='Manager'){echo "selected";} ?>>Manager</option>
                            <option value="Staff"<?php if($tb->hak_akses=='Staff'){echo "selected";} ?>>Staff</option>
                            <option value="Pengguna"<?php if($tb->hak_akses=='Pengguna'){echo "selected";} ?>>Pengguna</option>
                            <input type="submit" name="change_hak" value="Ubah" class="btn btn-primary btn-user btn-block" <?php if ($tb->email==$this->session->userdata('email') && $tb->username == $this->session->userdata('nama')){echo "disabled";} ?>>
                          </select>
                        </form>
                      </td>
                      <td>
                        <form action="<?php echo base_url('pengguna/admin/setting/akun/edit');?>" method="POST">
                          <input type="hidden" name="id" value="<?php echo $tb->id;?>">
                          <input type="hidden" name="username" value="<?php echo $tb->username;?>">
                          <input type="hidden" name="email" value="<?php echo $tb->email;?>">
                        <?php if ($tb->aktif == 'Y'){ ?>
                          <?php if ($tb->email == $this->session->userdata('email') && $tb->username == $this->session->userdata('nama')){?>
                          <input class="btn btn-primary btn-danger btn-block" type="submit" name="aktif" value="Non-aktifkan" disabled>
                          <?php }else{ ?>
                          <input class="btn btn-primary btn-danger btn-block" type="submit" name="aktif" value="Non-aktifkan">
                          <?php } ?>
                        <?php }elseif($tb->aktif == 'T'){ ?>
                          <input class="btn btn-success btn-user btn-block" type="submit" name="aktif" value="Aktifkan">
                        <?php } ?>
                        </form>
                      </td>
                      <td>
                        <form action="<?php echo base_url('pengguna/admin/setting/akun/edit');?>" method="POST">
                          <input type="hidden" name="id" value="<?php echo $tb->id; ?>">
                          <input type="hidden" name="username" value="<?php echo $tb->username; ?>">
                          <input type="hidden" name="email" value="<?php echo $tb->email;?>">
                          <input class="btn btn-primary btn-user btn-block" type="submit" name="edit" value="Edit">
                          <?php if ($tb->email == $this->session->userdata('email') && $tb->username == $this->session->userdata('nama')) { ?>
                          <input class="btn btn-primary btn-danger btn-block" type="submit" name="delete" value="Hapus" disabled>
                          <?php }else{ ?>
                          <input class="btn btn-primary btn-danger btn-block" type="submit" name="delete" value="Hapus">
                          <?php } ?>
                        </form>
                      </td>
                    </tr>
                      <?php } ?>
                    <?php }else{?>
                    <tr>
                      <td>(no data)</td>
                      <td>(no data)</td>
                      <td>(no data)</td>
                      <td>(no data)</td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->