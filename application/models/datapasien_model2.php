
<?php
class datapasien_model2 extends CI_Model{
	
    function tampil_data(){
        return $this->db->get('tbl_pasien');
    }
}
?>