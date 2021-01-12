<!DOCTYPE HTML>
<html>
	<head>
		<title>Pizzeria LeDonnaChiri</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/main.css" type="text/css"/>
		<style>
		input[type="checkbox"], input[type="radio"] {
		    -moz-appearance: auto;
		    -webkit-appearance: auto;
		    -ms-appearance: auto;
		    appearance: auto;
		    display: initial;
		    float: none;
		    margin-right: 0;
		    opacity: inherit;
		    width: 1rem;
		    z-index: -1;
		}
	</style>
	</head>
	<body class="subpage">

			<header id="header">
				<div class="logo"><a href="https://www.westjet.com/es-mx/book-trip/flights">Pizzeria LeDonnaChiri <span>Hanna Lizarraga</span></a></div>
				<a href="#menu">Menu</a>
			</header>

			<nav id="menu">
				<ul class="links">
					<li><a href="contactanos.php">Realiza tu pedido</a></li>
					<li><a href="alumnos.php">Alumnos</a></li>
				</ul>
			</nav>

			<section id="One" class="wrapper style5">
				<div class="inner">
					<header class="align-center">
						<p>Prueba nuestras</p>
						<h2>Deliciosas Pizzass</h2>
					</header>
				</div>
			</section>

			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<p>La mas alta calidad de ingredientes</p>
								<h2>Pizzas hechas con amor</h2>
							</header>
							<h2>Haz tu pedido ahora</h2>
							<?php
							if(isset($_POST['cant'])){

									$cant = intval($_POST['cant']);
									$ingredientes = intval($_POST['ingredientes']);
									$tamanio = intval($_POST['tamanio']);

									switch ($tamanio) {
										case 1:
											$tamanio=100;
											break;
									 case 2:
											$tamanio=120;
											break;
									 case 3:
											$tamanio=150;
											break;
									 case 4:
											$tamanio=200;
											break;
										default:
										$error = "Opcion Invalida";
										break;

									}

								if ($ingredientes < 3) {
									 $error = "Debe tener almenos 3 ingredientes";


						}

									$ingredientes = $ingredientes-3;
									if (!isset($error)) {
										$r = $tamanio*$cant + $ingredientes*$cant*10;
										$message = "Total a pagar $r";
									}
						}
							?>
						<?php if(isset($error)) { ?>
							<p> Error: <?=$error?></p>
						<?php } ?>
						<?php if(isset($message)) { ?>
							<p> <?=$message?></p>
						<?php } ?>
						<form class="" action="contactanos.php" method="post">
							<input type="text" name="nombre" placeholder="Escribe tu nombre">
							<br><br>
							<label>Ingredientes</label>
								<input type="number" name="ingredientes" id="ingredientes">
								<br><br>
								<label>Cantidad</label>
								<input type="number" name="cant" id="cant">
								<br><br>
								<div>
								<input type="radio" name="tamanio" id="tamanio" value="1">Chico $100
								<input type="radio" name="tamanio" id="tamanio" value="2">Mediano $120
								<input type="radio" name="tamanio" id="tamanio" value="3">Grande $150
								<input type="radio" name="tamanio" id="tamanio" value="4">Familiar $200
							</div>
								<br><br>
								<input type="submit" value="Calcular" id="calcular">
						</form>

						</div>
					</div>
				</div>
			</section>

			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/expediamexico" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Pizzeria LeDonnaChiri. All rights reserved.
					<script>
			    document.write(new Date().getFullYear());
	     	</script>
				</div>
			</footer>

		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.scrollex.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/util.js"></script>
		<script src="js/main.js"></script>


	</body>
</html>
