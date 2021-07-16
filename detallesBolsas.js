const aplicacion = document.querySelector(".productosCatalogo");
const getUrl = new URLSearchParams(window.location.search);
id = getUrl.get("id");
const url = "https://salonrizo.com/tools/angelinebags/php/api";

fetch(`${url}/?id=${id}`)

	.then((resp) => resp.json())

	.then((data) => {
		data[0].images.forEach((images) => {

			let container = document.createElement("div");
			container.innerHTML =
				`
    <img class="products-container__ind-img" src="${images.url}"/>
			`;

			container.classList.add("products-container__ind");
			contenedorGrafico = document.querySelector(".products-container");
			contenedorGrafico.appendChild(container);

		});

		document.querySelectorAll(".products-container img").forEach((el) => {

			el.addEventListener("click", function (ev) {
				ev.stopPropagation();

				this.parentNode.classList.add("modal_active");

				let contenedor = document.querySelector(".modal_active")
				let close_svg = document.createElement("div")

				close_svg.innerHTML =
					`
      <img class="close-modal__svg" src="media/svg/closeImg.svg"/>
    `
				close_svg.classList.add("close-modal")

				close_svg.onclick = () => {
					contenedor.classList.remove("modal_active")
				}

				contenedor.appendChild(close_svg)
			});

		});

		document.querySelectorAll(".products-container__ind").forEach((el) => {
			el.addEventListener("click", function (ev) {
				ev.stopPropagation();
				this.classList.remove("modal_active");
			});
		});
	});

fetch(`${url}/?id=${id}`)
	.then((resp) => resp.json())
	.then((data) => {
		data.forEach((bolsa) => {
			let container2 = document.createElement("div");
			container2.innerHTML =
				`
    <h2 class="desc-container__desc-name">${bolsa.description}</h2>
    <h2 class="desc-container__desc-price">$${bolsa.price}.00 MXN</h2>
			`;
			container2.classList.add("desc-container__desc");
			contenedorBolsaT = document.querySelector(".desc-container");
			contenedorBolsaT.appendChild(container2);

			let container3 = document.createElement("div");
			container3.innerHTML = `
    <table class="table-container__desc-table">
     <tr class="table-container__desc-tr">
      <td id="caract">Alto:</td>
      <td id="info">${bolsa.lenght} cms</td>
     </tr>
     <tr class="table-container__desc-tr">
      <td id="caract">Largo:</td>
      <td id="info">${bolsa.width} cms</td>
     </tr>
     <tr class="table-container__desc-tr">
      <td id="caract">Ancho:</td>
      <td id="info">${bolsa.height} cms</td>
     </tr>
     <tr class="table-container__desc-tr">
      <td id="caract">Largo del asa:</td>
      <td id="info">${bolsa.handle} cms</td>
     </tr>
     <tr class="table-container__desc-tr">
      <td id="caract">Material:</td>
      <td id="info">Toquilla</td>
     </tr>
    </table>
			`;
			container3.classList.add("table-container__desc");
			contenedorTabla = document.querySelector(".table-container");
			contenedorTabla.appendChild(container3);
		});
	});