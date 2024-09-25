<?php

/**
* 
*/
class user_manager extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('m_manager');
		$this->load->helper('url');
		$this->load->library('Pdf');
		if($this->session->userdata('status') == "Pengguna"){
				redirect(base_url("pengguna/user"));
		}elseif ($this->session->userdata('status') == "Admin") {
				redirect(base_url("pengguna/admin"));
		}
	}

	function index(){
		$topbar['username'] = $this->session->userdata('nama');
		$sidebar['halaman'] = "statistik";
		$main_['content'] = false;
		// data template di asset/startbootstrapsbadmin2master
		$this->load->view('user/manager/head-manager');
		$this->load->view('user/manager/sidebar-manager',$sidebar);
		$this->load->view('user/manager/topbar-manager',$topbar);
		$this->load->view('user/manager/main-manager');
		$this->load->view('user/manager/footer-manager');
		$this->load->view('user/manager/bootstrap-manager');
	}

// tabel pesanan sudah selesai

	function psn_selesai(){
		$topbar['username'] = $this->session->userdata('nama');
		$main_['content'] = "table";
		$sidebar['halaman'] = "tabel_pesanan";
		$data['tabel'] = $this->m_manager->tb_pesanan_ambil_selesai();
		$this->load->view('user/manager/head-manager',$main_);
		$this->load->view('user/manager/sidebar-manager',$sidebar);
		$this->load->view('user/manager/topbar-manager',$topbar);
		$this->load->view('user/manager/tb_pesanan_selesai',$data);
		$this->load->view('user/manager/footer-manager');
		$this->load->view('user/manager/bootstrap-manager',$main_);
	}

	function pesanan_export(){
		if (isset($_GET['download'])) {
			if ($_GET['download'] == 'Download') {
				$where = array('kode_pesanan' => $_GET['kode'] );
				$data['laporan']=$this->m_manager->tb_pesanan_byid($where);
				$this->load->view('user/export/pesanan_selesai_laporan',$data);
			}
		}else{
			header("Location: ".base_url('pengguna/manager/tabel/selesai/pesanan/'));
		}
	}

	// 

	function tb_bahan_tabel(){
		$topbar['username'] = $this->session->userdata('nama');
		$main_['content'] = "table";
		$sidebar['halaman'] = "tabel_bahan";
		$data['tabel'] = $this->m_manager->tb_bahan_ambil();
		$this->load->view('user/manager/head-manager',$main_);
		$this->load->view('user/manager/sidebar-manager',$sidebar);
		$this->load->view('user/manager/topbar-manager',$topbar);
		$this->load->view('user/manager/tb-tabel-bahan',$data);
		$this->load->view('user/manager/footer-manager');
		$this->load->view('user/manager/bootstrap-manager',$main_);
	}

	function produksi_produk(){
		$topbar['username'] = $this->session->userdata('nama');
		$main_['content'] = "table";
		$sidebar['halaman'] = "produk";
		$data['tabel'] = $this->m_manager->produksi_produk_ambil();
		$this->load->view('user/manager/head-manager',$main_);
		$this->load->view('user/manager/sidebar-manager',$sidebar);
		$this->load->view('user/manager/topbar-manager',$topbar);
		$this->load->view('user/manager/produksi-produk',$data);
		$this->load->view('user/manager/footer-manager');
		$this->load->view('user/manager/bootstrap-manager',$main_);
	}


	function pengaturan_akun(){
		$topbar['username'] = $this->session->userdata('nama');
		$main_['content'] = "table";
		$sidebar['halaman'] = "pengaturan_akun";
		$data['tabel'] = $this->m_manager->tb_pengguna_ambil();
		$this->load->view('user/manager/head-manager',$main_);
		$this->load->view('user/manager/sidebar-manager',$sidebar);
		$this->load->view('user/manager/topbar-manager',$topbar);
		$this->load->view('user/manager/pengaturan-akun',$data);
		$this->load->view('user/manager/footer-manager');
		$this->load->view('user/manager/bootstrap-manager',$main_);
	}

	function pengaturan_akun_add(){
		$topbar['username'] = $this->session->userdata('nama');
		$main_['content'] = "table";
		$main_['akun'] = "edit";
		$sidebar['halaman'] = "pengaturan_akun";
		$this->load->view('user/manager/head-manager',$main_);
		$this->load->view('user/manager/sidebar-manager',$sidebar);
		$this->load->view('user/manager/topbar-manager',$topbar);
		$this->load->view('user/manager/pengaturan-akun-insert');
		$this->load->view('user/manager/footer-manager');
		$this->load->view('user/manager/bootstrap-manager',$main_);
	}

	function pengaturan_akun_edit(){
		if (isset($_POST['aktif'])) {
			if ($_POST['aktif']=='Non-aktifkan') {
				$where = array('id' => $_POST['id'],
								'username' => $_POST['username'],
								'email' => $_POST['email']
							 );
				$this->m_manager->tb_pengguna_nonaktifkan($where);
				header("Location: ".base_url('pengguna/manager/setting/akun'));
			}elseif ($_POST['aktif']=='Aktifkan') {
				$where = array('id' => $_POST['id'],
								'username' => $_POST['username'],
								'email' => $_POST['email']
							 );
				$this->m_manager->tb_pengguna_aktifkan($where);
				header("Location: ".base_url('pengguna/manager/setting/akun'));
			}
		}elseif (isset($_POST['delete'])) {
			if ($_POST['delete']=='Hapus') {
				$topbar['username'] = $this->session->userdata('nama');
				$main_['content'] = "table";
				$sidebar['halaman'] = "pengaturan_akun";
				$data['id'] = $_POST['id'];
				$data['username'] = $_POST['username'];
				$data['email'] = $_POST['email'];
				$this->load->view('user/manager/head-manager',$main_);
				$this->load->view('user/manager/sidebar-manager',$sidebar);
				$this->load->view('user/manager/topbar-manager',$topbar);
				$this->load->view('user/manager/pengaturan-akun-delete',$data);
				$this->load->view('user/manager/footer-manager');
				$this->load->view('user/manager/bootstrap-manager',$main_);
			}elseif ($_POST['delete']=='Ya, Saya Yakin') {
				$where = array('id' => $_POST['id'],
								'username' => $_POST['username'],
								'email' => $_POST['email']
								);
				$this->m_admin->tb_pengguna_delete($where);
				header("Location: ".base_url('pengguna/manager/setting/akun'));
			}
		}elseif (isset($_POST['edit'])) {
			if ($_POST['edit']=='Edit') {
				if ($_POST['username']==$this->session->userdata('nama')) {
					header("Location: ".base_url('pengguna/manager/setting/akun/profil'));
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
					$this->load->view('user/manager/head-manager',$main_);
					$this->load->view('user/manager/sidebar-manager',$sidebar);
					$this->load->view('user/manager/topbar-manager',$topbar);
					$this->load->view('user/manager/pengaturan-akun-update',$data);
					$this->load->view('user/manager/footer-manager');
					$this->load->view('user/manager/bootstrap-manager',$main_);
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
					header("Location: ".base_url('pengguna/manager/setting/akun'));
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
					$this->load->view('user/manager/head-manager',$main_);
					$this->load->view('user/manager/sidebar-manager',$sidebar);
					$this->load->view('user/manager/topbar-manager',$topbar);
					$this->load->view('user/manager/pengaturan-akun-update',$data);
					$this->load->view('user/manager/footer-manager');
					$this->load->view('user/manager/bootstrap-manager',$main_);
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
					$this->load->view('user/manager/head-manager',$main_);
					$this->load->view('user/manager/sidebar-manager',$sidebar);
					$this->load->view('user/manager/topbar-manager',$topbar);
					$this->load->view('user/manager/pengaturan-akun-insert',$data);
					$this->load->view('user/manager/footer-manager');
					$this->load->view('user/manager/bootstrap-manager',$main_);
				}else{
					$data_masuk = array('username' => $_POST['username'],
										'email' => $_POST['email'],
										'password' => MD5($_POST['pass2']),
										'hak_akses' => $_POST['jns_usr'],
										'aktif' => 'T'
									);
					$this->m_admin->tb_pengguna_insert($data_masuk);
					header("Location: ".base_url('pengguna/manager/setting/akun'));
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
				header("Location: ".base_url('pengguna/manager/setting/akun'));
			}
		}else{
			header("Location: ".base_url('pengguna/manager/setting/akun/profil'));
		}
	}

	function pengaturan_profil_akun(){
		$topbar['username'] = $this->session->userdata('nama');
		$main_['content'] = false;
		$sidebar['halaman'] = "pengaturan_akun";
		$data['pass'] = 'not_match';
		$this->load->view('user/manager/head-manager',$main_);
		$this->load->view('user/manager/sidebar-manager',$sidebar);
		$this->load->view('user/manager/topbar-manager',$topbar);
		$this->load->view('user/manager/pengaturan-akun-profil');
		$this->load->view('user/manager/footer-manager');
		$this->load->view('user/manager/bootstrap-manager',$main_);
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
				$this->load->view('user/manager/head-manager',$main_);
				$this->load->view('user/manager/sidebar-manager',$sidebar);
				$this->load->view('user/manager/topbar-manager',$topbar);
				$this->load->view('user/manager/pengaturan-akun-profil-email',$data);
				$this->load->view('user/manager/footer-manager');
				$this->load->view('user/manager/bootstrap-manager',$main_);
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
					$this->load->view('user/manager/head-manager',$main_);
					$this->load->view('user/manager/sidebar-manager',$sidebar);
					$this->load->view('user/manager/topbar-manager',$topbar);
					$this->load->view('user/manager/pengaturan-akun-profil-email',$data);
					$this->load->view('user/manager/footer-manager');
					$this->load->view('user/manager/bootstrap-manager',$main_);
				}
			}
		}
	}

	function pengaturan_profil_akun_ambil_dataPass(){
		
	}
}