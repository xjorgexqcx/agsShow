<link rel="stylesheet" href="<?=base_url()?>plantilla/css/contacto.css">

<h2 id="espacioContacto" class="tituloContacto">CONTACTO</h2>
	<p class="rpta"><?=$rpta?></p>
	<form class="formularioContacto" action="<?=base_url()?>home/mensaje" method="POST" >
		<input type="text" placeholder="Nombre" id="nombre" name="nombre" class="input" />
		<input type="text" placeholder="Email" id="email" name="email" class="input" />
		<input type="text" placeholder="Motivo" id="motivo" name="motivo" class="input" />
		<select>
			<option value="1" selected disabled>Dirigido al área de:</option>
				<option value="1">Administración</option>
				<option value="2">Prensa</option>
				<option value="3">Comercial</option>
		</select>
		<textarea name="mensaje" id="mensaje" cols="30" rows="10" class="textarea"></textarea>

		<input type="submit" value="Enviar Mensaje" name="Enviar" id="enviar" class="submit">
	</form> 
