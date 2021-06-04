const url = "https://salonrizo.com/tools/angelinebags/php/api/";
fetch(url)
	.then(resp => resp.json())
	.then(data => {
		data.forEach(bolsa => {
			console.log(data);
			let container = document.createElement("div")
			container.innerHTML =
				`
				<div class="contenedorProductos">
					<div class="contenedorProductosImg">
						<a href="detallesBolsas.html?id=${bolsa.id}">
							<img src="${bolsa.images[0].url}">
						</a>
					</div>
					<div class="contenedorProductosTexto">
						<div class="contenedorProductosP">
							<p>${bolsa.description}</p>
							<p>$${bolsa.price}.00 MXN</p>
						</div>
					</div>
					<div class = "contenedorBotonDetalles">
						<a href = "detallesBolsas.html?id=${bolsa.id}">
       <button>Ver detalles</button>
      </a>
					</div>
				</div>
				`;
			container.classList.add("contenedorCatalogoProductos");
			productosCatalogo = document.querySelector(".productosCatalogo")
			productosCatalogo.appendChild(container);
		});
	})