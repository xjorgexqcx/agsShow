<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Amazing Game Show</title>
	<link rel="icon" type="image/ico" href="<?=base_url()?>plantilla/imagen/icono/icono.ico">
	<link rel="stylesheet" href="<?=base_url()?>plantilla/css/home.css?v=24082015css">
	<script src="<?=base_url();?>plantilla/js/jquery.js"></script>
	<script src="<?=base_url()?>plantilla/js/home.js?v=24082015js"></script>
	<script src="<?=base_url()?>plantilla/js/countdown.js"></script>
</head>
<body>
<div id="contenedor">
	<header>
<!-- contador -->
<div class="misDias">
	<div class="diasContados" id="diasContados">00</div>
	<div class="textoDias">dias</div>
	<div class="textoFaltan">faltan</div>
	<div class="textoSolo">solo</div>
</div>

<!-- contador -->
<div class="clock" style="margin:2em;position:absolute;"></div>
    <script type="text/javascript">
			var clock;			
			$(document).ready(function() {
				// Set dates.
				var futureDate  = new Date("October 23, 2015 1:00 pm EDT");
				var currentDate = new Date();

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
		<img id="pImagen" class="l1" src="<?=base_url()?>plantilla/imagen/header/inicioSesion.png" alt="Login">
		<p class="l2"><a href="#" onclick="window.location.href='<?=base_url();?>home/registro#espacio';">Regístrate</a></p>
		<img src="<?=base_url()?>plantilla/imagen/header/logo.png" alt="Logo">
		<p>Plaza San Miguel - Lima - Perú</p>
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
			<div onmouseout="ocultar('seguidor');" onmouseover="mostrar('seguidor');" class="submenuSeguidor">
				visitante
				<div id="seguidor" class="sub1">
					<div onclick="abrir('<?=base_url()?>home/entradas#entradas')">Entradas</div>
					<div onclick="abrir('<?=base_url()?>home/feria_visitante')">Feria</div>
					<div onclick="abrir('<?=base_url()?>home/expositores_visitante')">Expositores</div>
					<div onclick="abrir('<?=base_url()?>home/programa#programas')">Programa</div>
					<div onclick="abrir('<?=base_url()?>home/sede_visitante')">Sede</div>
					<div>Torneos</div>
					<div>Cosplay</div>
				</div>
			</div>
			<div onmouseout="ocultar('expositor');" onmouseover="mostrar('expositor');" class="submenuExpositor">
				expositor
				<div id="expositor" class="sub1">
					<div onclick="abrir('<?=base_url()?>home/Expositores_participe')">Participe</div>
					<div onclick="abrir('<?=base_url()?>home/feria_expositor')">Feria</div>
					<div onclick="abrir('<?=base_url()?>home/expositores_expositor')">Expositores</div>
					<div onclick="abrir('<?=base_url()?>home/sede_expositor')">Sede</div>
					<div>Proveedores</div>
				</div>
			</div>
			<div onmouseout="ocultar('prensa');" onmouseover="mostrar('prensa');" class="submenuPrensa">
				prensa
				<div id="prensa" class="sub1">
					<div onclick="abrir('<?=base_url()?>home/feria_prensa')">Feria</div>
					<div onclick="abrir('<?=base_url()?>home/expositores_prensa')">Expositores</div>
					<div>Noticias</div>
					<div>Sede</div>
					<div onclick="abrir('<?=base_url()?>home/Prensa_acreditacion')">Acreditacion</div>
				</div>
			</div>
			<div onmouseout="ocultar('business');" onmouseover="mostrar('business');" class="submenuBusiness">
				business
				<div id="business" class="sub1">
					<div>Participe</div>
					<div onclick="abrir('<?=base_url()?>home/feria_business')">Feria</div>
					<div onclick="abrir('<?=base_url()?>home/expositores_business')">Expositores</div>
					<div>Agenda</div>
					<div onclick="abrir('<?=base_url()?>home/sede_business')">Sede</div>
				</div>
			</div>
			<div class="submenuContacto" onclick="abrir('<?=base_url()?>home/contacto#espacioContacto')" >
				contacto
			</div>
		</div>
	</header>