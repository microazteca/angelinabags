// document.getElementsByClassName(".imgBolsas").onclick= function() {abrirModal()};

// function abrirModal() {
// 	document.querySelectorAll(".contenedorImgBolsa img").classList.add("modal_active")
// 	console.log(abrirModal);
// }

	document.querySelectorAll(".contenedorImgBolsa img").forEach(el => {
		el.addEventListener("click", function (ev) {
			ev.stopPropagation();
			this.parentNode.classList.add("modal_active");
			alert("click")
		})
	});

	document.querySelectorAll(".contenedorImgBolsa").forEach(el => {
		el.addEventListener("click", function (ev) {
			this.classList.remove("modal_active");
		})
	})