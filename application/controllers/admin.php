<?php 
/**
 * 
 */
 class Admin extends CI_Controller
 {
 	
 	public function index(){
 		$rpta = array('rpta' => "");
 		$this->load->view("admin/login.php",$rpta);
 	}
 	public function principal(){
 		if($this->session->userdata("rol") == "admin"){
 			$this->load->view("admin/index.php");
 		}
 		else{
 			$rpta = array('rpta' => "Datos Incorrectos");
 			$this->load->view("admin/login.php",$rpta);
 		}
 	}
 	public function usuarios(){
 		$query = $this->usuarios->getUsuarios();
 		$cantidad = $query->num_rows();
 		if($this->session->userdata("rol") == "admin"){
 			$resultado = array('ltaUsuarios' => $query,'cantidad' => $cantidad);
 			$this->load->view("admin/usuarios.php",$resultado);
 		}else{
 			$rpta = array('rpta' => "Datos Incorrectos");
 			$this->load->view("admin/login.php",$rpta);
 		}
 	}
 	public function getExcel(){
 		if($this->session->userdata("rol") == "admin"){	 			
	 		$resultado = array('ltaUsuarios' => $this->usuarios->getUsuarios());
	 		$this->load->view("admin/excel.php",$resultado);
 		}else{
 			$rpta = array('rpta' => "Datos Incorrectos");
 			$this->load->view("admin/login.php",$rpta);
 		}
 	}
 	public function verifica(){
 		$usuario = $this->input->post("usuario");
 		$clave = $this->input->post("clave");
 		if($usuario == 'ags2015' && $clave == '4m4z1ng#'){
 			$this->session->set_userdata("rol","admin");
 			$this->load->view("admin/index.php");
 		}else{
 			$rpta = array('rpta' => "Datos Incorrectos");
 			$this->load->view("admin/login.php",$rpta);
 		}
 	}
 	public function cerrarSesion(){
 		$rpta = array('rpta' => "");
 		$this->session->unset_userdata("rol");
 		$this->load->view("admin/login.php",$rpta);
 	}
 } ?>