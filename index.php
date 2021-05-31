<?php $base_dir = dirname(__FILE__);
require "$base_dir/lib/head.php";
require "$base_dir/lib/header.php";?> 
<main>
	<div id="banner" class="carousel slide position-relative text-white" data-ride="carousel" data-interval="5000">
		<div class="carousel-inner h-100">
			<div class="carousel-item active h-100">
				<img class="lazy" data-src="<?= $base_url;?>/img/banner/mobile/01.jpg" data-retina="<?= $base_url;?>/img/banner/tablet/01.jpg" data-srcset="<?= $base_url;?>/img/banner/pc/01.jpg 1920w, <?= $base_url;?>/img/banner/tablet/01.jpg 768w, <?= $base_url;?>/img/banner/mobile/01.jpg 576w" />
				<div class="container-fluid container-md h-100 py-5">
					<div class="row align-items-end h-100">
						<div class="col-12 col-md-10 col-xl-7 text-left pb-lg-5">
							<h1 class="xl semibold mb-2">Alcoholímetro<br>Digital</h1>
							<h3 class="mb-4">Calcula tu tasa de alcohol en sangre de manera rapida y sencilla</h3>
							<div class="row alignt-items-center">
								<div class="col col-md-auto">
									<a href="" class="btn btn-third text-white scrollable w-100">Saber más</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item h-100">
				<img class="lazy" data-src="<?= $base_url;?>/img/banner/mobile/02.jpg" data-retina="<?= $base_url;?>/img/banner/tablet/02.jpg" data-srcset="<?= $base_url;?>/img/banner/pc/02.jpg 1920w, <?= $base_url;?>/img/banner/tablet/02.jpg 768w, <?= $base_url;?>/img/banner/mobile/02.jpg 576w" />
				<div class="container-fluid container-md h-100 py-5">
					<div class="row align-items-end h-100">
						<div class="col-12 col-md-10 col-xl-7 text-left pb-lg-5">
							<h1 class="xl semibold mb-2">Salud<br>y Bienestar</h1>
							<h3 class="mb-4">Conocer tus límites y no abusar del alcohol puede mejorar tu calidad de vida</h3>
							<div class="row alignt-items-center">
								<div class="col col-md-auto">
									<a href="" class="btn btn-third text-white scrollable w-100">Saber más</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item h-100">
				<img class="lazy" data-src="<?= $base_url;?>/img/banner/mobile/03.jpg" data-retina="<?= $base_url;?>/img/banner/tablet/03.jpg" data-srcset="<?= $base_url;?>/img/banner/pc/03.jpg 1920w, <?= $base_url;?>/img/banner/tablet/03.jpg 768w, <?= $base_url;?>/img/banner/mobile/03.jpg 576w" />
				<div class="container-fluid container-md h-100 py-5">
					<div class="row align-items-end h-100">
						<div class="col-12 col-md-10 col-xl-7 text-left pb-lg-5">
							<h1 class="xl semibold mb-2">Nuestro<br>Trabajo</h1>
							<h3 class="mb-4">Conoce como desarrollamos la aplicación</h3>
							<div class="row alignt-items-center">
								<div class="col col-md-auto">
									<a href="" class="btn btn-third text-white scrollable w-100">Saber más</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item h-100">
				<img class="lazy" data-src="<?= $base_url;?>/img/banner/mobile/04.jpg" data-retina="<?= $base_url;?>/img/banner/tablet/04.png" data-srcset="<?= $base_url;?>/img/banner/pc/04.jpg 1920w, <?= $base_url;?>/img/banner/tablet/04.png 768w, <?= $base_url;?>/img/banner/mobile/04.png 576w" />
				<div class="container-fluid container-md h-100 py-5">
					<div class="row align-items-end h-100">
						<div class="col-12 col-md-10 col-xl-7 text-left pb-lg-5">
							<h1 class="xl semibold mb-2">Futuros<br>Proyectos</h1>
							<h3 class="mb-4">Podrás saber como avanzan nuestros actuales proyectos o futuras ideas</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<ol class="carousel-indicators z-index-4">
			<li data-target="#banner" data-slide-to="0" class="active"></li>
			<li data-target="#banner" data-slide-to="1"></li>
			<li data-target="#banner" data-slide-to="2"></li>
			<li data-target="#banner" data-slide-to="3"></li>
	  	</ol>
	</div>

	<section id="desarrollador" class="container pb-0">
		<div class="row justify-content-between">
			<div class="col-auto pr-0"><div class="franja_vert h-100 bg-primary"></div></div>
			<div class="col">
				<div class="row justify-content-between text-left">
					<div class="col-12"><h1 class="bold text-primary mb-4">El desarrollador</h1></div>
					<div class="col-auto pr-0"><div class="franja_vert h-100 bg-secondary"></div></div>
					<div class="col section_pb">
						<h2 class="regular mb-3">Pedro Fernández García</h2>
						<p class="mb-4">Soy un estudiante que aspira a convertise en un profesional del software. Desarrolle esta idea como proyecto final del ciclo superior de Desarrollo de Aplicaciones que realizé durante 2019-2021. Me gustan los campos orientados al desarrollo web y de aplicaciones móviles, a raiz de esto nació <span class="bold">iDrunk</span>.</p>
						<a href="#contacto" class="btn btn-primary scrollable">Contacto</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="carrera" class="carrera" style="padding-top: 0rem;">
		<div class="title_franja position-relative mb-5">
			<div class="franjas_horz position-absolute z-index-1 h-100">
				<div class="row no-gutters align-items-center h-100">
					<div class="col-12 line bg-primary"></div>
					<div class="col-12 line bg-secondary"></div>
					<div class="col-12 line bg-primary"></div>
				</div>
			</div>
			<div class="container text-left">
				<h1 class="bold text-primary d-inline-block mb-0 line-stretch position-relative z-index-2">Carrera</h1>
			</div>
		</div>
		<div class="container">
			<div class="padding-left">
				<h2 class="text-left regular">Un resumen sobre la experiencia en el desarrollo y la app</h2>
				<p class="text-left">Podrás consultar información útil sobre la apliacación y el desarrollador para tener una visión mas profunda de diversos aspectos.</p>
			</div>
			<div class="row row-cols-lg-6 row-cols-1">
				<div class="col order-lg-1 position-relative py-3 mb-0 border-bottom">
					<div class="servicio_button h-100 position-relative" data-target="objetivo">
						<div class="row align-items-center justify-content-lg-center justify-content-start">
							<div class="col-auto col-lg-12">
								<figure class="icon mb-0 mb-lg-4"><?= file_get_contents("$base_dir/img/servicios/target.svg"); ?></figure>
							</div>
							<div class="col col-lg-12">
								<h2 class="semilight normal text-left text-lg-center mb-0">Objetivos</h2>
							</div>
							<div class="col-auto col-lg-12 position-static"><figure class="ver_mas"><?= file_get_contents("$base_dir/img/icons/ver_mas.svg"); ?></figure></div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-12 order-lg-2">
					<div class="desc desc_objetivo position-relative text-left">
						<div class="fondo bg-black position-absolute z-index-1"></div>
						<div class="wrapp position-relative z-index-2">
							<p class="mb-4">Los objetivos que persigue la app estan marcados por una búsqueda de ayuda social y aumentar la experiencia en el desarrollo en Android, esperando llegar a otros sistemas en un futuro próximo.</p>
							<div class="row alignt-items-center">
								<div class="col-sm-auto col">
									<a href="#contacto" class="btn btn-primary scrollable w-100">+ INFORMACIÓN</a>
								</div>
								<div class="col-sm-auto col"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col order-lg-1 position-relative py-3 mb-0 border-bottom">
					<div class="servicio_button h-100 position-relative" data-target="trabajo">
						<div class="row align-items-center justify-content-lg-center justify-content-start">
							<div class="col-auto col-lg-12">
								<figure class="icon mb-0 mb-lg-4"><?= file_get_contents("$base_dir/img/servicios/trabajos.svg"); ?></figure>
							</div>
							<div class="col col-lg-12">
								<h2 class="semilight normal text-left text-lg-center mb-0">Otros trabajos</h2>
							</div>
							<div class="col-auto col-lg-12 position-static"><figure class="ver_mas"><?= file_get_contents("$base_dir/img/icons/ver_mas.svg"); ?></figure></div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-12 order-lg-2">
					<div class="desc desc_trabajo position-relative text-left">
						<div class="fondo bg-black position-absolute z-index-1"></div>
						<div class="wrapp position-relative z-index-2">
							<p class="mb-4">A pesar de la especialización en desarrollo de aplicaciones se tiene experiencia en el campo web. Las prácticas realizadas en su grado le permitieron formar parte de grandes proyectos web en la compañia <a href="https://dssnetwork.es" class="text-primary"><u>DSS Network</u></a>.</p>
							<div class="row alignt-items-center">
								<div class="col-sm-auto col">
									<a href="https://docs.google.com/document/d/1aYj7Gm8qq2DxHXNVOOhU8u0pnDfkCnNbIHLfP_pd_rM/edit?usp=sharing" target="_blank" class="btn btn-primary scrollable w-100">EXPERIENCIA</a>
								</div>
								<div class="col-sm-auto col">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col order-lg-1 position-relative py-3 mb-0 border-bottom">
					<div class="servicio_button h-100 position-relative" data-target="idrunk">
						<div class="row align-items-center justify-content-lg-center justify-content-start">
							<div class="col-auto col-lg-12">
								<figure class="icon mb-0 mb-lg-4"><?= file_get_contents("$base_dir/img/servicios/cerveza.svg"); ?></figure>
							</div>
							<div class="col col-lg-12">
								<h2 class="semilight normal text-left text-lg-center mb-0">iDrunk</h2>
							</div>
							<div class="col-auto col-lg-12 position-static"><figure class="ver_mas"><?= file_get_contents("$base_dir/img/icons/ver_mas.svg"); ?></figure></div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-12 order-lg-2">
					<div class="desc desc_idrunk position-relative text-left">
						<div class="fondo bg-black position-absolute z-index-1"></div>
						<div class="wrapp position-relative z-index-2">
							<p class="mb-4">Esta app busca, mediante una interfaz sencilla y su uso intuitivo, ofrecer una evaluación rápida y aproximada de las condiciones de ebriedad del usuario, evaluando sus capacidades para conducir. Puedes consultar nuestros métodos y bibliografía.</p>
							<div class="row alignt-items-center">
								<div class="col-sm-auto col">
									<a href="<?= $base_url;?>/metodos" class="btn btn-primary scrollable w-100">MÉTODOS</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col order-lg-1 position-relative py-3 mb-0 border-bottom">
					<div class="servicio_button h-100 position-relative" data-target="cooperacion">
						<div class="row align-items-center justify-content-lg-center justify-content-start">
							<div class="col-auto col-lg-12">
								<figure class="icon mb-0 mb-lg-4"><?= file_get_contents("$base_dir/img/servicios/cooperacion.svg"); ?></figure>
							</div>
							<div class="col col-lg-12">
								<h2 class="semilight normal text-left text-lg-center mb-0">Cooperación</h2>
							</div>
							<div class="col-auto col-lg-12 position-static"><figure class="ver_mas"><?= file_get_contents("$base_dir/img/icons/ver_mas.svg"); ?></figure></div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-12 order-lg-2">
					<div class="desc desc_cooperacion position-relative text-left">
						<div class="fondo bg-black position-absolute z-index-1"></div>
						<div class="wrapp position-relative z-index-2">
							<p class="mb-4">La app esta en un estado muy prematuro y es capaz de mejorar mucho más, al igual que más desarrolladores nos permite ampliar nuestros horizontes, no dudes en contactarnos!</p>
							<div class="row alignt-items-center">
								<div class="col-sm-auto col">
									<a href="#contacto" class="btn btn-primary scrollable w-100">Contacto</a>
								</div>
								<div class="col-sm-auto col">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col order-lg-1 position-relative py-3 mb-0 border-bottom">
					<div class="servicio_button h-100 position-relative" data-target="futuro">
						<div class="row align-items-center justify-content-lg-center justify-content-start">
							<div class="col-auto col-lg-12">
								<figure class="icon mb-0 mb-lg-4"><?= file_get_contents("$base_dir/img/servicios/futuro.svg"); ?></figure>
							</div>
							<div class="col col-lg-12">
								<h2 class="semilight normal text-left text-lg-center mb-0">Futuro</h2>
							</div>
							<div class="col-auto col-lg-12 position-static"><figure class="ver_mas"><?= file_get_contents("$base_dir/img/icons/ver_mas.svg"); ?></figure></div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-12 order-lg-2">
					<div class="desc desc_futuro position-relative text-left">
						<div class="fondo bg-black position-absolute z-index-1"></div>
						<div class="wrapp position-relative z-index-2">
							<p class="mb-4">El desarrollo me fascina y algún día espero poder ampliar mis horizontes y conocimientos, así como formar un grupo de desarrollo profesional. Si te gusta mi trabajo puedes estar atento a las actualizaciones de esta web.</p>
							<div class="row alignt-items-center">
								<div class="col-sm-auto col">
									<a href="#contacto" class="btn btn-primary scrollable w-100">Contacto</a>
								</div>
								<div class="col-sm-auto col">
									<a href="limpiezas-especiales" class="btn btn-secondary text-primary  w-100">Saber más</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col order-lg-1 position-relative py-3 mb-0 border-bottom">
					<div class="servicio_button h-100 position-relative" data-target="personal">
						<div class="row align-items-center justify-content-lg-center justify-content-start">
							<div class="col-auto col-lg-12">
								<figure class="icon mb-0 mb-lg-4"><?= file_get_contents("$base_dir/img/servicios/personal.svg"); ?></figure>
							</div>
							<div class="col col-lg-12">
								<h2 class="semilight normal text-left text-lg-center mb-0 mb-lg-5">Pedro Fernández</h2>
							</div>
							<div class="col-auto col-lg-12 position-static"><figure class="ver_mas"><?= file_get_contents("$base_dir/img/icons/ver_mas.svg"); ?></figure></div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-12 order-lg-2">
					<div class="desc desc_personal position-relative text-left">
						<div class="fondo bg-black position-absolute z-index-1"></div>
						<div class="wrapp position-relative z-index-2">
							<p class="mb-4">Técnico en desarrollo de aplicaciones, diseñador web con experiencia (full stack), jóven, proactivo, entusiasta y con ganas de aprender... echalé un vistazo a mi CV!</p>
							<div class="row alignt-items-center">
								<div class="col-sm-auto col">
									<a href="./CV.pdf" download="Pedro Fernández CV" class="btn btn-primary scrollable w-100">DESCARGAR CV</a>
								</div>
								<div class="col-sm-auto col">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		
	<section id="contacto" class="contacto container">
		<h1 class="text-primary bold text-left">¡Hola!</h1>
		<h2 class="normal text-left">Puedes contactar conmigo si lo necesitas</h2>
		<div class="row justify-content-center mt-5 mt-md-2 pt-md-3">
			<div class="col-12 col-md-10">
				<?php require "$base_dir/lib/contacto.php"; ?>
			</div>
		</div>
	</section>
</main>
<?php require "$base_dir/lib/footer.php";
require "$base_dir/lib/foot.php";?> 
<script type="text/javascript">
	$(function(){
		$('.servicio_button').on('click', function(){
			var target = $(this).attr('data-target')
			$('.carrera .ver_mas').not($(this).find('.ver_mas')).removeClass('active')
			$(this).find('.ver_mas').toggleClass('active')
			$('.carrera .desc').not('.desc_'+target).removeClass('active')
			setTimeout(function(){
				$('.carrera .desc').not('.desc_'+target).slideUp(250)
				$('.desc_'+target).slideToggle(300).toggleClass('active')
			},150)
		})
	})
</script>