<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sandbox extends CI_Controller {

	function __construct() {
	    parent::__construct();
	 	 
		$this->output->set_template('default');
	}

	public function index()
	{
		$this->load->view('sandbox/index');
	}
}
