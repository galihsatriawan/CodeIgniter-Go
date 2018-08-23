<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actors extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Actors_md');
	}

	public function index()
	{
		$hasil_q['actors']= $this->Actors_md->get_all();

		$this->load->view('actors/actors_view',$hasil_q);

		
	}
}
