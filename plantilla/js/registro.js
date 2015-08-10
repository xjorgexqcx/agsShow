var edad = document.getElementById("edad");
var sexo = document.getElementById("sexo");
var ciudad = document.getElementById("ciudad");
var pais = document.getElementById("pais");
 edad.addEventListener("click",doEdad);
 sexo.addEventListener("click",doSexo);
 ciudad.addEventListener("click",doCiudad);
 pais.addEventListener("click",doPais);
 function doEdad(){
 	var miEdad = document.getElementById("edadInput");
	if(edad.checked == false){
 		miEdad.disabled = true;
 		miEdad.style.background = "#BCBCBC";
 	}
 	else{
 		miEdad.disabled = false;
 		miEdad.style.background = "white";
 	}
 }
 function doSexo(){
 	var miSexo = document.getElementById("sexoInput");
 	if(sexo.checked == false){
 		miSexo.disabled = true;
 		miSexo.style.background = "#BCBCBC";
 	}
 	else{
 		miSexo.disabled = false;
 		miSexo.style.background = "white";
 	}
 }
 function doCiudad(){
 	var miCiudad = document.getElementById("ciudadInput");
 	if(ciudad.checked == false){
 		miCiudad.disabled = true;
 		miCiudad.style.background = "#BCBCBC";
 	}
 	else{
 		miCiudad.disabled = false;
 		miCiudad.style.background = "white";
 	}
 }
 function doPais(){
 	var miPais=document.getElementById("paisInput");
 	if(pais.checked == false){
 		miPais.disabled = true;
 		miPais.style.background = "#BCBCBC";
 	}
 	else{
 		miPais.disabled = false;
 		miPais.style.background = "white";
 	}
 }
