<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actors_MD extends CI_Model {
	

	public function get_all()
	{
		
		
		$this->load->database();
		$sql = "SELECT * From actor";
		$hasil = $this->db->query($sql)->result_array();
		// print_r($hasil);
		return $hasil;
		
	}
}
