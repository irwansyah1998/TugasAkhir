<?php

/**
* 
*/
class user_pengguna extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('m_pengguna');
		if($this->session->userdata('status') == "Admin"){
				redirect(base_url("pengguna/user"));
		}elseif ($this->session->userdata('status') != "Pengguna") {
				redirect(base_url("form/login"));
		}
	}

	function index(){
		$topbar['username'] = $this->session->userdata('nama');
		$sidebar['halaman'] = "statistik";
		$main_['content'] = false;
		// data template di asset/startbootstrapsbadmin2master
		$this->load->view('user/admin/head-admin');
		$this->load->view('user/admin/sidebar-admin',$sidebar);
		$this->load->view('user/admin/topbar-admin',$topbar);
		$this->load->view('user/admin/main-admin');
		$this->load->view('user/admin/footer-admin');
		$this->load->view('user/admin/bootstrap-admin');
	}

	function tabel_pesanan(){
		$topbar['username'] = $this->session->userdata('nama');
		$main_['content'] = "table";
		$sidebar['halaman'] = "tabel_pesanan";
		$data['tabel'] = $this->m_admin->tb_pesanan_ambil();
		$this->load->view('user/admin/head-admin',$main_);
		$this->load->view('user/admin/sidebar-admin',$sidebar);
		$this->load->view('user/admin/topbar-admin',$topbar);
		$this->load->view('user/admin/tb_pesanan-admin',$data);
		$this->load->view('user/admin/footer-admin');
		$this->load->view('user/admin/bootstrap-admin',$main_);
	}

	function tambah_pesanan(){
		$topbar['username'] = $this->session->userdata('nama');
		$main_['content'] = "table";
		$main_['pesanan'] = 'insert';
		$sidebar['halaman'] = "tabel_pesanan";
		$data['tabel'] = $this->m_admin->tb_pesanan_ambil();
		$this->load->view('user/admin/head-admin',$main_);
		$this->load->view('user/admin/sidebar-admin',$sidebar);
		$this->load->view('user/admin/topbar-admin',$topbar);
		$this->load->view('user/admin/insert-tb_pesanan',$data);
		$this->load->view('user/admin/footer-admin');
		$this->load->view('user/admin/bootstrap-admin',$main_);
	}

	function edit_status_psn(){
		if (isset($_POST['submit'])) {
			if ($_POST['submit']=='Simpan') {
				$status = array('status' => $_POST['status']);
				$where = array('id' => $_POST['id_pes']);
				$this->m_admin->tb_pesanan_upstatus($where, $status);
				header("Location: ".base_url('pengguna/admin/tabel/belum/pesanan/'));
			}else if ($_POST['submit']=='Hapus') {
				$where = array('id' => $_POST['id_pes']);
				$this->m_admin->tb_pesanan_delstatus($where);
				header("Location: ".base_url('pengguna/admin/tabel/selesai/pesanan/'));
			}
		}
	}

	function edit_pesanan(){
		if (isset($_POST['submit'])) {
			if ($_POST['submit'] == 'Hapus') {
				$kode['pesanan'] = $this->input->post('kode');
				$topbar['username'] = $this->session->userdata('nama');
				$main_['content'] = "table";
				$sidebar['halaman'] = "tabel_pesanan";
				$this->load->view('user/admin/head-admin',$main_);
				$this->load->view('user/admin/sidebar-admin',$sidebar);
				$this->load->view('user/admin/topbar-admin',$topbar);
				$this->load->view('user/admin/delete-tb_pesanan',$kode);
				$this->load->view('user/admin/footer-admin');
				$this->load->view('user/admin/bootstrap-admin',$main_);
			}elseif ($_POST['submit'] == 'Edit') {
				$id = $this->input->post('id_pes');
				$where = array('id' => $id );

				// data Yang masuk
				$topbar['username'] = $this->session->userdata('nama');
				$main_['content'] = "table";
				$main_['pesanan'] = 'insert';
				$sidebar['halaman'] = "tabel_pesanan";
				$data['pesanan'] = $this->input->post('kode');
				$data['tabel'] = $this->m_admin->tb_pesanan_byid($where);
				$this->load->view('user/admin/head-admin',$main_);
				$this->load->view('user/admin/sidebar-admin',$sidebar);
				$this->load->view('user/admin/topbar-admin',$topbar);
				$this->load->view('user/admin/update-tb_pesanan',$data);
				$this->load->view('user/admin/footer-admin');
				$this->load->view('user/admin/bootstrap-admin',$main_);
			}
		}elseif (isset($_POST['hapus'])) {
			if ($_POST['hapus'] == 'Ya, Saya Yakin') {
				$kd_pesan = $this->input->post('kd_pesan');
				$where = array('kode_pesanan' => $kd_pesan);
				$this->m_admin->tb_pesanan_delete($where);
				header("Location: ".base_url('pengguna/admin/tabel/pesanan/'));
			}
		}else{
			header("Location: ".base_url('pengguna/admin/tabel/pesanan/'));
		}
	}
	function insup_pesanan(){
		if (isset($_POST['submit'])) {
			if ($_POST['submit'] == 'Simpan') {
				$tgl_en = $this->input->post('tanggal');
				$bln_en = $this->input->post('bulan');
				$thn = $this->input->post('tahun');
				$n_telp = $this->input->post('n_telp');
				if ($tgl_en<10) {
					$tgl = '0'.$tgl_en;
				}else{
					$tgl=$tgl_en;
				}
				if ($bln_en<10) {
					$bln = '0'.$bln_en;
				}else{
					$bln=$bln_en;
				}
				$kode_p = $tgl.$bln.$thn.$n_telp;
				$nma = $this->input->post('nama');
				$email = $this->input->post('email');
				$alamat= $this->input->post('alamat');
				$j_baju = $this->input->post('j_baju');
				$ju_3xl = $this->input->post('ju_3xl');
				$ju_2xl = $this->input->post('ju_2xl');
				$ju_xl =$this->input->post('ju_xl');
				$ju_l =$this->input->post('ju_l');
				$ju_m =$this->input->post('ju_m');
				$ju_s =$this->input->post('ju_s');
				$ju_lain =$this->input->post('ju_lain');
				$ket = $this->input->post('ket');
				$t_pesan =$this->input->post('t_pesan');
				$harga_pcs = $this->input->post('harga_pcs');
				$t_harga =$this->input->post('t_harga');
				$t_bayar =$this->input->post('t_bayar');
				$b_bayar =$this->input->post('b_bayar');
				if (!isset($_POST['status'])) {
					$status = 'Belum Selesai';
				}else{
					$status = $this->input->post('status');
				}
				$data_masuk = array('kode_pesanan' => $kode_p,
									'thn_pesan' => $thn,
									'bln_pesan' => $bln_en,
									'tgl_pesan' => $tgl_en,
									'nama_pemesan' => $nma,
									'no_telp' => $n_telp,
									'email_pemesan' => $email,
									'alamat_pemesan' => $alamat,
									'jenis_baju' => $j_baju,
									'jumlah_3xl' => $ju_3xl,
									'jumlah_2xl' => $ju_2xl,
									'jumlah_xl' => $ju_xl,
									'jumlah_l' => $ju_l,
									'jumlah_m' => $ju_m,
									'jumlah_s' => $ju_s,
									'jumlah_lainnya' => $ju_lain,
									'keterangan' => $ket,
									'total_pesanan' => $t_pesan,
									'harga' => $harga_pcs,
									'total_harga' => $t_harga,
									'telah_bayar' => $t_bayar,
									'belum_bayar' => $b_bayar,
									'status' => $status
								);
				echo "Tes";
				if (isset($_POST['id_pes'])) {
					$id_pes = $this->input->post('id_pes');
					$where = array('id' => $id_pes );
					$this->m_admin->tb_pesanan_update($where, $data_masuk);
					header("Location: ".base_url('pengguna/admin/tabel/pesanan/'));
				}else{
					$this->m_admin->tb_pesanan_insert($data_masuk);
					header("Location: ".base_url('pengguna/admin/tabel/pesanan/'));
				}
			}
		}
	}


// Tabel pesanan yang Belum selesai

	function psn_blm_selesai(){
		$topbar['username'] = $this->session->userdata('nama');
		$main_['content'] = "table";
		$sidebar['halaman'] = "tabel_pesanan";
		$data['tabel'] = $this->m_admin->tb_pesanan_ambil_blmselesai();
		$this->load->view('user/admin/head-admin',$main_);
		$this->load->view('user/admin/sidebar-admin',$sidebar);
		$this->load->view('user/admin/topbar-admin',$topbar);
		$this->load->view('user/admin/tb_pesanan_blmselesai',$data);
		$this->load->view('user/admin/footer-admin');
		$this->load->view('user/admin/bootstrap-admin',$main_);
	}

// tabel pesanan sudah selesai

	function psn_selesai(){
		$topbar['username'] = $this->session->userdata('nama');
		$main_['content'] = "table";
		$sidebar['halaman'] = "tabel_pesanan";
		$data['tabel'] = $this->m_admin->tb_pesanan_ambil_selesai();
		$this->load->view('user/admin/head-admin',$main_);
		$this->load->view('user/admin/sidebar-admin',$sidebar);
		$this->load->view('user/admin/topbar-admin',$topbar);
		$this->load->view('user/admin/tb_pesanan_selesai',$data);
		$this->load->view('user/admin/footer-admin');
		$this->load->view('user/admin/bootstrap-admin',$main_);
	}

	function pesanan_export(){
		if (isset($_GET['download'])) {
			if ($_GET['download'] == 'Download') {
				$where = array('kode_pesanan' => $_GET['kode'] );
				$data['laporan']=$this->m_admin->tb_pesanan_byid($where);
				$this->load->view('user/export/pesanan_selesai_laporan',$data);
			}
		}else{
			header("Location: ".base_url('pengguna/admin/tabel/selesai/pesanan/'));
		}
	}


	// Tabel Harga Bahan Kaos
	function tb_bahan_nama(){
		$topbar['username'] = $this->session->userdata('nama');
		$main_['content'] = "table";
		$sidebar['halaman'] = "tabel_bahan";
		$data['tabel'] = $this->m_admin->tb_bahan_nama_ambil();
		$this->load->view('user/admin/head-admin',$main_);
		$this->load->view('user/admin/sidebar-admin',$sidebar);
		$this->load->view('user/admin/topbar-admin',$topbar);
		$this->load->view('user/admin/tb-bahan-nama',$data);
		$this->load->view('user/admin/footer-admin');
		$this->load->view('user/admin/bootstrap-admin',$main_);
	}

	function tb_bahan_nama_add(){
		$topbar['username'] = $this->session->userdata('nama');
		$main_['content'] = "table";
		$sidebar['halaman'] = "tabel_bahan";
		$this->load->view('user/admin/head-admin',$main_);
		$this->load->view('user/admin/sidebar-admin',$sidebar);
		$this->load->view('user/admin/topbar-admin',$topbar);
		$this->load->view('user/admin/tb-bahan-nama-insert');
		$this->load->view('user/admin/footer-admin');
		$this->load->view('user/admin/bootstrap-admin',$main_);
	}

	function tb_bahan_nama_edit(){
		if (isset($_POST['edit'])) {
			if ($_POST['edit'] == 'Edit') {
				$where = array('id' => $_POST['id'] );
				$topbar['username'] = $this->session->userdata('nama');
				$main_['content'] = "table";
				$sidebar['halaman'] = "tabel_bahan";
				$data['tabel'] = $this->m_admin->tb_bahan_nama_ambilbyid($where);
				$this->load->view('user/admin/head-admin',$main_);
				$this->load->view('user/admin/sidebar-admin',$sidebar);
				$this->load->view('user/admin/topbar-admin',$topbar);
				$this->load->view('user/admin/tb-bahan-nama-update',$data);
				$this->load->view('user/admin/footer-admin');
				$this->load->view('user/admin/bootstrap-admin',$main_);
			}
		}elseif (isset($_POST['delete'])) {
			if ($_POST['delete'] == 'Hapus') {
				$where = array('id' => $_POST['id'] );
				$topbar['username'] = $this->session->userdata('nama');
				$main_['content'] = "table";
				$sidebar['halaman'] = "tabel_bahan";
				$data['kode'] = $_POST['kode'];
				$data['id'] = $_POST['id'];
				$this->load->view('user/admin/head-admin',$main_);
				$this->load->view('user/admin/sidebar-admin',$sidebar);
				$this->load->view('user/admin/topbar-admin',$topbar);
				$this->load->view('user/admin/tb-bahan-nama-delete',$data);
				$this->load->view('user/admin/footer-admin');
				$this->load->view('user/admin/bootstrap-admin',$main_);
			}
		}else{
			header("Location: ".base_url('pengguna/admin/tabel/bahan/nama/'));
		}
	}

	function tb_bahan_nama_insup(){
		if (isset($_POST['submit'])) {
			if ($_POST['submit'] == 'Simpan') {
				$data = array(	'nama_bhn' => $_POST['nm_bhn'],
								'kode' => $_POST['kd_bhn']);
				$this->m_admin->tb_bahan_nama_insert($data);
				header("Location: ".base_url('pengguna/admin/tabel/bahan/nama/'));
			}
		}elseif (isset($_POST['update'])) {
			if ($_POST['update'] == 'Simpan') {
				$where = array('id' => $_POST['id'] );
				$data = array(	'nama_bhn' => $_POST['nm_bhn'],
								'kode' => $_POST['kd_bhn']);
				$this->m_admin->tb_bahan_nama_update($where,$data);
				header("Location: ".base_url('pengguna/admin/tabel/bahan/nama/'));
			}
		}elseif (isset($_POST['delete'])) {
			if ($_POST['delete'] == 'Ya, Saya Yakin') {
				$where = array('id' => $_POST['id'] );
				$this->m_admin->tb_bahan_nama_delete($where);
				header("Location: ".base_url('pengguna/admin/tabel/bahan/nama/'));
			}
		}
	}

	function tb_bahan_jenis(){
		$topbar['username'] = $this->session->userdata('nama');
		$main_['content'] = "table";
		$sidebar['halaman'] = "tabel_bahan";
		$data['tabel'] = $this->m_admin->tb_bahan_jenis_ambil();
		$this->load->view('user/admin/head-admin',$main_);
		$this->load->view('user/admin/sidebar-admin',$sidebar);
		$this->load->view('user/admin/topbar-admin',$topbar);
		$this->load->view('user/admin/tb-bahan-jenis',$data);
		$this->load->view('user/admin/footer-admin');
		$this->load->view('user/admin/bootstrap-admin',$main_);
	}

	function tb_bahan_jenis_add(){
		$topbar['username'] = $this->session->userdata('nama');
		$main_['content'] = "table";
		$sidebar['halaman'] = "tabel_bahan";
		$this->load->view('user/admin/head-admin',$main_);
		$this->load->view('user/admin/sidebar-admin',$sidebar);
		$this->load->view('user/admin/topbar-admin',$topbar);
		$this->load->view('user/admin/tb-bahan-jenis-insert');
		$this->load->view('user/admin/footer-admin');
		$this->load->view('user/admin/bootstrap-admin',$main_);
	}

	function tb_bahan_jenis_edit(){
		if (isset($_POST['edit'])) {
			if ($_POST['edit'] == 'Edit') {
				$where = array('id' => $_POST['id'] );
				$topbar['username'] = $this->session->userdata('nama');
				$main_['content'] = "table";
				$sidebar['halaman'] = "tabel_bahan";
				$data['tabel'] = $this->m_admin->tb_bahan_jenis_ambilbyid($where);
				$this->load->view('user/admin/head-admin',$main_);
				$this->load->view('user/admin/sidebar-admin',$sidebar);
				$this->load->view('user/admin/topbar-admin',$topbar);
				$this->load->view('user/admin/tb-bahan-jenis-update',$data);
				$this->load->view('user/admin/footer-admin');
				$this->load->view('user/admin/bootstrap-admin',$main_);
			}
		}elseif (isset($_POST['delete'])) {
			if ($_POST['delete'] == 'Hapus') {
				$where = array('id' => $_POST['id'] );
				$topbar['username'] = $this->session->userdata('nama');
				$main_['content'] = "table";
				$sidebar['halaman'] = "tabel_bahan";
				$data['kode'] = $_POST['kode'];
				$data['id'] = $_POST['id'];
				$this->load->view('user/admin/head-admin',$main_);
				$this->load->view('user/admin/sidebar-admin',$sidebar);
				$this->load->view('user/admin/topbar-admin',$topbar);
				$this->load->view('user/admin/tb-bahan-jenis-delete',$data);
				$this->load->view('user/admin/footer-admin');
				$this->load->view('user/admin/bootstrap-admin',$main_);
			}
		}else{
			header("Location: ".base_url('pengguna/admin/tabel/bahan/jenis/'));
		}
	}

	function tb_bahan_jenis_insup(){
		if (isset($_POST['submit'])) {
			if ($_POST['submit'] == 'Simpan') {
				$data = array(	'jenis_bhn' => $_POST['jns_bhn'],
								'kode' => $_POST['kd_bhn']);
				$this->m_admin->tb_bahan_jenis_insert($data);
				header("Location: ".base_url('pengguna/admin/tabel/bahan/jenis/'));
			}
		}elseif (isset($_POST['update'])) {
			if ($_POST['update'] == 'Simpan') {
				$where = array('id' => $_POST['id'] );
				$data = array(	'jenis_bhn' => $_POST['jns_bhn'],
								'kode' => $_POST['kd_bhn']);
				$this->m_admin->tb_bahan_jenis_update($where,$data);
				header("Location: ".base_url('pengguna/admin/tabel/bahan/jenis/'));
			}
		}elseif (isset($_POST['delete'])) {
			if ($_POST['delete'] == 'Ya, Saya Yakin') {
				$where = array('id' => $_POST['id'] );
				$this->m_admin->tb_bahan_jenis_delete($where);
				header("Location: ".base_url('pengguna/admin/tabel/bahan/jenis/'));
			}
		}
	}

	// 

	function tb_bahan_warna(){
		$topbar['username'] = $this->session->userdata('nama');
		$main_['content'] = "table";
		$sidebar['halaman'] = "tabel_bahan";
		$data['tabel'] = $this->m_admin->tb_bahan_warna_ambil();
		$this->load->view('user/admin/head-admin',$main_);
		$this->load->view('user/admin/sidebar-admin',$sidebar);
		$this->load->view('user/admin/topbar-admin',$topbar);
		$this->load->view('user/admin/tb-bahan-warna',$data);
		$this->load->view('user/admin/footer-admin');
		$this->load->view('user/admin/bootstrap-admin',$main_);
	}

	function tb_bahan_warna_add(){
		$topbar['username'] = $this->session->userdata('nama');
		$main_['content'] = "table";
		$sidebar['halaman'] = "tabel_bahan";
		$this->load->view('user/admin/head-admin',$main_);
		$this->load->view('user/admin/sidebar-admin',$sidebar);
		$this->load->view('user/admin/topbar-admin',$topbar);
		$this->load->view('user/admin/tb-bahan-warna-insert');
		$this->load->view('user/admin/footer-admin');
		$this->load->view('user/admin/bootstrap-admin',$main_);
	}

	function tb_bahan_warna_edit(){
		if (isset($_POST['edit'])) {
			if ($_POST['edit'] == 'Edit') {
				$where = array('id' => $_POST['id'] );
				$topbar['username'] = $this->session->userdata('nama');
				$main_['content'] = "table";
				$sidebar['halaman'] = "tabel_bahan";
				$data['tabel'] = $this->m_admin->tb_bahan_warna_ambilbyid($where);
				$this->load->view('user/admin/head-admin',$main_);
				$this->load->view('user/admin/sidebar-admin',$sidebar);
				$this->load->view('user/admin/topbar-admin',$topbar);
				$this->load->view('user/admin/tb-bahan-warna-update',$data);
				$this->load->view('user/admin/footer-admin');
				$this->load->view('user/admin/bootstrap-admin',$main_);
			}
		}elseif (isset($_POST['delete'])) {
			if ($_POST['delete'] == 'Hapus') {
				$where = array('id' => $_POST['id'] );
				$topbar['username'] = $this->session->userdata('nama');
				$main_['content'] = "table";
				$sidebar['halaman'] = "tabel_bahan";
				$data['kode'] = $_POST['kode'];
				$data['id'] = $_POST['id'];
				$this->load->view('user/admin/head-admin',$main_);
				$this->load->view('user/admin/sidebar-admin',$sidebar);
				$this->load->view('user/admin/topbar-admin',$topbar);
				$this->load->view('user/admin/tb-bahan-warna-delete',$data);
				$this->load->view('user/admin/footer-admin');
				$this->load->view('user/admin/bootstrap-admin',$main_);
			}
		}else{
			header("Location: ".base_url('pengguna/admin/tabel/bahan/jenis/'));
		}
	}

	function tb_bahan_warna_insup(){
		if (isset($_POST['submit'])) {
			if ($_POST['submit'] == 'Simpan') {
				$data = array(	'warna_bhn' => $_POST['wrn_bhn'],
								'kode' => $_POST['kd_bhn']);
				$this->m_admin->tb_bahan_warna_insert($data);
				header("Location: ".base_url('pengguna/admin/tabel/bahan/warna/'));
			}
		}elseif (isset($_POST['update'])) {
			if ($_POST['update'] == 'Simpan') {
				$where = array('id' => $_POST['id'] );
				$data = array(	'warna_bhn' => $_POST['wrn_bhn'],
								'kode' => $_POST['kd_bhn']);
				$this->m_admin->tb_bahan_warna_update($where,$data);
				header("Location: ".base_url('pengguna/admin/tabel/bahan/warna/'));
			}
		}elseif (isset($_POST['delete'])) {
			if ($_POST['delete'] == 'Ya, Saya Yakin') {
				$where = array('id' => $_POST['id'] );
				$this->m_admin->tb_bahan_warna_delete($where);
				header("Location: ".base_url('pengguna/admin/tabel/bahan/warna/'));
			}
		}
	}


	// 

	function tb_bahan_tabel(){
		$topbar['username'] = $this->session->userdata('nama');
		$main_['content'] = "table";
		$sidebar['halaman'] = "tabel_bahan";
		$data['tabel'] = $this->m_admin->tb_bahan_ambil();
		$this->load->view('user/admin/head-admin',$main_);
		$this->load->view('user/admin/sidebar-admin',$sidebar);
		$this->load->view('user/admin/topbar-admin',$topbar);
		$this->load->view('user/admin/tb-tabel-bahan',$data);
		$this->load->view('user/admin/footer-admin');
		$this->load->view('user/admin/bootstrap-admin',$main_);
	}

	function tb_bahan_tabel_add(){
		$topbar['username'] = $this->session->userdata('nama');
		$main_['content'] = "table";
		$sidebar['halaman'] = "tabel_bahan";
		$data['tabel_nama'] = $this->m_admin->tb_bahan_nama_ambil();
		$data['tabel_jenis'] = $this->m_admin->tb_bahan_jenis_ambil();
		$data['tabel_warna'] = $this->m_admin->tb_bahan_warna_ambil();
		$this->load->view('user/admin/head-admin',$main_);
		$this->load->view('user/admin/sidebar-admin',$sidebar);
		$this->load->view('user/admin/topbar-admin',$topbar);
		$this->load->view('user/admin/tb-tabel-bahan-insert',$data);
		$this->load->view('user/admin/footer-admin');
		$this->load->view('user/admin/bootstrap-admin',$main_);
	}

	function tb_bahan_tabel_edit(){
		if (isset($_POST['edit'])) {
			if ($_POST['edit'] == 'Edit') {
				$where = array('id' => $_POST['id'] );
				$topbar['username'] = $this->session->userdata('nama');
				$main_['content'] = "table";
				$sidebar['halaman'] = "tabel_bahan";
				$data['tabel_nama'] = $this->m_admin->tb_bahan_nama_ambil();
				$data['tabel_jenis'] = $this->m_admin->tb_bahan_jenis_ambil();
				$data['tabel_warna'] = $this->m_admin->tb_bahan_warna_ambil();
				$data['tabel'] = $this->m_admin->tb_bahan_ambilbyid($where);
				$this->load->view('user/admin/head-admin',$main_);
				$this->load->view('user/admin/sidebar-admin',$sidebar);
				$this->load->view('user/admin/topbar-admin',$topbar);
				$this->load->view('user/admin/tb-tabel-bahan-update',$data);
				$this->load->view('user/admin/footer-admin');
				$this->load->view('user/admin/bootstrap-admin',$main_);
			}
		}elseif (isset($_POST['delete'])) {
			if ($_POST['delete'] == 'Hapus') {
				$where = array('id' => $_POST['id'] );
				$topbar['username'] = $this->session->userdata('nama');
				$main_['content'] = "table";
				$sidebar['halaman'] = "tabel_bahan";
				$data['kode'] = $_POST['kode'];
				$data['id'] = $_POST['id'];
				$this->load->view('user/admin/head-admin',$main_);
				$this->load->view('user/admin/sidebar-admin',$sidebar);
				$this->load->view('user/admin/topbar-admin',$topbar);
				$this->load->view('user/admin/tb-tabel-bahan-delete',$data);
				$this->load->view('user/admin/footer-admin');
				$this->load->view('user/admin/bootstrap-admin',$main_);
			}
		}else{
			header("Location: ".base_url('pengguna/admin/tabel/bahan/jenis/'));
		}
	}

	function tb_bahan_tabel_insup(){
		if (isset($_POST['submit'])) {
			if ($_POST['submit'] == 'Simpan') {
				$dataNM_BHN = $this->m_admin->tb_bahan_ambilnama($_POST['nm_bhn']);
				$dataJNS_BHN = $this->m_admin->tb_bahan_ambiljenis($_POST['jns_bhn']);
				$dataWRN_BHN = $this->m_admin->tb_bahan_ambilwarna($_POST['wrn_bhn']);
				$data = array(	'kode_bhn' => $_POST['nm_bhn'].'-'.$_POST['jns_bhn'].'-'.$_POST['wrn_bhn'],
								'nama_bhn' => $dataNM_BHN,
								'jenis_bhn' => $dataJNS_BHN,
								'warna_bhn' => $dataWRN_BHN,
								'harga_rol' => $_POST['hrg_rol'],
								'harga_meter' => $_POST['hrg_m'],
								'harga_kilo' => $_POST['hrg_kg'],
								'tgl_update' => $_POST['tgl'],
								'bln_update' => $_POST['bln'],
								'thn_update' => $_POST['thn']);
				$this->m_admin->tb_bahan_insert($data);
				header("Location: ".base_url('pengguna/admin/tabel/bahan/tabel/'));
			}
		}elseif (isset($_POST['update'])) {
			if ($_POST['update'] == 'Simpan') {
				$where = array('id' => $_POST['id'],
								'kode_bhn' => $_POST['kode_bhn']);
				$dataNM_BHN = $this->m_admin->tb_bahan_ambilnama($_POST['nm_bhn']);
				$dataJNS_BHN = $this->m_admin->tb_bahan_ambiljenis($_POST['jns_bhn']);
				$data = array(	'kode_bhn' => $_POST['nm_bhn'].'-'.$_POST['jns_bhn'].'-'.$_POST['wrn_bhn'],
								'nama_bhn' => $dataNM_BHN,
								'jenis_bhn' => $dataJNS_BHN,
								'harga_rol' => $_POST['hrg_rol'],
								'harga_meter' => $_POST['hrg_m'],
								'harga_kilo' => $_POST['hrg_kg'],
								'tgl_update' => $_POST['tgl'],
								'bln_update' => $_POST['bln'],
								'thn_update' => $_POST['thn']);
				$this->m_admin->tb_bahan_update($where, $data);
				header("Location: ".base_url('pengguna/admin/tabel/bahan/tabel/'));
			}
		}elseif (isset($_POST['delete'])) {
			if ($_POST['delete'] == 'Ya, Saya Yakin') {
				$where = array('id' => $_POST['id'] );
				$this->m_admin->tb_bahan_delete($where);
				header("Location: ".base_url('pengguna/admin/tabel/bahan/tabel/'));
			}
		}
	}

	function produksi_produk(){
		$topbar['username'] = $this->session->userdata('nama');
		$main_['content'] = "table";
		$sidebar['halaman'] = "produk";
		$data['tabel'] = $this->m_admin->produksi_produk_ambil();
		$this->load->view('user/admin/head-admin',$main_);
		$this->load->view('user/admin/sidebar-admin',$sidebar);
		$this->load->view('user/admin/topbar-admin',$topbar);
		$this->load->view('user/admin/produksi-produk',$data);
		$this->load->view('user/admin/footer-admin');
		$this->load->view('user/admin/bootstrap-admin',$main_);
	}

	function produksi_produk_insert(){
		$topbar['username'] = $this->session->userdata('nama');
		$main_['content'] = "table";
		$sidebar['halaman'] = "produk";
		$data['nm_bhn'] = $this->m_admin->tb_bahan_nama_ambil();
		$data['jns_bhn'] = $this->m_admin->tb_bahan_jenis_ambil();
		$data['wrn_bhn'] = $this->m_admin->tb_bahan_warna_ambil();
		$this->load->view('user/admin/head-admin',$main_);
		$this->load->view('user/admin/sidebar-admin',$sidebar);
		$this->load->view('user/admin/topbar-admin',$topbar);
		$this->load->view('user/admin/produksi-produk-insert',$data);
		$this->load->view('user/admin/footer-admin');
		$this->load->view('user/admin/bootstrap-admin',$main_);
	}

	function produksi_produk_insup(){
		if (isset($_POST['submit'])) {
			if ($_POST['submit'] == 'Simpan') {
				$config['upload_path']          = './file/data/gambar/produk/';
				$config['allowed_types']        = 'png|jpg|jpeg';
				$config['max_size']             = 2048;
				$config['overwrite']			= true;
				$config['file_name']			= 'gambar'.$_POST['kd_prdk'].time();
				$config['encrypt_name']			= true;
				$config['max_width']            = 1024;
				$config['max_height']           = 768;
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('gmbr_prdk')){
					$upload_data = $this->upload->data();
			        $data = array('kode'=>$_POST['kd_prdk'],
			        				'tipe_produk'=>$_POST['tp_prdk'],
			        				'nama_produk'=>$_POST['nm_prdk'],
			        				'keterangan'=>$_POST['ktrngn_prdk'],
			        				'harga_produk'=>$_POST['hrg_prdk'],
			        				'gambar_produk'=>$upload_data['file_name'],
			        				'source'=>'/file/data/gambar/produk/',
			        				'kode_bhn'=>$_POST['nm_bhn'].'-'.$_POST['jns_bhn'].'-'.$_POST['wrn_bhn']
			        			);
			        $this->m_admin->produksi_produk_insert($data);
			        header("Location: ".base_url('pengguna/admin/produksi/produk/'));
				}else{
					header("Location: ".base_url('pengguna/admin/produksi/produk/insert'));
				}
			}
		}elseif (isset($_POST['update'])) {
			if ($_POST['update']=='Simpan') {
				$where = array('id' => $_POST['id']);
				$data = array('kode'=>$_POST['kd_prdk'],
			        				'tipe_produk'=>$_POST['tp_prdk'],
			        				'nama_produk'=>$_POST['nm_prdk'],
			        				'keterangan'=>$_POST['ktrngn_prdk'],
			        				'harga_produk'=>$_POST['hrg_prdk'],
			        				'kode_bhn'=>$_POST['nm_bhn'].'-'.$_POST['jns_bhn'].'-'.$_POST['wrn_bhn']
			        			);
				$this->m_admin->produksi_produk_update($where,$data);
				header("Location: ".base_url('pengguna/admin/produksi/produk/'));
			}
		}elseif (isset($_POST['delete'])) {
			if ($_POST['delete']=='Ya, Saya Yakin') {
				$where = array('id' =>$_POST['id'],
								'kode' =>$_POST['kode']
							);
				$tabel = $this->m_admin->produksi_produk_ambilbyid($where);
				foreach ($tabel as $tb) {
					unlink('.'.$tb->source.$tb->gambar_produk);
				}
				$this->m_admin->produksi_produk_delete($where);
				header("Location: ".base_url('pengguna/admin/produksi/produk/'));
			}
		}elseif(isset($_POST['picture'])){
			if ($_POST['picture']=='Simpan') {
				$config['upload_path']          = './file/data/gambar/produk/';
				$config['allowed_types']        = 'png|jpg|jpeg';
				$config['max_size']             = 2048;
				$config['overwrite']			= true;
				$config['file_name']			= 'gambar'.$_POST['kode'].$_POST['time'];
				$config['encrypt_name']			= true;
				$config['max_width']            = 1024;
				$config['max_height']           = 768;
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('gmbr_prdk')) {
					unlink('.'.'/file/data/gambar/produk/'.$_POST['gmbr_prdk']);
					$where = array('id' => $_POST['id'], 'kode'=> $_POST['kode']);
					$upload_data = $this->upload->data();
					$data = array('gambar_produk' => $upload_data['file_name']);
					$this->m_admin->produksi_produk_update($where,$data);
					header("Location: ".base_url('pengguna/admin/produksi/produk/'));
				}else{
					redirect('pengguna/admin/produksi/produk/');
				}
			}
		}else{
			header("Location: ".base_url('pengguna/admin/produksi/produk/'));
		}
	}

	function produksi_produk_edit(){
		if (isset($_POST['edit'])) {
			if ($_POST['edit']=='Edit') {
				$where = array('id' =>$_POST['id'],
								'kode' =>$_POST['kd_prdk']
							);
				$data['tabel'] = $this->m_admin->produksi_produk_ambilbyid($where);
				$data['nm_bhn'] = $this->m_admin->tb_bahan_nama_ambil();
				$data['jns_bhn'] = $this->m_admin->tb_bahan_jenis_ambil();
				$data['wrn_bhn'] = $this->m_admin->tb_bahan_warna_ambil();
				$topbar['username'] = $this->session->userdata('nama');
				$main_['content'] = "table";
				$sidebar['halaman'] = "produk";
				$this->load->view('user/admin/head-admin',$main_);
				$this->load->view('user/admin/sidebar-admin',$sidebar);
				$this->load->view('user/admin/topbar-admin',$topbar);
				$this->load->view('user/admin/produksi-produk-update',$data);
				$this->load->view('user/admin/footer-admin');
				$this->load->view('user/admin/bootstrap-admin',$main_);
			}
		}elseif (isset($_POST['delete'])) {
			if ($_POST['delete']=='Hapus') {
				$topbar['username'] = $this->session->userdata('nama');
				$main_['content'] = "table";
				$sidebar['halaman'] = "produk";
				$data['kode'] = $_POST['kd_prdk'];
				$data['id'] = $_POST['id'];
				$this->load->view('user/admin/head-admin',$main_);
				$this->load->view('user/admin/sidebar-admin',$sidebar);
				$this->load->view('user/admin/topbar-admin',$topbar);
				$this->load->view('user/admin/produksi-produk-delete',$data);
				$this->load->view('user/admin/footer-admin');
				$this->load->view('user/admin/bootstrap-admin',$main_);
			}
		}elseif(isset($_POST['picture'])){
			if ($_POST['picture']=='Ubah') {
				$where = array('id' => $_POST['id'], 'kode'=>$_POST['kode']);
				$topbar['username'] = $this->session->userdata('nama');
				$main_['content'] = "table";
				$sidebar['halaman'] = "produk";
				$data['tabel'] = $this->m_admin->produksi_produk_ambilbyid($where);
				$this->load->view('user/admin/head-admin',$main_);
				$this->load->view('user/admin/sidebar-admin',$sidebar);
				$this->load->view('user/admin/topbar-admin',$topbar);
				$this->load->view('user/admin/produksi-produk-gambar',$data);
				$this->load->view('user/admin/footer-admin');
				$this->load->view('user/admin/bootstrap-admin',$main_);
			}
		}else{
			header("Location: ".base_url('pengguna/admin/produksi/produk/'));
		}
	}

	function pengaturan_akun(){
		$topbar['username'] = $this->session->userdata('nama');
		$main_['content'] = "table";
		$sidebar['halaman'] = "pengaturan_akun";
		$data['tabel'] = $this->m_admin->tb_pengguna_ambil();
		$this->load->view('user/admin/head-admin',$main_);
		$this->load->view('user/admin/sidebar-admin',$sidebar);
		$this->load->view('user/admin/topbar-admin',$topbar);
		$this->load->view('user/admin/pengaturan-akun',$data);
		$this->load->view('user/admin/footer-admin');
		$this->load->view('user/admin/bootstrap-admin',$main_);
	}

	function pengaturan_akun_add(){
		$topbar['username'] = $this->session->userdata('nama');
		$main_['content'] = "table";
		$main_['akun'] = "edit";
		$sidebar['halaman'] = "pengaturan_akun";
		$this->load->view('user/admin/head-admin',$main_);
		$this->load->view('user/admin/sidebar-admin',$sidebar);
		$this->load->view('user/admin/topbar-admin',$topbar);
		$this->load->view('user/admin/pengaturan-akun-insert');
		$this->load->view('user/admin/footer-admin');
		$this->load->view('user/admin/bootstrap-admin',$main_);
	}

	function pengaturan_akun_edit(){
		if (isset($_POST['aktif'])) {
			if ($_POST['aktif']=='Non-aktifkan') {
				$where = array('id' => $_POST['id'],
								'username' => $_POST['username'],
								'email' => $_POST['email']
							 );
				$this->m_admin->tb_pengguna_nonaktifkan($where);
				header("Location: ".base_url('pengguna/admin/setting/akun'));
			}elseif ($_POST['aktif']=='Aktifkan') {
				$where = array('id' => $_POST['id'],
								'username' => $_POST['username'],
								'email' => $_POST['email']
							 );
				$this->m_admin->tb_pengguna_aktifkan($where);
				header("Location: ".base_url('pengguna/admin/setting/akun'));
			}
		}elseif (isset($_POST['delete'])) {
			if ($_POST['delete']=='Hapus') {
				$topbar['username'] = $this->session->userdata('nama');
				$main_['content'] = "table";
				$sidebar['halaman'] = "pengaturan_akun";
				$data['id'] = $_POST['id'];
				$data['username'] = $_POST['username'];
				$data['email'] = $_POST['email'];
				$this->load->view('user/admin/head-admin',$main_);
				$this->load->view('user/admin/sidebar-admin',$sidebar);
				$this->load->view('user/admin/topbar-admin',$topbar);
				$this->load->view('user/admin/pengaturan-akun-delete',$data);
				$this->load->view('user/admin/footer-admin');
				$this->load->view('user/admin/bootstrap-admin',$main_);
			}elseif ($_POST['delete']=='Ya, Saya Yakin') {
				$where = array('id' => $_POST['id'],
								'username' => $_POST['username'],
								'email' => $_POST['email']
								);
				$this->m_admin->tb_pengguna_delete($where);
				header("Location: ".base_url('pengguna/admin/setting/akun'));
			}
		}elseif (isset($_POST['edit'])) {
			if ($_POST['edit']=='Edit') {
				if ($_POST['username']==$this->session->userdata('nama')) {
					header("Location: ".base_url('pengguna/admin/setting/akun/profil'));
				}else{
					$topbar['username'] = $this->session->userdata('nama');
					$main_['content'] = "table";
					$main_['akun'] = "edit";
					$sidebar['halaman'] = "pengaturan_akun";
					$where = array('id' => $_POST['id'],
									'username' => $_POST['username'],
									'email' => $_POST['email']
									);
					$data['tabel'] = $this->m_admin->tb_pengguna_ambil_byid($where);
					$this->load->view('user/admin/head-admin',$main_);
					$this->load->view('user/admin/sidebar-admin',$sidebar);
					$this->load->view('user/admin/topbar-admin',$topbar);
					$this->load->view('user/admin/pengaturan-akun-update',$data);
					$this->load->view('user/admin/footer-admin');
					$this->load->view('user/admin/bootstrap-admin',$main_);
				}
			}
		}elseif (isset($_POST['update'])) {
			if ($_POST['update']=='Simpan') {
				if ($_POST['pass1']==$_POST['pass2']) {
					$where = array('id' => $_POST['id'],
									'username' => $_POST['username'],
									'email' => $_POST['email']
									);
					$data = array('password' => md5($_POST['pass2']));
					$this->m_admin->tb_pengguna_update_pass($where,$data);
					header("Location: ".base_url('pengguna/admin/setting/akun'));
				}else{
					$topbar['username'] = $this->session->userdata('nama');
					$main_['content'] = "table";
					$main_['akun'] = "edit";
					$sidebar['halaman'] = "pengaturan_akun";
					$where = array('id' => $_POST['id'],
									'username' => $_POST['username'],
									'email' => $_POST['email']
									);
					$data['tabel'] = $this->m_admin->tb_pengguna_ambil_byid($where);
					$data['pass'] = 'not_match';
					$this->load->view('user/admin/head-admin',$main_);
					$this->load->view('user/admin/sidebar-admin',$sidebar);
					$this->load->view('user/admin/topbar-admin',$topbar);
					$this->load->view('user/admin/pengaturan-akun-update',$data);
					$this->load->view('user/admin/footer-admin');
					$this->load->view('user/admin/bootstrap-admin',$main_);
				}
			}
		}elseif(isset($_POST['insert'])){
			if ($_POST['insert']=='Simpan') {
				$data['username'] = $_POST['username'];
				$data['email'] = $_POST['email'];
				$where = array('username' => $_POST['username']);
				$or_where = array('email'=>$_POST['email']);
				$cek_usr = $this->m_admin->tb_pengguna_ambil_byid_or($where,$or_where);
				if ($cek_usr != false) {
					$topbar['username'] = $this->session->userdata('nama');
					$main_['content'] = false;
					$main_['akun'] = "edit";
					$sidebar['halaman'] = "pengaturan_akun";
					$data['exist'] = 'username';
					$this->load->view('user/admin/head-admin',$main_);
					$this->load->view('user/admin/sidebar-admin',$sidebar);
					$this->load->view('user/admin/topbar-admin',$topbar);
					$this->load->view('user/admin/pengaturan-akun-insert',$data);
					$this->load->view('user/admin/footer-admin');
					$this->load->view('user/admin/bootstrap-admin',$main_);
				}else{
					$data_masuk = array('username' => $_POST['username'],
										'email' => $_POST['email'],
										'password' => MD5($_POST['pass2']),
										'hak_akses' => $_POST['jns_usr'],
										'aktif' => 'T'
									);
					$this->m_admin->tb_pengguna_insert($data_masuk);
					header("Location: ".base_url('pengguna/admin/setting/akun'));
				}
			}
		}elseif(isset($_POST['change_hak'])){
			if ($_POST['change_hak']=='Ubah') {
				$where = array('id' => $_POST['id'],
								'username'=>$_POST['username'],
								'email'=>$_POST['email']
								);
				$data_masuk = array('hak_akses'=>$_POST['jns_usr']);
				$this->m_admin->tb_pengguna_update_pass($where,$data_masuk);
				header("Location: ".base_url('pengguna/admin/setting/akun'));
			}
		}else{
			header("Location: ".base_url('pengguna/admin/setting/akun/profil'));
		}
	}

	function pengaturan_profil_akun(){
		$topbar['username'] = $this->session->userdata('nama');
		$main_['content'] = false;
		$sidebar['halaman'] = "pengaturan_akun";
		$data['pass'] = 'not_match';
		$this->load->view('user/admin/head-admin',$main_);
		$this->load->view('user/admin/sidebar-admin',$sidebar);
		$this->load->view('user/admin/topbar-admin',$topbar);
		$this->load->view('user/admin/pengaturan-akun-profil');
		$this->load->view('user/admin/footer-admin');
		$this->load->view('user/admin/bootstrap-admin',$main_);
	}

	function pengaturan_profil_akun_edit(){
		if (isset($_POST['E_mail'])) {
			if ($_POST['E_mail']=='Ubah Email Dan Username') {
				$where = array('username' => $_POST['usrname'], 'email' => $_POST['email']);
				$data['tabel'] = $this->m_admin->tb_pengguna_ambil_byid($where);
				$topbar['username'] = $this->session->userdata('nama');
				$main_['content'] = false;
				$sidebar['halaman'] = "pengaturan_akun";
				$data['pass'] = 'not_match';
				$this->load->view('user/admin/head-admin',$main_);
				$this->load->view('user/admin/sidebar-admin',$sidebar);
				$this->load->view('user/admin/topbar-admin',$topbar);
				$this->load->view('user/admin/pengaturan-akun-profil-email',$data);
				$this->load->view('user/admin/footer-admin');
				$this->load->view('user/admin/bootstrap-admin',$main_);
			}
		}elseif (isset($_POST['update_usr_mail'])) {
			if ($_POST['update_usr_mail']=='Ubah') {
				$where = array('username' => $this->session->userdata('nama'),
								'email' => $this->session->userdata('email'),
								'id' => $_POST['id_user']
								);
				$data = array('username' => $_POST['username'],
								'email' => $_POST['email']
							);
				$kirim = $this->m_admin->tb_pengguna_update_username($where,$data);

				if ($kirim == false) {
					$where = array('username' => $_POST['username'], 'email' => $_POST['email']);
					$data['tabel'] = $this->m_admin->tb_pengguna_ambil_byid($where);
					$topbar['username'] = $this->session->userdata('nama');
					$main_['content'] = false;
					$sidebar['halaman'] = "pengaturan_akun";
					$data['exist'] = 'username';
					$this->load->view('user/admin/head-admin',$main_);
					$this->load->view('user/admin/sidebar-admin',$sidebar);
					$this->load->view('user/admin/topbar-admin',$topbar);
					$this->load->view('user/admin/pengaturan-akun-profil-email',$data);
					$this->load->view('user/admin/footer-admin');
					$this->load->view('user/admin/bootstrap-admin',$main_);
				}
			}
		}
	}

	function pengaturan_profil_akun_ambil_dataPass(){
		
	}
}