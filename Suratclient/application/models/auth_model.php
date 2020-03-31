<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth_model extends CI_Model {
        
	public function login($username,$password)
	{
        // var_dump($username);
        // var_dump($password);
        // die();
		$this->db->select('id_user,username,password,level');
		$this->db->from('user');
		$this->db->where('username',$username); //maksudnya adalah selama inputan user yang disimpan pada parameter $user sama dengan username
		$this->db->where('password',$password);
		$this->db->limit(1);
		$query=$this->db->get();
		if($query->num_rows()==1){
			return $query->result();
		}else{
			return false;
		}
	}

}



/*End of file ModelName.php*/
?> 