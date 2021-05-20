window.onscroll = function () {
	scrollFunction();
};

function scrollFunction() {
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		flechaArriba.classList = "active";
	} else {
		flechaArriba.classList = "inactive";
	}
}