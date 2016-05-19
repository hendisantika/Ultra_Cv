<?php
//ULTRA CV BY VERLY ANANDA
class model_cv extends CI_Model{

function tampil(){
		$this->db->select('*');
		$this->db->from('user');
		return $this->db->get();
}

function profile(){
	 	$this->db->select('*');
	 	$this->db->from('frontend_profile');
	 	return $this->db->get();
}
}