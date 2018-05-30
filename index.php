<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<title>Nutri-Fitness</title>
<link rel="shortcut icon" href="http://latinohitsradio.com/wp-content/uploads/2017/01/nutrifitness.png" />

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<!-- //font-awesome icons -->
<script src="js/jquery-1.11.1.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<div class="agileits_header">
		<div class="w3l_offers">
			<a href="index.php">Ofertas especiales!</a>
		</div>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="text" name="Product" value="Buscar producto..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
				<input type="submit" value=" ">
			</form>
		</div>
		<div class="product_list_header">  
			<form action="#" method="post" class="last">
                <fieldset>
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <input type="submit" name="submit" value="Ver carrito" class="button" />
                </fieldset>
            </form>
		</div>
		<div class="w3l_header_right">
			<div class="username">
				<?php if(isset($_SESSION["usuario"])){echo $_SESSION["usuario"]["username"]; }?>
			</div>
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu">
								<li><a href="login.php">Entrar</a></li> 
								<li><a href="login.php">Regístrate</a></li>
							</ul>
						</div>                  
					</div>	
				</li>
			</ul>
		</div>
		<div class="w3l_header_right1">
			<h2><a href="mail.php">Contáctenos</a></h2>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>
<!-- //script-for sticky-nav -->
	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php"><span> </span>Nutri-Fitness</a></h1>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>2234 6567</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">nutrifitness@gmail.com</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<li><a href="AumentoMasa.php">Aumento de Masa</a></li><!--Branded Foods-->
						<li><a href="Barritas.php">Barritas</a></li><!-- Households-->
						<li class="dropdown mega-dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Accesorios de Entrenamiento<span class="caret"></span></a><!--Veggies & Fruits-->			
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>	
										<li><a href="EntrenamientoAbdominal.php">Entrenamiento Abdominal</a></li>
										<li><a href="BandasElasticas.php">Bandas Elasticas</a></li>
										<li><a href="ColchonetasEsterillas.php">Colchonetas - Esterillas</a></li>
										<li><a href="Fitballs.php">Fitballs</a></li>
									</ul>
								</div>                  
							</div>				
						</li>
						<li><a href="ControlPeso.php">Control de Peso</a></li>
						<li><a href="Energeticos.php">Energeticos</a></li>
						<li><a href="Proteinas.php">Proteínas</a></li>
						<li><a href="VitaminasMinerales.php">Vitaminas y Minerales</a></li>
					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3l_banner_nav_right_banner">
								<div class="more">
									<a href="Proteinas.php" class="button--saqui button--round-l button--text-thick" data-text="Ver ahora">Ver ahora</a>
								</div>
							</div>
						</li>
						<li>
							<div class="w3l_banner_nav_right_banner1">
								<!--<h3>Make your <span>food</span> with Spicy.</h3>-->
								<div class="more">
									<a href="VitaminasMinerales.php" class="button--saqui button--round-l button--text-thick" data-text="Ver ahora">Ver ahora</a>
								</div>
							</div>
						</li>
						<li>
							<div class="w3l_banner_nav_right_banner2">
								<h3><i>50%</i>de descuento</h3>
								<div class="more">
									<a href="Fitballs.php" class="button--saqui button--round-l button--text-thick" data-text="Ver ahora ">Ver ahora</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>
			<!-- flexSlider -->
				<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- banner -->
	<div class="banner_bottom">
			<div class="wthree_banner_bottom_left_grid_sub">
			</div>
			<div class="wthree_banner_bottom_left_grid_sub1">
				<div class="col-md-4 wthree_banner_bottom_left">
					<div class="wthree_banner_bottom_left_grid">
						<img src="images/4.jpg" alt=" " class="img-responsive" />
						<div class="wthree_banner_bottom_left_grid_pos">
							<h4>Descuentos con mas de un  <span>25%</span></h4>
						</div>
					</div>
				</div>
				<div class="col-md-4 wthree_banner_bottom_left">
					<div class="wthree_banner_bottom_left_grid">
						<img src="images/5.jpg" alt=" " class="img-responsive" />
						<!--<div class="wthree_banner_btm_pos">
							<h3>introducing <span>best store</span> for <i>groceries</i></h3>
						</div>-->
					</div>
				</div>
				<div class="col-md-4 wthree_banner_bottom_left">
					<div class="wthree_banner_bottom_left_grid">
						<img src="images/6.jpg" alt=" " class="img-responsive" />
						<!--<div class="wthree_banner_btm_pos1">
							<h3>Save <span>Upto</span> $10</h3>
						</div>-->
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
	</div>
<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Recomendaciones para mejorar tu salud </h3>
			<div class="agile_top_brands_grids">
				<h4> •Realizar una dieta variada y equilibrada:</h4>
				<p><font-size="16px">¿Por qué? Pues porque ningún alimento nos aporta todos los nutrientes y por tanto necesitamos tomar distintos tipos de alientos. Come de todo pero no en grandes cantidades.</font></p>
				<br><br><h4>•Realiza 5 o 6 comidas al día: </h4>
				<p>No por comer con menor frecuencia va a ser peor, pero tenemos tendencia a consumir más kcal si hacemos 3 comidas al día que si hacemos 5 debido a que cuando realizamos 3 comidas llegamos con mucha hambre y tendemos a comer más, por tanto es mejor comer 5 o 6 veces al día pero menos alimentos. Si tú te estructuras y tomas las mismas kcal 3 veces al día no hay problema en que lo hagas así ya que cuenta el sumatorio de kcal totales a lo largo del día, aunque no recomendamos una frecuencia tan baja.</p>
				<br><br><h4>•Incluir alimentos ricos en fibra: </h4>
				<p>Debemos ingerir entre 25-30g de fibra al dia, para el perfecto tránsito intestinal. No te preocupes la fibra no te hará engordar ya que no la asimilamos. Ingiere por tanto alimentos con alto contenido en fibra como la fruta, verdura, legumbres, frutos secos, pan, pasta o arroz (mejor si los cereales son integrales). Además parece ser que el uso de fibra juntos con los llamados probióticos (yogures) mejoran el estado inmunitario general. Algo muy interesante en deportistas que entrenan con mucha intensidad ya que éste suele estar deprimido.</p>
				<br><br><h4>•Entre fruta y verdura será suficiente tomar al día 5 raciones: </h4>
				<p>Una sandía no es una ración, y una uva tampoco, así que pensemos con lógica. Un truco muy bueno es generar el hábito de tomar una fruta como postre en la comida y cena, ya solo queda tomar una ensalada a lo largo del día y tendríamos cubiertas nuestras necesidades.</p>
				<br><br><h4>•Limita las grasas: </h4>
				<p>Un buen aceite es el de oliva virgen. Sin embargo debemos evitar las grasas saturadas y colesterol, muy común en grasas de origen animal y salsas grasas. Quiero aclarar que las grasas saturadas no son malas, solo hay que tomarlas en su justa medida. Lo que pasa es que nuestros hábitos alimentación abundan demasiado este tipo de grasas, por eso digo intentar evitarlas. Por esto recomendamos lácteos y quesos descremados, carnes poco grasas como la del pollo, pavo o conejo y consumir pescado, preferiblemente blanco.</p>
				<br><br><h4>•Escapa de la “comida basura”: </h4>
				<p>Golosinas, snacks, bollería industrial, etc….</p>
				<br><br><h4>•Bebe mucha agua: </h4>
				<p>Importantísimo el agua como fuente principal de líquidos. Podemos controlarla mediante el volumen y color de la orina. Se recomienda pesarse antes y después de la práctica deportiva y tomarse esa diferencia de peso en agua, e incluso un poco más para asegurar la hidratación, por ejemplo si la diferencia entre antes y después de realizar ejercicio físico es 1kg nos tomaremos en las próximas horas 1-1,5l de agua.</p>				
				<br><br><h4>•Vamos a intentar reducir el consumo de (CH) simples: </h4>
				<p>El porcentaje de carbohidratos simples en relación al total de carbohidratos ingeridos debe ser inferior al 10%. Sabemos que cumplir esto es complicado pero podemos sustituir los CH simples por complejos tales como el pan, pasta, cereales , arroz, legumbres, maíz , avena , etc.</p>
				<br><br><h4>•Moderar la sal y las especias fuertes: </h4>
				<p>Estimulan tu apetito y te crean el hábito de comer más. Además produce hipertensión y acumulación de líquidos (agua) dentro de tu cuerpo. Si desde el principio nos acostumbramos a este hábito no nos costara comer con poca sal. Es complicado quitarse el “gusto por lo salado” una vez adquirido.</p>
				<br><br><h4>•Evitar el consumo de alcohol: </h4>
				<p>estos contienen kcal vacías que nuestro organismo no utiliza en su metabolismo almacenándose como grasa. El alcohol es diurético (contrario a la hidratación) y tóxico y por tanto perjudica nuestra salud. ¡Cuidado con los cubatas de los fines de semana!</p>
				<br><br><h4>Reglas básicas en el menú de los deportistas:</h4>
				<p>
•	Dieta variada.</p><p>
•	Dieta rica en CHO, principalmente CHO complejos.</p><p>
•	Aporte adecuado de proteínas según deporte e intensidad: nos referimos a los gramos de proteína/Kg de peso al día. Las personas sedentarias deberían tomar 0,8g, corredores de fondo 1,3g, y halterófilos 2g. Todo depende del tipo de actividad que realices, su intensidad y tus necesidades. No son valores fijos, pero es para que te hagas una idea ya que el sentido común nos dice que una persona con obesidad que practique su media hora de trabajo con pesas no se va a meter 2g sino seguramente tenga que bajarse la dosis a 1-1,5, o incluso menos.</p><p>
•	Ingesta adecuada de lípidos de buena calidad, grasas mono y poliinsaturados. Limitando las saturadas a la cantidad correcta. Suele ser la proporción de 3/1 de grasas insaturadas y saturadas.</p><p>
•	Consumo abundante de agua.</p><p>
•	Tener en cuenta alimentos funcionales.</p><p>
•	Protocolizar las comidas: no solo en el día a día, sino también a lo largo de una prueba deportiva de larga duración.</p><p>
•	Establecimiento de una dieta equilibrada.</p><p>
•	Combinar horarios de entrenamiento/competición e ingestas.</p><p>
•	Asegurar la reposición de lo perdido durante la actividad, asegurando una buena recuperación para una sesión posterior: la recuperación tras una sesión de ejercicio es la pieza clave para el progreso. Aquí la nutrición juega un papel fundamental.
</p>
			</div>
				
				
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //top-brands -->
<!-- fresh-vegetables -->
	
<!-- //fresh-vegetables -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-6 w3_footer_grid">
				<h3>Información</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="about.php">Sobre nosotros</a></li>
				</ul>
			</div>
			<div class="col-md-6 w3_footer_grid">
				<h3>Politicas del sitio</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="privacy.php">Politicas de privacidad</a></li>
					<li><a href="privacy.php">Equipo de trabajo</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<div class="agile_footer_grids">
				<div class="col-md-6 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h4>100% seguridad en pagos</h4>
						<img src="images/card.png" alt=" " class="img-responsive" />
					</div>
				</div>
				<div class="col-md-6 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h5>Conectate a nuestra redes sociales</h5>
						<ul class="agileits_social_icons">
							<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="wthree_footer_copy">
				<p>© 2018 Nutri-Fitness. Todos los derechos reservados | Creada para la Globalizacion por  <a href="http://w3layouts.com/">Angelica,Carolina,Liseth</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.js"></script>
<script>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 1) {
				alert('La cantidad minima para realizar la compra es de 1 productos. Por favor ingresa mas productos al carrito para poder realizar su pedido');
				evt.preventDefault();
			}
		});

	</script>
</body>
</html>
