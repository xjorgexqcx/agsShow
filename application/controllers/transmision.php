<?php 
/**
 * 
 */
 class Transmision extends CI_Controller
 {
 	
 	public function index(){
 		$this->load->view("principal/header.php");
 		$this->load->view("transmision/transmision.php");
 		$this->load->view("principal/footer.php");
 	}
 } ?>