var mibandera = 0;
function mostrarMapa (){
	var elemento = document.getElementById("mapa");
	if(mibandera === 1){
		mibandera = 0;
		var tamanio = 268;
		var intervalo = setInterval(function()
			{
				tamanio = tamanio-4;
			 	elemento.style.height = tamanio+"px";
			 	if(tamanio == 0){
			 		clearInterval(intervalo);
			 	}
			}, 5);
	}
	else{
		if(mibandera === 0){
			mibandera = 1;
			var tamanio = 0;
			var intervalo = setInterval(function()
				{
					tamanio = tamanio + 4;
				 	elemento.style.height = tamanio + "px";
				 	if(tamanio == 268){
				 		clearInterval(intervalo);
				 	}
				}, 5);
		}
	}
}
