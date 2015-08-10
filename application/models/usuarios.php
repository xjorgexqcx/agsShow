<?php
	/**
	* 
	*/
class Usuarios extends CI_Model
	{
		public function getUsuarios(){
		  $this->db->order_by("nombres");
 		  return $this->db->get("usuarios");
 		}
 		public function addUsuarios($data){
			return $this->db->insert('usuarios', $data);
 		}
	}
?>