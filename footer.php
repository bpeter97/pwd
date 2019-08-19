<button onclick="topFunction()" id="scrollToTopButton" title="Go to top"><i class="fas fa-arrow-up"></i></button>

<!-- Optional JavaScript -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
	 crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
	 crossorigin="anonymous"></script>

	<!-- Typewriter Effect -->
	<script type="text/javascript">
		var TxtRotate = function (el, toRotate, period) {
			this.toRotate = toRotate;
			this.el = el;
			this.loopNum = 0;
			this.period = parseInt(period, 10) || 2000;
			this.txt = "";
			this.tick();
			this.isDeleting = false;
		};

		TxtRotate.prototype.tick = function () {
			var i = this.loopNum % this.toRotate.length;
			var fullTxt = this.toRotate[i];

			if (this.isDeleting) {
				this.txt = fullTxt.substring(0, this.txt.length - 1);
			} else {
				this.txt = fullTxt.substring(0, this.txt.length + 1);
			}

			this.el.innerHTML = '<span class="wrap">' + this.txt + "</span>";

			var that = this;
			var delta = 300 - Math.random() * 100;

			if (this.isDeleting) {
				delta /= 2;
			}

			if (!this.isDeleting && this.txt === fullTxt) {
				delta = this.period;
				this.isDeleting = true;
			} else if (this.isDeleting && this.txt === "") {
				this.isDeleting = false;
				this.loopNum++;
				delta = 500;
			}

			setTimeout(function () {
				that.tick();
			}, delta);
		};

		window.onload = function () {
			var elements = document.getElementsByClassName("txt-rotate");
			for (var i = 0; i < elements.length; i++) {
				var toRotate = elements[i].getAttribute("data-rotate");
				var period = elements[i].getAttribute("data-period");
				if (toRotate) {
					new TxtRotate(elements[i], JSON.parse(toRotate), period);
				}
			}
			// INJECT CSS
			var css = document.createElement("style");
			css.type = "text/css";
			css.innerHTML =
				".txt-rotate > .wrap { border-right: 0.08em solid #0069d9 }";
			document.body.appendChild(css);
		};
	</script>

	<!-- Navbar Schrinking Effect -->
	<script type="text/javascript">
		// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size

		let width = window.innerWidth;

		if (width > 1300) {
			window.onscroll = function () {
				document.getElementById("scrollToTopButton").style.right = "24px";
				showScrollToTop();
				scrollFunction();
			}
		} else {
			window.onscroll = function () {
				document.getElementById("scrollToTopButton").style.right = "32px";
				showScrollToTop();
			}
			document.getElementById("mainNav").style.padding = ".4rem 1rem";
			document.getElementById("mainNav").style.fontSize = "18px";
			document.getElementById("navbarBrand").style.fontSize = "24px";
			if (width < 1210) {
				document.getElementById("headerSection").style.marginTop = "30px";
			} else {
				document.getElementById("headerSection").style.marginTop = "30px";
			}
			if (width < 768) {
				document.getElementById("headerCol").style.paddingTop = "80px";
			}
		}

		function showScrollToTop() {
		if (
				document.body.scrollTop > 50 ||
				document.documentElement.scrollTop > 50
			) {
				document.getElementById("scrollToTopButton").style.opacity = "100";
			} else {
				document.getElementById("scrollToTopButton").style.opacity = "0";
			}
		}

		function scrollFunction() {
			if (
				document.body.scrollTop > 50 ||
				document.documentElement.scrollTop > 50
			) {
				document.getElementById("mainNav").style.padding = ".4rem 1rem";
				document.getElementById("mainNav").style.fontSize = "18px";
				document.getElementById("navbarBrand").style.fontSize = "24px";
				// document.getElementById("scrollToTopButton").style.opacity = "100";
			} else {
				document.getElementById("mainNav").style.padding = "2rem 1rem";
				document.getElementById("mainNav").style.fontSize = "24px";
				document.getElementById("navbarBrand").style.fontSize = "30px";
				// document.getElementById("scrollToTopButton").style.opacity = "0";
			}
		}
	</script>

	<script>
		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}
	</script>

	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
		var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
		(function () {
			var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
			s1.async = true;
			s1.src = 'https://embed.tawk.to/5d51770677aa790be32e8b2e/1di37p2fq';
			s1.charset = 'UTF-8';
			s1.setAttribute('crossorigin', '*');
			s0.parentNode.insertBefore(s1, s0);
		})();
	</script>
	<!--End of Tawk.to Script-->
</body>

</html>