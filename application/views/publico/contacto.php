<link rel="stylesheet" href="<?=base_url()?>plantilla/css/contacto.css">
<link rel="stylesheet" href="<?=base_url();?>plantilla/css/<?=$estilo?>" />

<h2 id="espacioContacto" class="tituloContacto">CONTACTO</h2>
	<p class="rpta"><?=$rpta?></p>
	<form class="formularioContacto" action="<?=base_url()?>home/mensaje" method="POST" >
		<input type="text" placeholder="Nombre" id="nombre" name="nombre" class="input" required/>
		<input type="text" placeholder="Email" id="email" name="email" class="input" required/>
		<input type="text" placeholder="Motivo" id="motivo" name="motivo" class="input" required <?=$atributos?> />
		<select name="area" required <?=$permiso?> >
			<option value="1" <?=$area0?> disabled>Dirigido al área de:</option>
			<option value="1" <?=$area1?> >Administración</option>
			<option value="2" <?=$area2?> >Prensa</option>
			<option value="3" <?=$area3?>>Comercial</option>
		</select>
		<textarea name="mensaje" id="mensaje" cols="30" rows="10" class="textarea"  placeholder="<?=$mensaje?>"></textarea>

		<input type="submit" value="Enviar Mensaje" name="Enviar" id="enviar" class="submit">
	</form>