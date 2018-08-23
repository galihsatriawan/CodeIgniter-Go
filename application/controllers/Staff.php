<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	
	public function index()
	{
		$this->load->model('Staff_md');
		$data['staff']= $this->Staff_md->get_all();
		$this->load->view('staff/Staff',$data);
	}
}
