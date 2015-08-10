
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AGS | Login</title>
	<link rel="stylesheet" href="<?=base_url();?>plantilla/css/adm/login.css" />
	<link rel="stylesheet" href="<?=base_url();?>plantilla/css/adm/mdl.css" />
	<script src="<?=base_url();?>plantilla/js/adm/mdl.js"></script>
</head>
<body>
<div class="formulario">
	<form action="<?=base_url();?>admin/verifica" method="post">
	  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
	    <input class="mdl-textfield__input" type="text" id="usu" name="usuario" />
	    <label class="mdl-textfield__label" for="usu">Usuario</label>
	  </div>
	  <br />
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
		  <input class="mdl-textfield__input" type="password" id="clave" name="clave" />
		  <label class="mdl-textfield__label" for="clave">Clave</label>
		</div>
		<br />
		<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" value="Verificar" name="verificar">
	</form>
</div>
<br/>
<div style="color:#FFF700;text-align:center"><?= $rpta?></div>
</body>
</html>