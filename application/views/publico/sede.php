<link rel="stylesheet" href="<?=base_url();?>plantilla/css/<?=$estilo?>" />
<style>
	.mapa{
		width: 68%;
		margin: 0 auto;
	}
	.mapa img{
		width: 68.4%;
		max-width: 1190px;
		position: absolute;
	}
	.frameMapa{
		width: 100%;
		z-index: 1;
		height: 280px;
	}
	.i1{
		margin-left: 3px;
	}
	.i2{
		margin-left: 3px;
	}
	@media(min-width: 1300px){
		.mapa{
			width: 75%;
		}
		.mapa img {
    		width: 75.2%;
    	}
    	.frameMapa {
    		height: 420px;
		}
	}
</style>
<div class="fechas">
	<img src="<?=base_url();?>plantilla/imagen/body/sede/sedeTitulo.jpg" alt="">
</div>
<div class="contenido">
	<h2>Centro de Convenciones y Eventos de Plaza San Miguel.</h2>
	<p>Ubicado en el céntrico distrito de San Miguel, forma parte de uno de los centros comerciales más importantes de la capital. Con más de 250,000 visitantes por semana, Plaza San Miguel brinda un universo completo de atracciones y propuestas al público. Muy importantes producciones y eventos se realizan en este recinto que cuenta con un área de 2500 mts cuadrados y su accesibilidad es completa al estar ubicado en la intersección de las Avenidas La Marina y Universitaria, un espacio ideal para el encuentro con el consumidor.</p>
</div>
<br/>
<div class="mapa">
	<img src="<?=base_url();?>plantilla/imagen/body/sede/subTitulo.jpg" alt="SubTitulo">
	<iframe class="frameMapa" src="https://www.google.com/maps/d/u/0/embed?mid=zqreBvAfYNEg.kIuuY5c27p9M"></iframe>
</div>