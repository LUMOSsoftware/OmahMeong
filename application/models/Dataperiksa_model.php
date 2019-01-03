<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dataperiksa_model extends CI_Model{
    function tampil_data(){
        return $this->db->get('tbl_periksa');
    }

    function nootomatis(){
        $today=date('Ymd');

        $query=$this->db->query("select max(id_periksa) as last from tbl_periksa where id_periksa like '$today%'");
        $data=$query->result_array();
        $lastNoFaktur=$data[0]['last'];
        
        $lastNoUrut=substr($lastNoFaktur,8,3);
        
        $nextNoUrut=$lastNoUrut+1;
        
        $nextNoTransaksi=$today.sprintf('%03s',$nextNoUrut);
        
        return $nextNoTransaksi;
    }

    function getPasien(){
        return $this->db->get("tbl_pasien");
    }
    

    function cariPasien($no_rm){
        $this->db->where("no_rm",$no_rm);
        return $this->db->get("tbl_pasien");
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

    function caridata(){
    $c = $this->input->POST ('cari');
    $this->db->like('id_periksa', $c);
    $query = $this->db->get ('tbl_periksa');
    return $query->result(); 
    }

}