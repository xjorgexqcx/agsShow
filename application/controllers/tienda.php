<?php 
/**
 * 
 */
 class Tienda extends CI_Controller
 {
 	public function index(){
 		$this->load->view("tienda/header.php");
 		$this->load->view("tienda/index.php");
 		$this->load->view("principal/footer.php");
 	}
 } ?>