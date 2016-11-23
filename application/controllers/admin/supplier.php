<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Supplier extends CI_Controller {

	function __construct()
	{
		parent::__construct();

        $this->load->helper('url');

		$this->_init();

        // call model
        $this->load->model('user_model', 'user');
        
	}
    
    // LINK TO USER CONTROLLER INTERFACE
    private function _init()
	{
		$this->output->set_template('admin/default');
	}

    public function viewsupplier()
	{
		$this->load->view('admin/viewuser');
        $this->Mylibraries();
        $this->load->css('public/assets/plugins/footable/css/footable.core.css');
        $this->load->js('public/assets/plugins/footable/js/footable.all.min.js');
        $this->load->js('public/assets/pages/jquery.footable.js');
		$this->load->css('public/assets/plugins/custombox/dist/custombox.min.css');
		$this->load->js('public/assets/plugins/custombox/dist/custombox.min.js');
		$this->load->js('public/assets/plugins/custombox/dist/legacy.min.js');
	}

	public function addsupplier()
	{
		$this->load->view('admin/addsupplier');
		$this->Mylibraries();

        $this->load->css('public/assets/plugins/jquery.steps/demo/css/jquery.steps.css');
        $this->load->js('public/assets/plugins/jquery.steps/build/jquery.steps.min.js');
        $this->load->js('public/assets/plugins/jquery-validation/dist/jquery.validate.min.js');
        $this->load->js('public/assets/pages/jquery.wizard-init.js');
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
        
        $this->load->js('public/assets/js/script.custom.js');
    }
}