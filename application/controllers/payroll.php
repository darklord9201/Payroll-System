<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payroll extends CI_Controller {
	public function index(){
		$this->load->view('header');
		$this->load->view('navigation');
	}

}