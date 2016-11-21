<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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

		$this->load->js('public/assets/plugins/morris/morris.min.js');
		$this->load->js('public/assets/plugins/raphael/raphael-min.js');
		$this->load->js('public/assets/pages/jquery.dashboard_ecommerce.js');

	}

	public function example_4()
	{
		$this->output->unset_template();
		$this->load->view('ci_simplicity/example_4');
	}
}
