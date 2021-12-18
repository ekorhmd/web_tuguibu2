window.onscroll = function () {
	scrollFunction()
};

function scrollFunction() {
	if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
		var element = document.getElementById("navbar");
		element.style.height = "55px";
		element.style.boxShadow = "0 4px 8px 0 rgba(0, 0, 0, 0.2)";
	} else {
		var element = document.getElementById("navbar");
		element.style.height = "75px";
		element.style.boxShadow = "none";
	}
}
