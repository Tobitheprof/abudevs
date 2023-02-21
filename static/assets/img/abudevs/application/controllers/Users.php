<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {


  function __construct() {
        parent::__construct();

          if (!$this->session->userdata('devs_logged_in') ) {
  redirect('login','refresh');
          
  }
        // $this->tree_change();
    }

	public function index()
	{

		   $username = $_SESSION['username']; 
		   $data['title'] = 'My Dashboard';
                $data['user_info'] = $this->User_model->user_info($username);
                  $this->load->view('template/header', $data);
                  $this->load->view('page/dashboard', $data);
                  $this->load->view('template/footer', $data);

		
	}

}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */ ?>