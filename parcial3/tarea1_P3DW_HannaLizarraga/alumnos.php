<!DOCTYPE HTML>
<html>
	<head>
		<title>LeChiri Escuela Gastronomica</title>
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
					<div class="logo"><a href="https://www.westjet.com/es-mx/book-trip/flights">LeChiri <span>Hanna Lizarraga</span></a></div>
					<a href="#menu">Menu</a>
				</header>

				<nav id="menu">
					<ul class="links">
						<li><a href="contactanos.php">Realiza tu pedido</a></li>
						<li><a href="alumnos.php">Alumnos</a></li>
					</ul>
				</nav>

				<section id="One" class="wrapper style4">
					<div class="inner">
						<header class="align-center">
							<p>Alumnos estrella</p>
							<h2>Conoce nuestras carreras</h2>
						</header>
					</div>
				</section>

				<section id="two" class="wrapper style2">
					<div class="inner">
						<div class="box">
							<div class="content">
								<header class="align-center">
									<p>Se un chef de calidad</p>
									<h2>Escuela de Gastronomia</h2>
							</header>
							<h2>Contactános</h2>

						<form class="" action="informacion.php" method="get">
							<input type="text" name="nombre" placeholder="Nombre del Alumno">
							<br><br>
						  <label for="carrera">Carrera:</label>
						  <input list="carrera">
						  <datalist id="carrera" name="carrera">
						    <option value="Chef Ejecutivo"></option>
						    <option value="Catador de vinos"></option>
						    <option value="Resposteria y Panaderia"></option>
						    <option value="Chef Internacional"></option>
						    <option value="Administración de Restaurantes"></option>
						  </datalist>
						  <br><br>
						 <label type="date">Fecha de Nacimiento:</label>
						 <input type="date" id="date" name="date">
						 <br></br>

						 <div class="sexo">
						   <label type="sexo">Sexo:</label>
						   <input type="radio" name="sexo" id="man" value="Hombre">
						   <label for="man">Hombre</label>

						   <input type="radio" name="sexo" id="women" value="Mujer">
						   <label for="women">Mujer</label>
						</div>
						   <input type="checkbox" name="beca" id="beca" value="si">
						   <label for="beca">Tiene Beca</label>

						    <input type="submit" value="Enviar" id="enviar">
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
					&copy; LeChiri Escuela Gastronomica. All rights reserved.
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
