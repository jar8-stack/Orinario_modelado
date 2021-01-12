<!DOCTYPE HTML>
<html>
	<head>
		<title>Tiendita + App</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/main.css" type="text/css"/>
	</head>
	<body class="subpage">

			<header id="header">
				<div class="logo"><a href="https://www.westjet.com/es-mx/book-trip/flights">Tiendita + App<span> Hanna Lizarraga</span></a></div>
				<a href="#menu"class="menu">Menu</a>
			</header>

			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="stock.php">Stock Escenciales</a></li>
					<li><a href="stock2.php">Stock</a></li>
					<li><a href="users.php">Iniciar Sesion</a></li>
					<li><a href="compra.php">Compras</a></li>
	        <li><a href="contactanos.php">Contactános</a></li>
					<li><a href="dom.php">Proveedores</a></li>
				</ul>
			</nav>

			<section id="One" class="wrapper style4">
				<div class="inner">
					<header class="align-center">
						<p>Agenda de Proveedores</p>
						<h2>Haz tu lista</h2>
					</header>
				</div>
			</section>

			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<p>Proveedores</p>
							</header>
							<h2>Insertar Proveedores</h2>
							<form>
	 			       <input type="text" name="position" id="position" placeholder="Posición">
							 <input type="text" name="subject" id="subject" placeholder="Ingresa tu destino">
							 <br>
	 			       <input type="button" name="agregar" id="agregar" value="Agregar">
	 			       <input type="button" name="editar" id="editar" value="Editar">
							 <input type="button" name="eliminar" id="eliminar" value="Eliminar">
	 			     </form>
	 			     <ol id="lista">
	 			       <li>Abelardo Ramirez Fuente</li>
	 			       <li>Hanna Romero Solano</li>
	 			       <li>Jade Bañuelos Gomez</li>
	 			     </ol>
	 			     <script type="text/javascript" src="js/dom.js"></script>

						</div>
					</div>
				</div>
			</section>

			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.expedia.mx/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Tiendita + App. All rights reserved.
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
