<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Permintaan extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url().'login';
            redirect($url);
        }

        $this->load->model('m_dataproses');
        
    }

    public function index()
    {
        $data = array(
            'title' => 'Permintaan',
            'permintaan' => $this->m_dataproses->getPermintaan(),
            'permintaan1' => $this->m_dataproses->getPermintaan(),
            'produksi' => $this->m_dataproses->getPersediaan(),
        );
        $this->load->view('v_permintaan', $data);
        
    }

    function insertPermintaan(){
        $tanggal = $this->input->post('tanggal');
        $permintaan = $this->input->post('permintaan');
        $user_id = $this->session->userdata('ses_id');
        $created_at = date('Y-m-d H:i:s');

        $this->m_dataproses->insertPermintaan($tanggal, $permintaan, $created_at, $user_id);
        redirect('permintaan');
    }

    

}

/* End of file Permintaan.php */

?>