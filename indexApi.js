const url = "https://salonrizo.com/tools/angelinebags/php/api/";
fetch(url)
	.then(resp => resp.json())
	.then(data => {
		data.forEach(bolsa => {
			let container = document.createElement("div")
			container.innerHTML =
				`
				<a href="detallesBolsas.html?id=${bolsa.id}">
					<img class="products-container__ind-img" src="${bolsa.images[0].url}">
				</a>
				<div class="products-container__ind-desc">
					<p>${bolsa.description}</p>
					<p>$${bolsa.price}.00 MXN</p>
				</div>
				<div class = "products-container__ind-button">
					<a class="products-container__ind-button-a" href = "detallesBolsas.html?id=${bolsa.id}"> Ver detalles
     </a>
				</div>
				`;
			container.classList.add("products-container__ind");
			productosCatalogo = document.querySelector(".products-container")
			productosCatalogo.appendChild(container);
		});
	})