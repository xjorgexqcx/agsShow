<?php 
/**
 * 
 */
 class Home extends CI_Controller
 {
 	public function index(){
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/index.php");
 		$this->load->view("principal/footer.php");
 	}
 	public function entradas(){
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/entradas.php");
 		$this->load->view("principal/footer.php");
 	}
 	public function programa(){
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/programa.php");
 		$this->load->view("principal/footer.php");
 	}
 	public function contacto(){
 		$data = array('rpta' => '');
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/contacto.php",$data);
 		$this->load->view("principal/footer.php");
 	}

 	// MENU FERIA 
 	public function feria_visitante(){
 		$dato = array("estilo"=>"menuVisitante.css");
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/festival.php",$dato);
 		$this->load->view("principal/footer.php");	
 	}
 	public function feria_expositor(){
 		$dato = array("estilo"=>"menuExpositor.css");
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/festival.php",$dato);
 		$this->load->view("principal/footer.php");	
 	}
 	public function feria_prensa(){
 		$dato = array("estilo"=>"menuPrensa.css");
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/festival.php",$dato);
 		$this->load->view("principal/footer.php");	
 	}
 	public function feria_business(){
 		$dato = array("estilo"=>"menuBusiness.css");
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/festival.php",$dato);
 		$this->load->view("principal/footer.php");	
 	}
 	// FIN DE MENU FERIA

 	// MENU SEDE
 	public function sede_visitante(){
 		$dato = array("estilo"=>"sedeVisitante.css");
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/sede.php",$dato);
 		$this->load->view("principal/footer.php");
 	}
 	public function sede_expositor(){
 		$dato = array("estilo"=>"sedeExpositor.css");
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/sede.php",$dato);
 		$this->load->view("principal/footer.php");	
 	}
 	public function sede_prensa(){
 		$dato = array("estilo"=>"sedePrensa.css");
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/sede.php",$dato);
 		$this->load->view("principal/footer.php");	
 	}
 	public function sede_business(){
 		$dato = array("estilo"=>"sedeBusiness.css");
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/sede.php",$dato);
 		$this->load->view("principal/footer.php");	
 	}
 	// FIN DE MENU SEDE

 	// MENU EXPOSITORES
 	public function expositores_visitante(){
 		$dato = array("estilo"=>"expositoresVisitante.css");
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/expositores.php",$dato);
 		$this->load->view("principal/footer.php");
 	}
 	public function expositores_expositor(){
 		$dato = array("estilo"=>"expositoresExpositor.css");
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/expositores.php",$dato);
 		$this->load->view("principal/footer.php");	
 	}
 	public function expositores_prensa(){
 		$dato = array("estilo"=>"expositoresPrensa.css");
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/expositores.php",$dato);
 		$this->load->view("principal/footer.php");	
 	}
 	public function expositores_business(){
 		$dato = array("estilo"=>"expositoresBusiness.css");
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/expositores.php",$dato);
 		$this->load->view("principal/footer.php");	
 	}
 	// FIN DE MENU EXPOSITORES

 	public function registro(){
 		$numero = rand( 1,4);
 		$numero = "$numero.png";
 		$rpta = array('rpta' => "",'rptaError' => "",'frase'=>$numero);
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/registro.php",$rpta);
 		$this->load->view("principal/footer.php");
 	}
 	public function mensaje(){
 		$email = $this->input->post("email");
 		$nombre = $this->input->post("nombre");
 		$motivo = $this->input->post("motivo");
 		$mensaje = $this->input->post("mensaje");
 		
 		$this->load->library('email');
		$this->email->from($email, $nombre);
		$this->email->to('jquijanoceli@gmail.com'); 
		$this->email->subject($motivo);
		$this->email->message($mensaje);
		$this->email->send();

		$data = array('rpta' => 'Tu mensaje ha sido enviado. Estaremos en contacto via email');

		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/contacto.php",$data);
 		$this->load->view("principal/footer.php");
 	}
 	public function torneos(){
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/torneo.php");
 		$this->load->view("principal/footer.php");
 	}
 	public function register(){
 		$numero = rand( 1,4);
 		$numero = "$numero.png";
 		$rpta = array('rpta' => "",'rptaError' => "",'frase'=>$numero);
 		if ($this->input->post("nombres") != "" && $this->input->post("correo") != ""){
	 		$data = array(
	   			'nombres' => $this->input->post("nombres"),
	   			'email' => $this->input->post("correo"),
	   			'edad' => $this->input->post("edad"),
	   			'genero' => $this->input->post("sexo"),
	   			'ciudad' => $this->input->post("ciudad"),
	   			'idPais' => $this->input->post("pais")
			);
			if($this->usuarios->addUsuarios($data)){
				$rpta = array('rpta' => "Registro procesado con éxito",'rptaError' => "",'frase'=>$numero);
			}
			else{
				$rpta = array('rpta' => "Registro procesado con éxito",'rptaError' => "",'frase'=>$numero);
				// $rpta = array('rpta' => "",'rptaError' => "ERROR - Sus datos no han sido ingresados",'frase'=>$numero);
			}
	 	}
	 	$this->load->view("principal/header.php");
	 	$this->load->view("principal/inicio.php");
	 	$this->load->view("publico/registro.php",$rpta);
	 	$this->load->view("principal/footer.php");
 	}
 }
 ?>