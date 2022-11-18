<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

    public function index()
    {
        
        $this->load->view('v_create');
    }

    function create(){
        $data['x'] = 'x-content';
        $this->load->view('v_createData',$data);
    }

    function proses(){
        $data['x'] = 'y-content';
        $this->load->view('v_createData',$data);
    }

    function getResult(){
        $permintaan = $this->input->post('permintaan');
        $persediaan = $this->input->post('persediaan');
        $hasil  = 0;
        $produksi = $hasil;


        if ($permintaan <=2000 && $persediaan <=200) {
            $result = "Banyak";
        }

    }

}

/* End of file Data.php */


?>