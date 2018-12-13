<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Datapemilik_model extends CI_Model
{
    function tampil_data(){
        return $this->db->get('tbl_pemilik');
    }
 
    function input_data($data,$table){
        $this->db->insert($table,$data);
    }

    function hapus_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
    }

    function caridata(){
    $c = $this->input->POST ('cari');
    $this->db->like('nama_pemilik', $c);
    $query = $this->db->get ('tbl_pemilik');
    return $query->result(); 
    }

}