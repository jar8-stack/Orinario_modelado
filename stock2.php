<!DOCTYPE HTML>
<html>

<head>
	<title>Tiendita + App</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="css/main.css" type="text/css" />
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<style>
	.row img {
		width: 100%;
	}
	</style>
</head>

<body class="subpage">

    <?php include("nav-bar.php");?>   

	<section id="One" class="wrapper style4">
		<div class="inner">
			<header class="align-center">
				<p>Stock</p>
				<h2>Inventario de Productos</h2>
			</header>
		</div>
	</section>

	<section id="two" class="wrapper style4">
		<div class="inner">
			<div class="box">
				<div class="content">
					<header class="align-center">
						<p>Hacer Click en la opcion que desee</p>
					</header>
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12">
							<a href="parcial1.php"> <img src="images/botana.png" /></a>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<a href="parcial2.php"> <img src="images/mascota.png" /></a>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<a href="parcial3.php"> <img src="images/bebida.png" /></a>
						</div>

					</div>

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
