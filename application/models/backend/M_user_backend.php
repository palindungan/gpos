<?php
class M_user_backend extends CI_Model
{

    // mengambil semua data pada tabel
    function tampil_data()
    {
        return $this->db->get('user_backend');
    }

    // untuk input data ke dalam database
    function input_data($table, $data)
    {
        $this->db->insert($table, $data);
    }

    // untuk hapus data 
    function hapus_data($table, $where)
    {
        // idnya
        $this->db->where($where);

        // tabelnya
        $this->db->delete($table);
    }

    // untuk mengambil nilai data yg di edit
    function edit_data($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    // untuk update data
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    // autogenerate kode / ID
    function get_no()
    {
        $field = "id_user_b";
        $tabel = "user_backend";
        $digit = "2";
        $kode = "U-";

        $q = $this->db->query("SELECT MAX(RIGHT($field,$digit)) AS kd_max FROM $tabel");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kd = $kode . sprintf('%0' . $digit . 's',  $tmp);
            }
        } else {
            $kd = "U-01";
        }
        return $kd;
    }

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
    function ambil_data_id($id_user_b)
    {
        $this->db->select('*');
        $this->db->from('user_backend u');

        $where = "u.id_user_b ='" . $id_user_b . "'";
        $this->db->where($where);
        $this->db->order_by('u.id_user_b', 'ASC');

        return $this->db->get();
    }
}
