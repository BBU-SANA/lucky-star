<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');

		$this->_init();
	}

	private function _init()
	{
		$this->output->set_template('admin/default');
	}

	public function index()
	{
		$this->output->set_title('Dashboard');
		$this->load->view('admin/dashboard');
	}

	public function viewuser()
	{
		$this->load->view('admin/viewuser');
	}

	public function adduser()
	{
		$this->load->view('admin/adduser');

		// Form wizard css
		$this->load->css('public/assets/plugins/jquery.steps/demo/css/jquery.steps.css');

		// Form Validation
		$this->load->js('public/assets/plugins/bootstrapvalidator/dist/js/bootstrapValidator.js');

        // Form Wizard
        $this->load->js('public/assets/plugins/jquery.steps/build/jquery.steps.min.js');
        $this->load->js('public/assets/plugins/jquery-validation/dist/jquery.validate.min.js');

        // <!--wizard initialization
        $this->load->js('public/assets/pages/jquery.wizard-init.js');
	}

	public function example_4()
	{
		$this->output->unset_template();
		$this->load->view('ci_simplicity/example_4');
	}
}
