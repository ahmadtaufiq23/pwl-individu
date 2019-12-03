<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model{  

    private $_table = "mahasiswa";

    function tampil_data()
    {
        return $this->db->query("select * from mahasiswa");
    }
    
    function tambah($data)
    {
        $this->db->insert('mahasiswa',$data);
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function update($data)
    {
        $this->db->where('id',$_POST['id']);
        $this->db->update('mahasiswa',$data);
    }

   function hapus($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('mahasiswa');

    }
}
