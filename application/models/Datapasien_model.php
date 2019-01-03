<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Datapasien_model extends CI_Model
{
    
    function semua($limit=10,$offset=0,$order_column='',$order_type='asc'){
        if(empty($order_column) || empty($order_type))
            $this->db->order_by($this->primary,'asc');
        else
            $this->db->order_by($order_column,$order_type);
        return $this->db->get($this->table,$limit,$offset);
    }

    function tampil_data(){
        return $this->db->get('tbl_pasien');
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

    function input_data_periksa($data,$table){
        $this->db->insert($table,$data);
    }  

}