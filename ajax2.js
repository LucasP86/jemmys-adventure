document.querySelector("#boton").addEventListener('click', traerDatos);

function traerDatos () {
	const xhttp = new XMLHttpRequest();
	xhttp.open("GET","albums.json",true);

	xhttp.send();

	xhttp.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200) {
			// console.log(this.responseText);
			let datos = JSON.parse(this.responseText);
			// console.log(datos);
			let res = document.querySelector("#res");
			res.innerHTML = "";
			for (var i of datos) {
				// console.log(datos[i].artista);
				res.innerHTML += `
					<tr>
						<td>${i.artista}</td>
						<td>${i.album}</td>
						<td>${i.año}</td>
					</tr>

				`
			}
		}
	}
}