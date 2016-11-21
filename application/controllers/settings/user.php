<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	    $this->load->helper('url');

		$this->_init();
        
        // call model
        $this->load->model('user_model', 'user');
        
	}

	private function _init()
	{
		$this->output->set_template('default');
	}

    public function index()
	{
		$this->output->set_title('Home | Lucky Star Computer');
		$this->load->section('slider', 'pages/homeSlider');
		$this->load->view('index');
	}

    function addUser()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'email'    => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'firstname'=> $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'gender'   => $this->input->post('gender'),
            'dob'      => $this->input->post('dob'),
            'address'  => $this->input->post('address'),
            'phone'    => $this->input->post('phone'),
            'role'     => $this->input->post('role'),
            'active'   => $this->input->post('active'),
            'comment'  => $this->input->post('comment')
        );
        
        $this->db->insert('users', $data);
        
        redirect('admin/viewuser','refresh');
        
    }

    function updateUser($id)
    {
        $row = $this->user->getUserById($id);
        $data['r'] = $row;
        $this->load->view('admin/viewuser', $data);
        
    }
}