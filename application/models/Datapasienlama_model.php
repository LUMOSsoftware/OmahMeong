<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Datapasienlama_model extends CI_Model
{

    public function viewByNorm($no_rm){
    $this->db->where('no_rm', $no_rm);
    $result = $this->db->get('tbl_pasien')->row(); // Tampilkan data siswa berdasarkan NIS 
    return $result; 
    }

    public function get_prov($title)
     {
    $this->db->like('no_tlp', $title, 'BOTH');
    $this->db->order_by('no_rm', 'asc');
    $this->db->limit(10);
    return $this->db->get('tbl_pasien')->result();
    }

    function input_data($data,$table){
        $this->db->insert($table,$data);
    }

    function hapus_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
    }

    function edit_data($where,$table){      
    return $this->db->get_where($table,$where);
    }

    function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }   

}