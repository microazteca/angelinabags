window.onscroll = function () {
	scrollFunction();
};

function scrollFunction() {
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		arrowTop__svg.classList = "active";
	} else {
		arrowTop__svg.classList = "inactive";
	}
}