<!DOCTYPE HTML>
<html>
	<head>
		<title>World Explorer Travel</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/main.css" type="text/css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="fonts/icomoon/style3.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style3.css">
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
				<div class="logo"><a href="index.php">Tiendita + App <span>Hanna Lizarraga</span></a></div>
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
					<li><a href="dom.php">Pasajeros</a></li>
				</ul>
			</nav>

			<section id="One" class="wrapper style5">
				<div class="inner">
					<header class="align-center">
						<p>Punto de Venta</p>
						<h2>Venta</h2>
					</header>
				</div>
			</section>

			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<p>Catalogo de Productos</p>
								<h2>Escoje los productos</h2>
							</header>
							<h2>Da click</h2>
							<div class="row mb-5">
              <?php
              include('./php/conexion.php');
              $resultado = $conexion->query("select * from productos order by id DESC limit 10") or die($conexion->error);
              while ($fila = mysqli_fetch_array($resultado)) {


              ?>
                <div class="col-sm-6 col-lg-4 mb-4">
                  <div class="block-4 text-center border">
                    <figure class="block-4-image">
                      <a href="shop-single.php?id=<?= $fila['id'] ?>">
                        <img src="images/<?= $fila['imagen'] ?>" alt="<?= $fila['nombre'] ?>" class="img-fluid"></a>
                    </figure>
                    <div class="block-4-text p-4">
                      <h3><a href="shop-single.php"><?= $fila['nombre'] ?></a></h3>
                      <p class="mb-0"><?= $fila['descripcion'] ?></p>
                      <p class="text-primary font-weight-bold">$<?= $fila['precio'] ?></p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4">
                  <div class="block-4 text-center border">
                    <figure class="block-4-text p-4">
                      <a href="shop-single.php?id=<?= $fila['id'] ?>">
                        <img src="images/<?= $fila['imagen'] ?>" alt="<?= $fila['nombre'] ?>" class="img-fluid"></a>
                    </figure>
                    <div class="block-4-text p-4">
                      <h3><a href="shop-single.php"><?= $fila['nombre'] ?></a></h3>
                      <p class="mb-0"><?= $fila['descripcion'] ?></p>
                      <p class="text-primary font-weight-bold">$<?= $fila['precio'] ?></p>
                    </div>
                  </div>
                </div>

              <?php }
              ?>


            </div>
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
