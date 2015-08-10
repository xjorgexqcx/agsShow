<link rel="stylesheet" href="<?=base_url();?>plantilla/css/registro.css">
<link rel="stylesheet" href="<?=base_url();?>plantilla/css/registroResp.css">
<style>
	.asterisco {
	  color: red !important;
	  float: left;
	  font-size: 20pt !important;
	  margin-top: -41px;
	  margin-left: 56%;
	}
</style>
<div class="espacio" id="espacio">
	<img src="<?=base_url();?>plantilla/imagen/registro/<?=$frase?>" alt="Frases Amazing Game Show" alt="Frases Amazing Game Show" />
	<h2 class="tituloRegistro">
		Bienvenido a Amazing Game Show
	</h2>
	<form action="<?=base_url();?>home/register" method="post">
		<input type="text" name="nombres" placeholder=" Nombres completos" required /> <span class="asterisco">*</span>
		<input type="email" name="correo" placeholder=" Dirección de correo" required /> <span class="asterisco">*</span>
		<span>Edad</span>&nbsp; 
		<select class="checkedInput" name="edad" id="edadInput">
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
			<option value="32">32</option>
			<option value="33">33</option>
			<option value="34">34</option>
			<option value="35">35</option>
			<option value="36">36</option>
			<option value="37">37</option>
			<option value="38">38</option>
			<option value="39">39</option>
			<option value="40">40</option>
			<option value="41">41</option>
			<option value="42">42</option>
			<option value="43">43</option>
			<option value="44">44</option>
			<option value="45">45</option>
			<option value="46">46</option>
			<option value="47">47</option>
			<option value="48">48</option>
			<option value="49">49</option>
			<option value="50">50</option>
			<option value="51">51</option>
			<option value="52">52</option>
			<option value="53">53</option>
			<option value="54">54</option>
			<option value="55">55</option>
		</select>
		<span>Sexo</span>&nbsp; 
		<select class="checkedInput" name="sexo" id="sexoInput">
			<option value="Masculino">Masculino</option>
			<option value="Femenino">Femenino</option>
		</select>
		<span>Ciudad</span>&nbsp; <input class="checkedInput" type="text" name="ciudad" id="ciudadInput" />
		<span>País</span>&nbsp; <input class="checkedInput" type="text" name="pais" id="paisInput" />
		<input type="submit"value="Registrarse">
	</form>
	<br />
	<span class="rptaRegistro"><?=$rpta?></span>
	<span class="rptaError"><?=$rptaError?></span>
</div>
<div class="derechos">
<p>AGS desarrolla su política de tratamiento de datos personales en atención a los principios rectores establecidos en la Ley Nº 29733 - Ley de Protección de Datos Personales. 
<br/>Es por ello que tu información no será compartida con terceros y no será usada para fines ajenos a los de AGS y podrás decidir ser excluido(a) de este registro a sola solicitud vía correo electrónico.</p>
</div>
<script src="<?=base_url();?>plantilla/js/registro.js"></script>