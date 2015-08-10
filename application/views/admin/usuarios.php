<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administrable | Usuarios</title>
	<link rel="stylesheet" href="<?=base_url();?>plantilla/css/adm/index.css" />
	<link rel="stylesheet" href="<?=base_url();?>plantilla/css/adm/mdl.css" />
	<script src="<?=base_url();?>plantilla/js/adm/mdl.js"></script>
	<style>
		.cantidad{
			color: white;
		}
	</style>
</head>
<body>
<div class="atras">
	<img onclick="window.location.href='<?= base_url()?>admin/principal'" id="tt1" src="<?=base_url();?>plantilla/imagen/adm/usuarios/atras.png" alt="Retroceder">
</div>
<div class="mdl-tooltip" for="tt1">
		Regresar al menú principal
	</div>
<div class="descarga">
	<a href="<?=base_url();?>admin/getExcel">
		<button id="tt4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
	  		Descargar
		</button>
	</a>
	<div class="mdl-tooltip" for="tt4">
		Haz click para descargar la información
	</div>
	<p class="cantidad">Total Registrados: <?=$cantidad?></p>
</div>
<table id="tabla" class="mdl-data-table mdl-js-data-table">
  <thead>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Código</th>
      <th>Nombres</th>
	  <th>Email</th>
	  <th>Edad</th>
	  <th>Género</th>
	  <th>Ciudad</th>
	  <th>País</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($ltaUsuarios->result() as $usuario) { ?>
		<tr>
			<td class="mdl-data-table__cell--non-numeric"> <?= $usuario->id ?></td>
			<td> <?= ucfirst($usuario->nombres); ?></td>
			<td> <?= $usuario->email ?></td>
			<td> <?= $usuario->edad ?></td>
			<td> <?= ucfirst($usuario->genero); ?></td>
			<td> <?= ucfirst($usuario->ciudad); ?></td>
			<td> <?= ucfirst($usuario->idPais); ?></td>
		</tr>
	<?php
	}
	?>
  </tbody>
</table>
</body>
</html>