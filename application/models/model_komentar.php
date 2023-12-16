<?php
class Model_komentar extends CI_Model
{
    public function get_komentar()
    {
        return $this->db->get('tb_komentar')->result_array();
    }

    public function add_komentar($data)
    {
        $this->db->insert('tb_komentar', $data);
        return $this->db->insert_id();
    }

    public function delete_komentar($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('tb_komentar');
    }
}
?>
