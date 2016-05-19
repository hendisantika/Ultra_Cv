<?php
//ULTRA CV BY VERLY ANANDA
class Frontend extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('security','url'));
	
	}
	function index(){
	
		$this->load->view('header_frontend');
		$tampil['cv']= $this->model_cv->tampil();
		$this->load->view('frontend',$tampil);
		$this->load->view('footer_frontend');

	}
	function profile(){
		$this->load->view('header_frontend');
		$tampil['profile']= $this->model_cv->profile();
		$this->load->view('profile',$tampil);
		$this->load->view('footer_frontend');
	}


}

	
?>