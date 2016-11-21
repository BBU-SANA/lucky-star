<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

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

		$this->load->css('public/assets/plugins/custombox/dist/custombox.min.css');
		$this->load->js('public/assets/plugins/custombox/dist/custombox.min.js');
		$this->load->js('public/assets/plugins/custombox/dist/legacy.min.js');
		
		$this->load->js('public/assets/plugins/parsleyjs/dist/parsley.min.js');

		$this->load->css('public/assets/plugins/timepicker/bootstrap-timepicker.min.css');
		$this->load->css('public/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css');
		$this->load->js('public/assets/plugins/timepicker/bootstrap-timepicker.min.js');
		$this->load->js('public/assets/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js');
		$this->load->js('public/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js');
		$this->load->css('public/assets/plugins/bootstrap-select/dist/css/bootstrap-select.min.css');
		$this->load->js('public/assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js');
		$this->load->js('public/assets/plugins/bootstrap-filestyle/src/bootstrap-filestyle.min.js');
	}

	public function adduser()
	{
		$this->load->view('admin/adduser');

		// Form wizard css
		$this->load->css('public/assets/plugins/jquery.steps/demo/css/jquery.steps.css');

		// Form Validation
		$this->load->js('public/');

        // Form Wizard
        $this->load->js('public/assets/plugins/jquery.steps/build/jquery.steps.min.js');
        $this->load->js('public/assets/plugins/jquery-validation/dist/jquery.validate.min.js');

        // <!--wizard initialization
        $this->load->js('public/assets/pages/jquery.wizard-init.js');

		$this->load->css('public/assets/plugins/timepicker/bootstrap-timepicker.min.css');
		$this->load->css('public/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css');
		$this->load->js('public/assets/plugins/timepicker/bootstrap-timepicker.min.js');
		$this->load->js('public/assets/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js');
		$this->load->js('public/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js');
		$this->load->css('public/assets/plugins/bootstrap-select/dist/css/bootstrap-select.min.css');
		$this->load->js('public/assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js');
		$this->load->js('public/assets/plugins/bootstrap-filestyle/src/bootstrap-filestyle.min.js');
	}

	public function example_4()
	{
		$this->output->unset_template();
		$this->load->view('ci_simplicity/example_4');
	}
}
