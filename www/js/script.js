(function () {
	var hamburger = document.getElementById('hamburger');

	hamburger.onclick = function toggleNavbar() {
		var navbar = document.querySelector('nav');

		navbar.classList.toggle('open');
		this.classList.toggle('open');

		if (this.classList.contains('open')) {
			this.classList.remove('fa-bars');
			this.classList.add('fa-times');
		}
		else {
			this.classList.add('fa-bars');
			this.classList.remove('fa-times');
		}
	};
})();