<?php

class M_pengguna extends CI_Model
{
    //fungsi check login
    function cek_login($field1, $field2)
    {
        $this->db->select('*');
        $this->db->from('tb_pengguna');
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }
}