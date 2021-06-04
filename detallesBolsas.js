const aplicacion = document.querySelector('.productosCatalogo');
const getUrl = new URLSearchParams(window.location.search)
id = getUrl.get('id')
const url = 'https://salonrizo.com/tools/angelinebags/php/api';
fetch(`${url}/?id=${id}`)
	.then(resp => resp.json())
	.then(data => {
		data[0].images.forEach(images => {
			let container = document.createElement("div")
			container.innerHTML =
				`
    <div class="contenedorBolsaImagenes">
     <div class="contenedorIndBolsa">
      <div class="contenedorImgBolsa">
       <img src="${images.url}"/>
      </div>
     </div>
    </div>
			`;
			container.classList.add("contenedorBolsaApi");
			contenedorGrafico = document.querySelector(".contenedorBolsaGrafico")
			contenedorGrafico.appendChild(container);
		});
	})
fetch(`${url}/?id=${id}`)
	.then(resp => resp.json())
	.then(data => {
		data.forEach(bolsa => {
			let container2 = document.createElement("div")
			container2.innerHTML =
				`
				<div class="contenedorBolsaTextos">
    	<div class="contenedorBolsaNombre">
     	<h2>${bolsa.description}</h2>
    	</div>
    	<div class="contenedorBolsaPrecio">
     	<h2>$${bolsa.price}.00 MXN</h2>
    	</div>
				</div>
			`
			container2.classList.add("contenedorBolsaTextos");
			contenedorBolsaT = document.querySelector(".contenedorBolsaTitulo")
			contenedorBolsaT.appendChild(container2);

			let container3 = document.createElement("div")
			container3.innerHTML =
				`
			<div class="contenedorCaracteristicasTabla">
    <table>
     <tr>
      <td id="caract">Alto:</td>
      <td id="info">${bolsa.lenght} cms</td>
     </tr>
     <tr>
      <td id="caract">Largo:</td>
      <td id="info">${bolsa.width} cms</td>
     </tr>
     <tr>
      <td id="caract">Ancho:</td>
      <td id="info">${bolsa.height} cms</td>
     </tr>
     <tr>
      <td id="caract">Largo del asa:</td>
      <td id="info">${bolsa.handle} cms</td>
     </tr>
     <tr>
      <td id="caract">Material:</td>
      <td id="info">Toquilla</td>
     </tr>
    </table>
   </div>
			`;
			container3.classList.add("contenedorCaracteristicasTabla");
			contenedorTabla = document.querySelector(".contenedorCaracteristicas")
			contenedorTabla.appendChild(container3);
		});
	})