<?php get_header(); ?>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	            <div class="grid col-xs-12 col-sm-12 col-md-12 col-lg-12">
		            <section id="least">
						<ul class="col-xs-12 col-sm-10 col-md-4 col-lg-3 least-gallery">
								<li class="no-border-bottom">
									<a  data-subtitle="Frijoles Refritos Negros" data-caption="">
										<div class="cube">
									      <div class="side front"><img src="http://socket.masvector.com/chata/wp-content/themes/chata/img/frijoles.png"/></div>
									      <div class="side right"><img src="http://socket.masvector.com/chata/wp-content/themes/chata/img/logo_tiendaschata.png"/></div>
									    </div>
									</a>
								</li>
								<li class="no-border-top">
									<a data-subtitle="Queso Fresca" data-caption="" >
										<div class="cube">
									      <div class="side front"><img src="http://socket.masvector.com/chata/wp-content/themes/chata/img/queso_fresco.png"/></div>
									      <div class="side right"><img src="http://socket.masvector.com/chata/wp-content/themes/chata/img/logo_tiendaschata.png"/></div>
									    </div>
									</a>
								</li>
						</ul>
						<ul class="col-xs-12 col-sm-10 col-md-4 col-lg-3 least-gallery separar">
								<li>
									<a data-subtitle="Salchicha de Pavo" data-caption="" >
										<div class="cube">
									      <div class="side front"><img src="http://socket.masvector.com/chata/wp-content/themes/chata/img/jamon_virginia.png"/></div>
									      <div class="side right"><img src="http://socket.masvector.com/chata/wp-content/themes/chata/img/logo_tiendaschata.png"/></div>
									    </div>
									</a>
								</li>
								<li>
									<a data-subtitle="Pozole" data-caption="">
										<div class="cube">
									      <div class="side front"><img src="http://socket.masvector.com/chata/wp-content/themes/chata/img/pozole.jpg"/></div>
									      <div class="side right"><img src="http://socket.masvector.com/chata/wp-content/themes/chata/img/logo_tiendaschata.png"/></div>
									    </div>
									</a>
								</li>
						</ul>
						<ul class="col-xs-12 col-sm-10 col-md-4 col-lg-3 least-gallery separar">
								<li>
									<a data-subtitle="Menudo Rojo" data-caption="" >
										<div class="cube">
									      <div class="side front"><img src="http://socket.masvector.com/chata/wp-content/themes/chata/img/menudo.jpg"/></div>
									      <div class="side right"><img src="http://socket.masvector.com/chata/wp-content/themes/chata/img/logo_tiendaschata.png"/></div>
									    </div>
									</a>
								</li>
								<li>
									<a  data-subtitle="Pollo En Mole" data-caption="" >
										<div class="cube">
									      <div class="side front"><img src="http://socket.masvector.com/chata/wp-content/themes/chata/img/mole.png"/></div>
									      <div class="side right"><img src="http://socket.masvector.com/chata/wp-content/themes/chata/img/logo_tiendaschata.png"/></div>
									    </div>
									</a>
								</li>
						</ul>
						<ul class="col-xs-12 col-sm-10 col-md-4 col-lg-3 least-gallery">
								<li class="no-border-bottom">
									<a  data-subtitle="Requeson" data-caption="" >
										<div class="cube">
									      <div class="side front"><img src="http://socket.masvector.com/chata/wp-content/themes/chata/img/requeson.png"/></div>
									      <div class="side right"><img src="http://socket.masvector.com/chata/wp-content/themes/chata/img/logo_tiendaschata.png"/></div>
									    </div>
									</a>
								</li>
								<li class="no-border-top">
									<a  data-subtitle="Tocino" data-caption="" >
										<div class="cube">
									      <div class="side front"><img src="http://socket.masvector.com/chata/wp-content/themes/chata/img/tocino.png"/></div>
									      <div class="side right"><img src="http://socket.masvector.com/chata/wp-content/themes/chata/img/logo_tiendaschata.png"/></div>
									    </div>
									</a>
								</li>
						</ul>
					</div>
				</section>			
			</div>
			<script>
				$(document).ready(function(){
				    $('.least-gallery').least();
				    
				    $('ul.least-gallery li').hover(function(){
					    $(this).find('a div.cube').addClass('animar-cubo');
				    }, function(){
					    $(this).find('a div.cube').removeClass('animar-cubo');
					    $(this).find('a div.cube').addClass('animar-cubo-reverse');
				    })
				    
				    $('.cube img').each(function(){
						$(this).css({'margin-top':(300-$(this).height())*0.5+'px'});
					});	
				});
			</script>
<?php get_footer(); ?>
