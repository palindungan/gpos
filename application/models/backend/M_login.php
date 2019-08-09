<?php
class M_login extends CI_Model
{
    // mengambil data berdasarkan username
    function ambil_data($username)
    {
        $this->db->select('*');
        $this->db->from('user_backend u');

        $where = "u.username ='" . $username . "'";
        $this->db->where($where);
        $this->db->order_by('u.username', 'ASC');

        return $this->db->get();
    }
}
