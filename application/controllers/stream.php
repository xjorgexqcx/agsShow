<?php
/**
* 
*/
class Stream extends CI_Controller
{
	public function index(){
 		$this->load->view("principal/header.php");
 		$this->load->view("stream/index.php");
 		$this->load->view("principal/footer.php");
 	}
}
 ?>