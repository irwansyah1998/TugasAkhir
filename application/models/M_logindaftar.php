<?php

class M_logindaftar extends CI_Model
{
    //fungsi check login
    function cek_login($field1, $field2)
    {
        $where = array('aktif' => 'Y');
        $this->db->select('*');
        $this->db->from('tb_pengguna');
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->where($where);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }
}