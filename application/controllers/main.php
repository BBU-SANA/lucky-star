<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');

		$this->_init();
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

	public function signin()
	{
		$this->output->set_title('Sign In');
		$this->output->set_template('blank');
		$this->load->view('pages/signinPage');
	}

	public function register()
	{
		$this->output->set_title('Register');
		$this->output->set_template('blank');
		$this->load->view('pages/registerPage');
	}
}
