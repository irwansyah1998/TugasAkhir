<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('/pengguna/admin');?>">
        <div class="sidebar-brand-icon">
          <i class="fas">
            <img style="height: 40px; width: 45px;" src="<?php echo base_url('/asset/gambar/LOGO.png');?>">
          </i>
        </div>
        <div class="sidebar-brand-text mx-3">EXSAS <sup>Manager</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <?php if ($halaman == "statistik") {?>
      <li class="nav-item active">
      <?php }else{ ?>
      <li class="nav-item">
      <?php } ?>
        <a class="nav-link" href="<?php echo base_url('/pengguna/admin/statistik');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Statistik</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Tabel
      </div>

      <!-- Nav Item - Tables -->
      <?php if ($halaman == "tabel_pesanan") { ?>
      <li class="nav-item active">
      <?php }else{?>
      <li class="nav-item">
      <?php } ?>
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
          <i class="fas fa-fw fa-table"></i>
          <span>Tabel Pesanan</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar" style="">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tabel Pesanan</h6>
            <a class="collapse-item" href="<?php echo base_url('pengguna/manager/tabel/selesai/pesanan');?>">Pesanan Selesai</a>
          </div>
        </div>
      </li>

      <?php if ($halaman == "tabel_bahan") { ?>
      <li class="nav-item active">
      <?php }else{?>
      <li class="nav-item">
      <?php } ?>
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2" aria-expanded="false" aria-controls="collapsePages">
          <i class="fas fa-fw fa-table"></i>
          <span>Tabel Bahan</span>
        </a>
        <div id="collapsePages2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar" style="">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Bahan</h6>
            <a class="collapse-item" href="<?php echo base_url('pengguna/manager/tabel/bahan/tabel');?>">Tabel Bahan</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Produksi
      </div>

      <!-- Nav Item - Tables -->

      <?php if ($halaman == "produk") { ?>
      <li class="nav-item active">
      <?php }else{?>
      <li class="nav-item">
      <?php } ?>
        <a class="nav-link" href="<?php echo base_url('/pengguna/manager/produksi/produk');?>">
          <i class="fas fa-fw fa-folder"></i>
          <span>Produk</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Heading -->
      <div class="sidebar-heading">
        Pengaturan
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <?php if($halaman== "pengaturan_akun"){?>
      <li class="nav-item active">
      <?php }else{ ?>
      <li class="nav-item">
      <?php } ?>
        <a class="nav-link" href="<?php echo base_url('/pengguna/manager/setting/akun');?>">
          <i class="fas fa-fw fa-cog"></i>
          <span>Daftar Akun</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    