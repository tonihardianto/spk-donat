<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('m_user');
        
    }
    

    public function index()
    {
        $data = array(
            'title' => 'Decision Maker | User Account',
            'user'  => $this->m_user->getUser(),
        );
        $this->load->view('v_user', $data);
    }

}

/* End of file User.php */


?>