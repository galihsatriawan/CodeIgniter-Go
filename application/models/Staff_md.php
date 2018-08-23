<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff_md extends CI_Model {

	
	public function get_all()
	{
		$sql = "SELECT staff_id , first_name,last_name from staff";
		$hasil = $this->db->query($sql)->result_array();
		return $hasil;
	}
}
