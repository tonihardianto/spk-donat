<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    function getUser(){
        return $this->db->query("select * from tb_user");
    }

}

/* End of file M_user.php */

?>