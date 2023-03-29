
<?php
    require_once NAVBAR;
?>

  <main id="main">
    <!-- ======= Cabeçalho======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Quadro de Honra</h2>
        <p>Aqui estão publicados os alunos mais destacados com as médias merecidas do trimestre. </p>
      </div>
    </div><!-- fim do Cabeçalho -->

    <!-- ======= seleção dos membros ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>especial</h2>
          <p>quadro de honra</p>
        </div>
        <!-- falta inserção de imagens -->

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/gggg.jpg" class="testimonial-img" alt="gggg">
                  <h3>Clever Morais Nanga</h3>
                  <h4>MÉDIA 15,8V</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Curso técnico de informática.
                    13ª classe
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>
            <!-- falta inserção de imagens -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/ffff.jpg" class="testimonial-img" alt="ffff">
                  <h3>Victor António Lourenço</h3>
                  <h4>MÉDIA 15,4V</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Curso técnico de informática.
                    13ª classe
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- falta inserção de imagens -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/kkkk.jpg" class="testimonial-img" alt="kkkk">
                  <h3>Marizela Lourenço</h3>
                  <h4>MÉDIA 17,2V</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Curso CEJ.
                    11ª classe
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- falta inserção de imagens -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/rrrr.jpg" class="testimonial-img" alt="rrrr">
                  <h3>Larissa Patrícia</h3>
                  <h4>MÉDIA 14V</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Curso CFB
                    10ª classe
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- falta inserção de imagens -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/mmrr.jpg" class="testimonial-img" alt="mmrr">
                  <h3>Maria Jorge</h3>
                  <h4>MÉDIA 18,6V</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Curso técnico de informática.
                    12ª classe
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- fim da seleção dos membros -->

  </main><!-- fim #main -->

  <!-- ======= localização da escola e endereço ======= -->
  <?php
    require_once FOOTER;
?>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>

</html>