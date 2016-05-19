<?php
//ULTRA CV BY VERLY ANANDA
class model_backend extends CI_Model{

//cek data 
	function cek_data($username,$password){
		$this->db->where('password',$password);
		$this->db->where('username',$username);
		return $this->db->get('user');
		
		}

		// select  //
	function tampil_user(){
		$this->db->select('*');
		$this->db->from('user');
		return $this->db->get();
	}


	//FUNCTION FRONT

	function front(){
		$this->db->select('*');
		$this->db->from('frontend');
		$this->db->from('frontend_profile');
		return $this->db->get();
	}
	//edit front
	function front_edit($id_frontend){
		$this->db->select('*');
		$this->db->from('frontend');
	    $this->db->where('id_frontend',$id_frontend);
		return $this->db->get();
	}
	function update_front_data ($id_frontend,$front_array){
		$this->db->where('id_frontend',$id_frontend);
		return $this->db->update('frontend',$front_array);
	}

	



	//FUNCTION FRONT_PROFILE

	//edit front
	function front_profile_by_id($id_profile){
		$this->db->select('*');
		$this->db->from('frontend_profile');
	    $this->db->where('id_profile',$id_profile);
		return $this->db->get();
	}
	function update_front_profile_data($id_profile,$front_array2){
		$this->db->where('id_profile',$id_profile);
		return $this->db->update('frontend_profile',$front_array2);
	}

function blog(){
		$this->db->select('*');
		$this->db->from('blog');
		return $this->db->get();
	}

	function view($num, $offset)  {
   
  $query = $this->db->get("blog",$num, $offset);

  return $query->result();
  }

	


}