<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administración AGS</title>
	<link rel="stylesheet" href="<?=base_url();?>plantilla/css/adm/index.css" />
</head>
<body>
	<div class="titulo">
		<h1>Administrable Amazing Game Show</h1>
		<br/>
		<a href="<?=base_url();?>admin/cerrarSesion">Cerrar Sessión</a>
	</div>	
	<div class="opcionesMenu">
		<div class="contenedorMenu" id="usuario">
			<div class="imagenMenu">
				<img onclick="window.location.href='<?=base_url();?>admin/usuarios'" src="<?=base_url();?>plantilla/imagen/adm/index/usuarios.png" alt="Usuarios Amazing Game Show" title="USUARIOS">
			</div>
			<br/>
			<div class="textoMenu">
				Usuarios
			</div>
		</div>
		<div class="contenedorMenu">
			<div class="imagenMenu">
				<img src="<?=base_url();?>plantilla/imagen/adm/index/noticias.png" alt="Usuarios Amazing Game Show" title="NOTICIAS AGS">
			</div>
			<br/>
			<div class="textoMenu">
				Noticias AGS
			</div>
		</div>
		<div class="contenedorMenu">
			<div class="imagenMenu">
				<img src="<?=base_url();?>plantilla/imagen/adm/index/marcas.png" alt="Usuarios Amazing Game Show" title="USUARIOS">
			</div>
			<br/>
			<div class="textoMenu">
				Marcas
			</div>
		</div>
		<div class="contenedorMenu">
			<div class="imagenMenu">
				<img src="<?=base_url();?>plantilla/imagen/adm/index/torneos.png" alt="Usuarios Amazing Game Show" title="USUARIOS">
			</div>
			<br/>
			<div class="textoMenu">
				Torneos/Cosplay
			</div>
		</div>
	</div>
</body>
</html>