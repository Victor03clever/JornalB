
<?php
use App\Helpers\Go;
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

          <?php 
          if($dados):
            foreach($dados as $key => $value):
          ?>
          <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="<?=Go::getPublic($value['path'])?>" class="testimonial-img" >
                  <h3><?=$value['nome']?></h3>
                  <h4>MÉDIA <?=$value['media']?></h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    <?=$value['curso']?>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>
            <!-- falta inserção de imagens -->
          <?php endforeach;
          endif;?>


            

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