<?php
	/**
	* 
	*/
class Visitas extends CI_Model
	{
		public function getVisitas(){
		  $this->db->order_by("fecha");
 		  return $this->db->get("visitas");
 		}
 		public function addVisitas($data){
			return $this->db->insert('visitas', $data);
 		}
	}
?>