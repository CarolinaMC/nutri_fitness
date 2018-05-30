<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<title>NutriFitness</title>
<link rel="shortcut icon" href="http://latinohitsradio.com/wp-content/uploads/2017/01/nutrifitness.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<script src="js/jquery-1.11.1.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
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
</head>
<body>
<!-- header -->
	<div class="agileits_header">
		<div class="w3l_offers" >
			<a href="index.php">Ofertas especiales!</a>
		</div>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="text" name="Product" value="Buscar producto..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Buscar producto';}" required="">
				<input type="submit" value=" ">
			</form>
		</div>
		<div class="product_list_header">  
            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
						<fieldset>
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
						">
						<!--<input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_viewcart_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">-->
						<input type="submit" name="submit" value="Ver carrito      " class="button" />
						<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
						</fieldset>
					</form>
		 </div>
		<div class="w3l_header_right1">
			<h2><a href="mail.php">Contáctenos</a></h2>
		</div>
		
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
				<h1><a href="index.php"><span></span> <img src="images/nutrifitnes2.png" alt=" " class="img-responsive" width="60%" height="30%"/></a></h1>
			</div>
			<div><br><br></div>
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>2234 6567</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">nutrifitnessweb3@gmail.com</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Pagina Principal</a><span>|</span></li>
				<li>Entrar & Salir</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
<!-- banner -->
	<div class="banner">
		
		<div class="w3l_banner_nav_right">
<!-- login -->
		<div class="w3_login">
			<h3>Sign In & Sign Up</h3>
			<div class="w3_login_module">
				<div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Click Me</div>
				  </div>
				  <div class="form">
					<h2>Iniciar sesión</h2>
					<label>
					<?php if(isset($_SESSION["errMsg"])) {echo "Username o contrasena incorrecta"; } ?>
					</label>
					<form action="datosLogin.php" method="post"><!-- javascript:void(0);-->
					  <input id="Username" type="text" name="Username" placeholder="Username" required=" ">
					  <input id="password1" type="password" name="Password" placeholder="Password" required=" ">
					  <input id="Login" type="submit" value="Login" "><!--onclick="revisar()-->
					</form>
				  </div>
				  <div  class="form">
					<h2>Crear Cuenta</h2>
					<form action="registro.php" method="post">
					  <input type="text" name="Username" placeholder="Username" required=" ">
					  <input id="password" type="password" name="Password" placeholder="Password" required=" ">
					  <input id="email" type="email" name="Email" placeholder="Email Address" required=" ">
					  <input id="Phone" type="text" name="Phone" placeholder="Phone Number" required=" ">
					  <input type="submit" value="Register">
					</form>
				  </div>
				  <?php


				   ?>
				  <div class="cta"><a href="#">Olvidaste la contraseña?</a></div>
				</div>
			</div>
			<script>
				$('.toggle').click(function(){
				  // Switches the Icon
				  $(this).children('i').toggleClass('fa-pencil');
				  // Switches the forms  
				  $('.form').animate({
					height: "toggle",
					'padding-top': 'toggle',
					'padding-bottom': 'toggle',
					opacity: "toggle"
				  }, "slow");
				});
			</script>
		</div>
<!-- //login -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->


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
					<li><a href="about.php">Equipo de trabajo</a></li>
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
				<p>© 2018 Nutri-Fitness. Todos los derechos reservados | Creada para la Globalización por  <a href="http://w3layouts.com/">Angelica,Carolina,Liseth</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
	function revisar(){
	var Username = document.getElementById("Username");
	var password1 = document.getElementById("password1");
	var login = document.getElementById("Login");

	if( Username.value=="angelicamrs16@gmail.com" && password1.value=="123"){
		alert("Bienvenid@ " + Username.value);
		window.location.href = "file:///C:/ANGELICA/UNA/5AÑO-PRIMER%20SEMESTRE/Aplicaciones%20Globales/nutri_fitness/index.php";
		return true;

		//alert("Bienvenid@ " + Username.value);
	}
	else {
		alert("Usuario No Registrado");
	}
}


</script>
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

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>
</body>
</html>