// console.log('activo');

// # para id   . para clase
document.querySelector('#boton').addEventListener('click', traerDatos);

function traerDatos(){
	// console.log('la función funciona!');

	// 4 procesos importantes 
	/*
		lo primero es crear un objeto y solicitarlo
		function loadDoc(){
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					document.getElementById("demo").innerHTML = this.responseText;
				}
			}
			xhttp.open("GET","ajax_info.txt", true);
			xhttp.send();
		}
	*/
	const trayendo = new XMLHttpRequest();
	// open lleva 3 parametros, metodo, url del archivo, booleano true o false, referenciando a la sincronicidad = true
	trayendo.open('GET', 'notas.txt', true);
	// send simplemente ejecuta la orden de open. (similar a $sql y $datos);
	trayendo.send();

	// a esto, le falta una respuesta
	trayendo.onreadystatechange = function(){
		if ( this.readyState == 4 && this.status == 200) {
			// console.log(this.responseText);
			document.querySelector('#respuesta').innerHTML = this.responseText;
		}
	}

}