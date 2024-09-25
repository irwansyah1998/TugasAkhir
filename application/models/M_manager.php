<?php

class M_manager extends CI_Model{
    //fungsi check login
    function tb_pesanan_ambil(){
        $query = $this->db->get('tb_pesanan');
            if ($query->num_rows() == 0) {
                return false;
            } else {
                return $query->result();
            }
    }

    function tb_pesanan_ambil_asc_thn(){
        $this->db->order_by("thn_pesan", "asc");
        $query = $this->db->get('tb_pesanan');
            if ($query->num_rows() == 0) {
                return false;
            } else {
                return $query->result();
            }
    }
    function tb_pesanan_ambil_asc_bln(){
        $this->db->order_by("bln_pesan", "asc");
        $query = $this->db->get('tb_pesanan');
            if ($query->num_rows() == 0) {
                return false;
            } else {
                return $query->result();
            }
    }
    function tb_pesanan_ambil_asc_tgl(){
        $this->db->order_by("tgl_pesan", "asc");
        $query = $this->db->get('tb_pesanan');
            if ($query->num_rows() == 0) {
                return false;
            } else {
                return $query->result();
            }
    }

    function tb_pesanan_byid($where){
        $this->db->where($where);
        $query = $this->db->get('tb_pesanan');
            if ($query->num_rows() == 0) {
                return false;
            } else {
                return $query->result();
            }
    }

    function tb_pesanan_delete($where){
        $this->db->where($where);
        $this->db->delete('tb_pesanan');
    }

    function tb_pesanan_update($where,$data_masuk){
        $this->db->where($where);
        $this->db->update('tb_pesanan', $data_masuk);
    }

    function tb_pesanan_insert($data_masuk){
        $this->db->insert('tb_pesanan', $data_masuk);
    }

    function tb_pesanan_ambil_blmselesai(){
        $where = array('status' => 'Belum Selesai');
        $this->db->where($where);
        $query = $this->db->get('tb_pesanan');
            if ($query->num_rows() == 0) {
                return false;
            } else {
                return $query->result();
            }
    }

    function tb_pesanan_ambil_selesai(){
        $where = array('status' => 'Selesai');
        $this->db->where($where);
        $query = $this->db->get('tb_pesanan');
            if ($query->num_rows() == 0) {
                return false;
            } else {
                return $query->result();
            }
    }

    function tb_pesanan_upstatus($where, $status){
        $this->db->where($where);
        $this->db->update('tb_pesanan', $status);
    }

    function tb_pesanan_delstatus($where){
        $status = array('status' => 'Belum Selesai');
        $this->db->where($where);
        $this->db->update('tb_pesanan', $status);
    }

    function tb_bahan_nama_ambil(){
        $this->db->order_by("kode", "asc");
        $query = $this->db->get('tb_bahan_nama');
            if ($query->num_rows() == 0) {
                return false;
            } else {
                return $query->result();
            }
    }

    function tb_bahan_nama_ambilbyid($where){
        $this->db->where($where);
        $query = $this->db->get('tb_bahan_nama');
            if ($query->num_rows() == 0) {
                return false;
            } else {
                return $query->result();
            }
    }

    function tb_bahan_nama_insert($data){
        $this->db->insert('tb_bahan_nama', $data);
    }

    function tb_bahan_nama_update($where,$data){
        $this->db->where($where);
        $this->db->update('tb_bahan_nama', $data);
    }

    function tb_bahan_nama_delete($where){
        $this->db->where($where);
        $this->db->delete('tb_bahan_nama');
    }

    function tb_bahan_jenis_ambil(){
        $this->db->order_by("kode", "asc");
        $query = $this->db->get('tb_bahan_jenis');
            if ($query->num_rows() == 0) {
                return false;
            } else {
                return $query->result();
            }
    }

    function tb_bahan_jenis_ambilbyid($where){
        $this->db->where($where);
        // $this->db->order_by("id", "asc"); Urutkan berdasarkan kolom 'id'
        $query = $this->db->get('tb_bahan_jenis');
            if ($query->num_rows() == 0) {
                return false;
            } else {
                return $query->result();
            }
    }

    function tb_bahan_jenis_insert($data){
        $this->db->insert('tb_bahan_jenis', $data);
    }

    function tb_bahan_jenis_update($where,$data){
        $this->db->where($where);
        $this->db->update('tb_bahan_jenis', $data);
    }

    function tb_bahan_jenis_delete($where){
        $this->db->where($where);
        $this->db->delete('tb_bahan_jenis');
    }


// Tabel Bahan
    function tb_bahan_ambil(){
        $query = $this->db->get('tb_bahan');
            if ($query->num_rows() == 0) {
                return false;
            } else {
                return $query->result();
            }
    }

    function tb_bahan_ambilbyid($where){
        $this->db->where($where);
        // $this->db->order_by("id", "asc"); Urutkan berdasarkan kolom 'id'
        $query = $this->db->get('tb_bahan');
            if ($query->num_rows() == 0) {
                return false;
            } else {
                return $query->result();
            }
    }

    // fungsi tambahan
    function tb_bahan_ambilnama($vari){
        $where = array('kode' => $vari);
        $this->db->where($where);
        $query = $this->db->get('tb_bahan_nama');
            if ($query->num_rows() == 0) {
                return false;
            } else {
                $simpan = $query->result();
                foreach ($simpan as $key) {
                    return $key->nama_bhn;
                }
            }
    }

    function tb_bahan_ambiljenis($vari){
        $where = array('kode' => $vari);
        $this->db->where($where);
        // $this->db->order_by("id", "asc"); Urutkan berdasarkan kolom 'id'
        $query = $this->db->get('tb_bahan_jenis');
            if ($query->num_rows() == 0) {
                return false;
            } else {
                $simpan = $query->result();
                foreach ($simpan as $key) {
                    return $key->jenis_bhn;
                }
            }
    }

    function tb_bahan_ambilwarna($vari){
        $where = array('kode' => $vari);
        $this->db->where($where);
        // $this->db->order_by("id", "asc"); Urutkan berdasarkan kolom 'id'
        $query = $this->db->get('tb_bahan_warna');
            if ($query->num_rows() == 0) {
                return false;
            } else {
                $simpan = $query->result();
                foreach ($simpan as $key) {
                    return $key->warna_bhn;
                }
            }
    }

    function tb_bahan_insert($data){
        $this->db->insert('tb_bahan', $data);
    }

    function tb_bahan_update($where,$data){
        $this->db->where($where);
        $this->db->update('tb_bahan', $data);
    }

    function tb_bahan_delete($where){
        $this->db->where($where);
        $this->db->delete('tb_bahan');
    }

    // tabel warna
    function tb_bahan_warna_ambil(){
        $this->db->order_by("kode", "asc");
        $query = $this->db->get('tb_bahan_warna');
            if ($query->num_rows() == 0) {
                return false;
            } else {
                return $query->result();
            }
    }

    function tb_bahan_warna_ambilbyid($where){
        $this->db->where($where);
        // $this->db->order_by("id", "asc"); Urutkan berdasarkan kolom 'id'
        $query = $this->db->get('tb_bahan_warna');
            if ($query->num_rows() == 0) {
                return false;
            } else {
                return $query->result();
            }
    }

    function tb_bahan_warna_insert($data){
        $this->db->insert('tb_bahan_warna', $data);
    }

    function tb_bahan_warna_update($where,$data){
        $this->db->where($where);
        $this->db->update('tb_bahan_warna', $data);
    }

    function tb_bahan_warna_delete($where){
        $this->db->where($where);
        $this->db->delete('tb_bahan_warna');
    }

    // Produksi

    // produk
    function produksi_produk_ambil(){
        $query = $this->db->get('tb_produk');
            if ($query->num_rows() == 0) {
                return false;
            } else {
                return $query->result();
            }
    }

    function produksi_produk_insert($data){
        $this->db->insert('tb_produk', $data);
    }

    function produksi_produk_ambilbyid($where){
        $this->db->where($where);
        $query = $this->db->get('tb_produk');
            if ($query->num_rows() == 0) {
                return false;
            } else {
                return $query->result();
            }
    }

    function produksi_produk_update($where,$data){
        $this->db->where($where);
        $this->db->update('tb_produk', $data);
    }

    function produksi_produk_delete($where){
        $this->db->where($where);
        $this->db->delete('tb_produk');
    }

    function tb_pengguna_ambil(){
        $query = $this->db->get('tb_pengguna');
            if ($query->num_rows() == 0) {
                return false;
            } else {
                return $query->result();
            }
    }

    function tb_pengguna_ambil_byid($where){
        $this->db->where($where);
        $query = $this->db->get('tb_pengguna');
            if ($query->num_rows() == 0) {
                return false;
            } else {
                return $query->result();
            }
    }

    function tb_pengguna_ambil_byid_or($where,$or_where){
        $this->db->where($where);
        $this->db->or_where($or_where);
        $query = $this->db->get('tb_pengguna');
            if ($query->num_rows() == 0) {
                return false;
            } else {
                return $query->result();
            }
    }

    function tb_pengguna_aktifkan($where){
        $this->db->where($where);
        $data = array('aktif' => 'Y');
        $this->db->update('tb_pengguna', $data);
    }

    function tb_pengguna_nonaktifkan($where){
        $this->db->where($where);
        $data = array('aktif' => 'T');
        $this->db->update('tb_pengguna', $data);
    }

    function tb_pengguna_delete($where){
        $this->db->where($where);
        $this->db->delete('tb_pengguna');
    }

    function tb_pengguna_update_pass($where,$data){
        $this->db->where($where);
        $this->db->update('tb_pengguna', $data);
    }

// Function
    function tb_pengguna_update_username($where,$data){
        $cek_email = $this->cek_database_email($data['email']);
        $cek_username = $this->cek_database_email($data['username']);
    }

    private function cek_database_email($data){
        $where = array('email' => $data );
        $this->db->where($where);
        $query = $this->db->get('tb_pengguna');
            if ($query->num_rows() == 0) {
                return false;
            } else {
                $data = $query->result();
                foreach ($data as $dt) {
                    if ($dt->email == $this->session->userdata('nama')){
                        # code...
                    }
                }
            }

    }

    private function cek_database_username($data){
        $where = array('email' => $data );
        $this->db->where($where);
        $query = $this->db->get('tb_pengguna');
            if ($query->num_rows() == 0) {
                return false;
            } else {
                $data = $query->result();
            }
    }
// end Function

    function tb_pengguna_insert($data){
        $this->db->insert('tb_pengguna', $data);
    }

}