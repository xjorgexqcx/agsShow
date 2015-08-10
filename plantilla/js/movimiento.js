function mover(){
	var elemento = document.getElementById("fondoInicioSesion");
	// var posi = elemento.offsetLeft;
	var posi = elemento.style.marginLeft+100px;
	// var posi = document.getElementById("pImagen").offsetLeft;
	// alert("Mostrando Posicion: "+posi);
	if(bandera === 1){
		bandera = 0;
		// var contador=56;
		contador = posi;
		var tamanio = 218.2;
		var intervalo = setInterval(function()
			{
				contador = contador+10;
				//tamanio = tamanio-5.8;
				tamanio = tamanio -6;
			 	// elemento.style.marginLeft = contador + "%";
			 	elemento.style.marginLeft = contador + "px";
			 	elemento.style.width = tamanio+"px";
			 	if(contador >= posi+200){
			 		clearInterval(intervalo);
			 	}
			}, 30);
	}
	else{
		if(bandera === 0){
			bandera = 1;
			var contador=75;
			var tamanio = 108;
			var intervalo = setInterval(function()
				{
					contador--;
					tamanio = tamanio + 5.8;
				 	elemento.style.marginLeft = contador + "%";
				 	elemento.style.width = tamanio + "px";
				 	if(contador == 56){
				 		clearInterval(intervalo);
				 	}
				}, 30);
		}
	}
}