<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_permintaan extends CI_Model {

    function deletePermintaan($tanggal) {
        return $this->db->query("DELETE FROM tb_permintaan WHERE tanggal = '$tanggal'");
    }

}

/* End of file ModelName.php */


?>