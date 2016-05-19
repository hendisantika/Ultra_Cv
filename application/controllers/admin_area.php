<?php
//ULTRA CV BY VERLY ANANDA
class Admin_area extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->library('form_validation');
		$this->cek_session();
	}
		function cek_session(){
		if($this->session->userdata('username') == NULL )
		{
			redirect('backend');
		}		
	}
	function index(){
		$this->load->view('backend/header_admin');
		$data['query'] = $this->model_backend->front();
		$this->load->view('backend/sidebar_admin',$data);
		$this->load->view('backend/index_admin');
		$this->load->view('backend/footer_admin');
	}

	//FRONT

	//front edit form
	function settings_front(){
	    $this->load->view('backend/header_admin');
		$data['query'] = $this->model_backend->front();
		$id_frontend=$this->uri->segment(3);
		$data_front['data_front'] = $this->model_backend->front_edit($id_frontend);
		$this->load->view('backend/sidebar_admin',$data);
		$this->load->view('backend/index_front',$data_front);
		$this->load->view('backend/footer_static');
	}
   //proses edit front
	function update_front(){
		$id_frontend=$this->uri->segment(3);
		$front_array=array(
			'title_skill'=> $this->input->post('title_front'),
			'link_fb'    => $this->input->post('link_fb'),
			'link_twit'  => $this->input->post('link_twit'),
			'link_google'=>	$this->input->post('link_google'));
		$this->model_backend->update_front_data($id_frontend,$front_array);
		redirect('index.php/admin_area/settings_front/'.$id_frontend.'  ');

	}


	//FRONT PROFILE

	//front edit front profile
	function settings_front_profile(){
	    $this->load->view('backend/header_admin');
		$data['query'] = $this->model_backend->front();
		$id_profile=$this->uri->segment(3);
		$data_front['data_front'] = $this->model_backend->front_profile_by_id($id_profile);
		$this->load->view('backend/sidebar_admin',$data);
		$this->load->view('backend/index_front_profile',$data_front);
		$this->load->view('backend/footer_static');
	}
   //proses edit front profile
	function update_front_profile(){
		$id_profile=$this->uri->segment(3);
		$front_array2=array(
			'pengenalan'=> $this->input->post('title_hi'),
			'about' => $this->input->post('aboutme'),
			'nama'  => $this->input->post('name'),
			'date'  => $this->input->post('date'),
			'alamat'=> $this->input->post('address'),
			'phone' => $this->input->post('phone'),
			'email' => $this->input->post('email'));
		$this->model_backend->update_front_profile_data($id_profile,$front_array2);
		redirect('index.php/admin_area/settings_front_profile/'.$id_profile.'  ');

	}


	//BLOG

	function settings_blog(){
		$this->load->view('backend/header_admin');
		$data['query'] = $this->model_backend->front();
		$data['blog'] = $this->model_backend->blog();
		$this->load->view('backend/sidebar_admin',$data);
		$this->load->view('backend/index_blog',$data);
		$this->load->view('backend/footer_static');
	}
}
?>