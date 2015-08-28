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
 		$ip = $this->input->ip_address();
 		$this->load->model("visitas");
 		$data = array(
	   			'pagina' => 'index',
	   			'ip' => $ip
			);
 		$this->visitas->addVisitas($data);
 	}
 	public function entradas(){
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/entradas.php");
 		$this->load->view("principal/footer.php");
 		$ip = $this->input->ip_address();
 		$this->load->model("visitas");
 		$data = array(
	   			'pagina' => 'entradas',
	   			'ip' => $ip
			);
 		$this->visitas->addVisitas($data);
 	}
 	public function programa(){
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/programa.php");
 		$this->load->view("principal/footer.php");
 		$ip = $this->input->ip_address();
 		$this->load->model("visitas");
 		$data = array(
	   			'pagina' => 'programa',
	   			'ip' => $ip
			);
 		$this->visitas->addVisitas($data);
 	}
 	public function contacto(){
 		$data = array('rpta' => '',
 			'atributos' => '','estilo'=>'',
 			'mensaje'=>'',
 			'area0'=>'selected',
 			'area1'=>'',
 			'area2'=>'',
 			'area3'=>'',
 			'permiso'=>''
 			);
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/contacto.php",$data);
 		$this->load->view("principal/footer.php");
 		$ip = $this->input->ip_address();
 		$this->load->model("visitas");
 		$data = array(
	   			'pagina' => 'contacto',
	   			'ip' => $ip
			);
 		$this->visitas->addVisitas($data);
 	}

 	// MENU FERIA 
 	public function feria_visitante(){
 		$dato = array("estilo"=>"menuVisitante.css");
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/festival.php",$dato);
 		$this->load->view("principal/footer.php");
 		$ip = $this->input->ip_address();
 		$this->load->model("visitas");
 		$data = array(
	   			'pagina' => 'feria_visitante',
	   			'ip' => $ip
			);
 		$this->visitas->addVisitas($data);
 	}
 	public function feria_expositor(){
 		$dato = array("estilo"=>"menuExpositor.css");
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/festival.php",$dato);
 		$this->load->view("principal/footer.php");
 		$ip = $this->input->ip_address();
 		$this->load->model("visitas");
 		$data = array(
	   			'pagina' => 'feria_expositor',
	   			'ip' => $ip
			);
 		$this->visitas->addVisitas($data);
 	}
 	public function feria_prensa(){
 		$dato = array("estilo"=>"menuPrensa.css");
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/festival.php",$dato);
 		$this->load->view("principal/footer.php");
 		$ip = $this->input->ip_address();
 		$this->load->model("visitas");
 		$data = array(
	   			'pagina' => 'feria_prensa',
	   			'ip' => $ip
			);
 		$this->visitas->addVisitas($data);
 	}
 	public function feria_business(){
 		$dato = array("estilo"=>"menuBusiness.css");
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/festival.php",$dato);
 		$this->load->view("principal/footer.php");
 		$ip = $this->input->ip_address();
 		$this->load->model("visitas");
 		$data = array(
	   			'pagina' => 'feria_business',
	   			'ip' => $ip
			);
 		$this->visitas->addVisitas($data);
 	}
 	// FIN DE MENU FERIA

 	// MENU SEDE
 	public function sede_visitante(){
 		$dato = array("estilo"=>"sedeVisitante.css");
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/sede.php",$dato);
 		$this->load->view("principal/footer.php");
 		$ip = $this->input->ip_address();
 		$this->load->model("visitas");
 		$data = array(
	   			'pagina' => 'sede_visitante',
	   			'ip' => $ip
			);
 		$this->visitas->addVisitas($data);
 	}
 	public function sede_expositor(){
 		$dato = array("estilo"=>"sedeExpositor.css");
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/sede.php",$dato);
 		$this->load->view("principal/footer.php");
 		$ip = $this->input->ip_address();
 		$this->load->model("visitas");
 		$data = array(
	   			'pagina' => 'sede_expositor',
	   			'ip' => $ip
			);
 		$this->visitas->addVisitas($data);
 	}
 	public function sede_prensa(){
 		$dato = array("estilo"=>"sedePrensa.css");
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/sede.php",$dato);
 		$this->load->view("principal/footer.php");
 		$ip = $this->input->ip_address();
 		$this->load->model("visitas");
 		$data = array(
	   			'pagina' => 'sede_prensa',
	   			'ip' => $ip
			);
 		$this->visitas->addVisitas($data);	
 	}
 	public function sede_business(){
 		$dato = array("estilo"=>"sedeBusiness.css");
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/sede.php",$dato);
 		$this->load->view("principal/footer.php");	
 		$ip = $this->input->ip_address();
 		$this->load->model("visitas");
 		$data = array(
	   			'pagina' => 'sede_business',
	   			'ip' => $ip
			);
 		$this->visitas->addVisitas($data);
 	}
 	// FIN DE MENU SEDE

 	// MENU EXPOSITORES
 	public function expositores_visitante(){
 		$dato = array("estilo"=>"expositoresVisitante.css");
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/expositores.php",$dato);
 		$this->load->view("principal/footer.php");
 		$ip = $this->input->ip_address();
 		$this->load->model("visitas");
 		$data = array(
	   			'pagina' => 'expositores_visitante',
	   			'ip' => $ip
			);
 		$this->visitas->addVisitas($data);
 	}
 	public function expositores_expositor(){
 		$dato = array("estilo"=>"expositoresExpositor.css");
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/expositores.php",$dato);
 		$this->load->view("principal/footer.php");
 		$ip = $this->input->ip_address();
 		$this->load->model("visitas");
 		$data = array(
	   			'pagina' => 'expositores_expositor',
	   			'ip' => $ip
			);
 		$this->visitas->addVisitas($data);
 	}
 	public function expositores_prensa(){
 		$dato = array("estilo"=>"expositoresPrensa.css");
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/expositores.php",$dato);
 		$this->load->view("principal/footer.php");
 		$ip = $this->input->ip_address();
 		$this->load->model("visitas");
 		$data = array(
	   			'pagina' => 'expositores_prensa',
	   			'ip' => $ip
			);
 		$this->visitas->addVisitas($data);
 	}
 	public function expositores_business(){
 		$dato = array("estilo"=>"expositoresBusiness.css");
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/expositores.php",$dato);
 		$this->load->view("principal/footer.php");
 		$ip = $this->input->ip_address();
 		$this->load->model("visitas");
 		$data = array(
	   			'pagina' => 'expositores_business',
	   			'ip' => $ip
			);
 		$this->visitas->addVisitas($data);
 	}
 	// FIN DE MENU EXPOSITORES

 	//Menu Principal Expositores prendido en link participe
 	public function Expositores_participe(){
 		$data = array('rpta' => '',
 			'atributos' => 'value="Participar en Amazing Game Show 2015" readonly','estilo'=>'menuExpositor.css',
 			'mensaje'=>'Por favor deje aquí el nombre de la compañía que representa y datos adicionales de contacto como números de teléfono y correos alternativos.',
 			'area0'=>'',
 			'area1'=>'',
 			'area2'=>'',
 			'area3'=>'selected',
 			'permiso'=>'disabled'
 			);
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/contacto.php",$data);
 		$this->load->view("principal/footer.php");
 	}
 	public function Prensa_acreditacion(){
 		$data = array('rpta' => '',
 			'atributos' => 'value="Acreditación de Prensa" readonly','estilo'=>'menuPrensa.css',
 			'mensaje'=>'Por favor deje aquí el nombre del medio que representa así como datos adicionales de contacto y un enlace a publicaciones realizadas que acrediten su actividad como comunicador.',
 			'area0'=>'',
 			'area1'=>'',
 			'area2'=>'selected',
 			'area3'=>'',
 			'permiso'=>'disabled'
 			);
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/contacto.php",$data);
 		$this->load->view("principal/footer.php");
 	}

 	public function registro(){
 		$numero = rand( 1,4);
 		$numero = "$numero.png";
 		$rpta = array('rpta' => "",'rptaError' => "",'frase'=>$numero);
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/registro.php",$rpta);
 		$this->load->view("principal/footer.php");
 		$ip = $this->input->ip_address();
 		$this->load->model("visitas");
 		$data = array(
	   			'pagina' => 'registro',
	   			'ip' => $ip
			);
 		$this->visitas->addVisitas($data);
 	}
 	public function mensaje(){
 		$email = $this->input->post("email");
 		$nombre = $this->input->post("nombre");
 		$motivo = $this->input->post("motivo");
 		$mensaje = $this->input->post("mensaje");
 		$area = $this->input->post("area");
 		$destino = "amaum@integrex.com.pe";
 		if($area == 1){
 			$destino = "amaum@integrex.com.pe";
 		}
 		else{
 			if($area == 2){
 				$destino = "comunica@integrex.com.pe";
 			}
 			else{
 				if ($area == 3) {
 					$destino = "noriegar@integrex.com.pe";
 				}
 			}
 		}

 		$this->load->library('email');
		$this->email->from($email, $nombre);
		$this->email->to($destino); 
		$this->email->subject($motivo);
		$this->email->message($mensaje);
		$this->email->send();
		$data = array('rpta' => 'Tu mensaje ha sido enviado. Estaremos en contacto via email');
		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/contacto.php",$data);
 		$this->load->view("principal/footer.php");
 		$ip = $this->input->ip_address();
 		$this->load->model("visitas");
 		$data = array(
	   			'pagina' => 'EnvioDeMensaje',
	   			'ip' => $ip
			);
 		$this->visitas->addVisitas($data);
 	}
 	public function torneos(){
 		$this->load->view("principal/header.php");
 		$this->load->view("principal/inicio.php");
 		$this->load->view("publico/torneo.php");
 		$this->load->view("principal/footer.php");
 		$ip = $this->input->ip_address();
 		$this->load->model("visitas");
 		$data = array(
	   			'pagina' => 'torneos',
	   			'ip' => $ip
			);
 		$this->visitas->addVisitas($data);
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
	 	$ip = $this->input->ip_address();
 		$this->load->model("visitas");
 		$data = array(
	   			'pagina' => 'register',
	   			'ip' => $ip
			);
 		$this->visitas->addVisitas($data);
 	}
 }
 ?>