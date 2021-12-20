window.onscroll = function () {
	scrollFunction()
};

function scrollFunction() {
	var element = document.getElementById("navbar");
	var element2 = document.getElementById("navbar-brand");
	var element3 = document.getElementById("navbarTogglerDemo02");
	if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
		element.style.height = "55px";
		element.style.boxShadow = "0 4px 8px 0 rgba(0, 0, 0, 0.2)";
		element2.style.height = "30px";
		element3.style.marginTop = "6px"
	} else {
		element.style.height = "75px";
		element.style.boxShadow = "none";
		element2.style.height = "65px";
		element3.style.marginTop = "0px"
	}
}
