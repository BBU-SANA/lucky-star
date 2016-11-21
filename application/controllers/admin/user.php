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
		$this->output->set_template('admin/default');
	}

	public function index()
	{
		$this->output->set_title('Dashboard');
		$this->load->view('admin/dashboard');

		$this->load->js('public/assets/plugins/morris/morris.min.js');
		$this->load->js('public/assets/plugins/raphael/raphael-min.js');
		$this->load->js('public/assets/pages/jquery.dashboard_ecommerce.js');

	}

    public function viewuser()
	{
		$this->load->view('admin/viewuser');
        $this->Mylibraries();

		$this->load->css('public/assets/plugins/custombox/dist/custombox.min.css');
		$this->load->js('public/assets/plugins/custombox/dist/custombox.min.js');
		$this->load->js('public/assets/plugins/custombox/dist/legacy.min.js');
	}

	public function adduser()
	{
		$this->load->view('admin/adduser');
		$this->Mylibraries();

        $this->load->css('public/assets/plugins/jquery.steps/demo/css/jquery.steps.css');
        $this->load->js('public/assets/plugins/jquery.steps/build/jquery.steps.min.js');
        $this->load->js('public/assets/plugins/jquery-validation/dist/jquery.validate.min.js');
        $this->load->js('public/assets/pages/jquery.wizard-init.js');
	}




    /**
    * USER ACTION ADD SELECT DELECT UPDATE 
    **/

    function savedata()
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

    function edit($id)
    {
        $row = $this->user->getUserById($id);
        $data['r'] = $row;
        $this->load->view('admin/viewuser', $data);
        
    }



    // SOME LIBRARIES USE IN USER CONTROLLER
    function Mylibraries()
    {
        $this->load->css('public/assets/plugins/timepicker/bootstrap-timepicker.min.css');
		$this->load->css('public/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css');
		$this->load->js('public/assets/plugins/timepicker/bootstrap-timepicker.min.js');
		$this->load->js('public/assets/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js');
		$this->load->js('public/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js');
		$this->load->css('public/assets/plugins/bootstrap-select/dist/css/bootstrap-select.min.css');
		$this->load->js('public/assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js');
		$this->load->js('public/assets/plugins/bootstrap-filestyle/src/bootstrap-filestyle.min.js');
        $this->load->js('public/assets/plugins/parsleyjs/dist/parsley.min.js');
    }
}