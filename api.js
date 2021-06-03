const aplicacion = document.querySelector(".contenedorProductos");
const url = "https://salonrizo.com/tools/angelinebags/php/api/";
console.log(url);
fetch(url)
	.then(resp => resp.json())
	.then(data => {
		data(bolsa => {
			let img = document.createElement("div")
			img.innerHTML = bolsa.images
			const name = document.createElement("div")
			name.innerHTML = bolsa.description
			const price = document.createElement("div")
			price.innerHTML = bolsa.price
			// p.addEventListener("click", function () {
			// 	window.location.href = `./bolsa.html?id=${bolsa.id}`
			// })
		});
	})