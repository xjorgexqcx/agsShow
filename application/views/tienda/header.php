<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Amazing Game Show</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="icon" type="image/ico" href="<?=base_url()?>plantilla/imagen/icono/icono.ico">
	<link rel="stylesheet" href="<?=base_url()?>plantilla/css/tiendaHome.css">
	<link rel="stylesheet" href="<?=base_url()?>plantilla/css/homeResp.css">
	<link rel="stylesheet" href="<?=base_url()?>plantilla/css/style.css">
	<link rel="stylesheet" href="<?=base_url()?>plantilla/css/contador.css">
	<script src="<?=base_url();?>plantilla/js/jquery.js"></script>
	<script src="<?=base_url()?>plantilla/js/home.js"></script>
	<script src="<?=base_url()?>plantilla/js/countdown.js"></script>
</head>
<body>
<div id="contenedor">
<header>
<div class="misDias">
	<div class="diasContados" id="diasContados">00</div>
	<div class="textoDias">dias</div>
	<div class="textoFaltan">faltan</div>
	<div class="textoSolo">solo</div>
</div>

<!-- contador -->
<div class="clock" style="margin:2em;position:absolute;"></div>
	<script type="text/javascript">
	function diferenciaEntreFechas(fecIni,fecFin)
	{
		var one_day=1000*60*60*24;
		arrayFechaIni = fecIni.split("/");
		arrayFechaFin = fecFin.split("/");
		 
		var diaI=arrayFechaIni[0]
		var mesI=(arrayFechaIni[1])
		var anoI=(arrayFechaIni[2])
		 
		var diaF=arrayFechaFin[0]
		var mesF=(arrayFechaFin[1])
		var anoF=(arrayFechaFin[2]) //le restamos un año
		 
		var fechaDateIni = new Date(anoI,mesI,diaI)
		var fechaDateFin = new Date(anoF,mesF,diaF)
		 
		Diff=Math.ceil((fechaDateIni.getTime()-fechaDateFin.getTime())/(one_day));
		if(Diff<0){
			Diff = Diff*-1;
		}
		Diff = Diff-1;
		return Diff;
	}
			var clock;			
			$(document).ready(function() {
				// Set dates.
				var futureDate  = new Date("October 23, 2015 1:00 pm EDT");
				var currentDate = new Date();
				// var mes = currentDate.getMonth()+1;
				// var FechaIni=currentDate.getDate()+"/"+mes+"/2015";
				// var diferencia = diferenciaEntreFechas(FechaIni,"23/10/2015");
				// $("#diasContados").html(diferencia);

				// Calculate the difference in seconds between the future and current date
				var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

				// Calculate day difference and apply class to .clock for extra digit styling.
				function dayDiff(first, second) {
					return (second-first)/(1000*60*60*24);
				}

				if (dayDiff(currentDate, futureDate) < 100) {
					$('.clock').addClass('twoDayDigits');
				} else {
					$('.clock').addClass('threeDayDigits');
				}

				if(diff < 0) {
					diff = 0;
				}

				// Instantiate a coutdown FlipClock
				clock = $('.clock').FlipClock(diff, {
					clockFace: 'DailyCounter',
					countdown: true
				});
			});
		</script>
<!-- FIN DEL CONTADOR -->
		<!-- <img src="<?=base_url()?>plantilla/imagen/cabecera.jpg" alt="Cabecera"> -->
		<img id="pImagen" class="l1" src="<?=base_url()?>plantilla/imagen/header/inicioSesion.png" alt="Login">
		<p class="l2"><a href="#" onclick="mover();">Registrarse</a></p>
		<img src="<?=base_url()?>plantilla/imagen/header/logo.png" alt="Logo">
		<p>La nueva feria de videojuegos</p>
		<h1>AMAZING GAME SHOW</h1>
		<div class="redes">
			<a class="redFacebook" href="https://www.facebook.com/AmazingGameShow" target="_blank"><img src="<?=base_url()?>plantilla/imagen/header/redes/facebook.png" alt="FACEBOOK" title="FACEBOOK"></a>
			<a class="redTwitter" href="https://twitter.com/AgsLatam" target="_blank"><img src="<?=base_url()?>plantilla/imagen/header/redes/twitter.png" alt="TWITTER" title="TWITTER"></a>
			<a class="redYoutube" href="https://www.youtube.com/channel/UCPjhLTqyMoiTexq2mJ8K_uw" target="_blank"><img src="<?=base_url()?>plantilla/imagen/header/redes/youtube.png" alt="YOUTUBE" title="YOUTUBE"></a>
			<a class="redLinkedin" href="https://www.linkedin.com/company/amazing-game-show" target="_blank"><img src="<?=base_url()?>plantilla/imagen/header/redes/in.png" alt="YOUTUBE" title="LINKEDIN"></a>
		</div>
		<div class="menu">
			<div class="submenuInicio" onclick="window.location.href='<?=base_url()?>';">
				inicio
			</div>
			<div id="submenuSeguidor" onmouseout="ocultar('seguidor');" onmouseover="mostrar('seguidor');" class="submenuSeguidor">
				visitante
				<div id="seguidor" class="sub1">
					<div onclick="abrir('<?=base_url()?>home/entradas#entradas')">Entradas</div>
					<div onclick="abrir('<?=base_url()?>home/feria_visitante')">Feria</div>
					<div onclick="abrir('<?=base_url()?>home/expositores_visitante')">Expositores</div>
					<div onclick="abrir('<?=base_url()?>home/programa#programas')">Programa</div>
					<div onclick="abrir('<?=base_url()?>home/sede_visitante')">Sede</div>
					<div onclick="abrir('<?=base_url()?>home/torneos')">Torneos</div>
					<div>Cosplay</div>
				</div>
			</div>
			<div id="submenuExpositor" onmouseout="ocultar('expositor');" onmouseover="mostrar('expositor');" class="submenuExpositor">
				expositor
				<div id="expositor" class="sub1">
					<div>Participe E</div>
					<div onclick="abrir('<?=base_url()?>home/feria_expositor')">Feria</div>
					<div>Expositores</div>
					<div>Sede</div>
					<div>Proveedores</div>
					<div>Transporte</div>
					<div>Hospedaje EB</div>
				</div>
			</div>
			<div id="submenuPrensa" onmouseout="ocultar('prensa');" onmouseover="mostrar('prensa');" class="submenuPrensa">
				prensa
				<div id="prensa" class="sub1">
					<div onclick="abrir('<?=base_url()?>home/feria_prensa')">Feria</div>
					<div>Expositores</div>
					<div>Noticias</div>
					<div>Sede</div>
					<div>Acreditacion</div>
				</div>
			</div>
			<div id="submenuBusiness" onmouseout="ocultar('business');" onmouseover="mostrar('business');" class="submenuBusiness">
				business
				<div id="business" class="sub1">
					<div>Participe B</div>
					<div onclick="abrir('<?=base_url()?>home/feria_business')">Feria</div>
					<div>Expositores</div>
					<div>Agenda</div>
					<div>Sede</div>
					<div>Transporte</div>
					<div>Hospedaje EB</div>
				</div>
			</div>
			<div id="submenuContacto" class="submenuContacto" onclick="abrir('<?=base_url()?>home/contacto')" >
				contacto
			</div>
		</div>
	</header>