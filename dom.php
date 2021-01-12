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
				<div class="logo"><a href="index.php">Tiendita + App<span> Hanna Lizarraga</span></a></div>
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
							<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
							 <input type="text" name="id_proveedor" id="id_proveedor" placeholder="Id delproveedor">
 							 <input type="text" name="Nombre" id="Nombre" placeholder="Ingresa nombre del proveedor">
 							 <input type="number" name="Telefono" id="Telefono" placeholder="Ingresa telefono del proveedor">
 							 <input type="number" name="Sucursal" id="Sucursal" placeholder="Ingresa el numero del proveedor">
							 <br>
	 			       <input type="submit" name="agregar" id="agregar" value="Agregar">
	 			       <input type="button" name="editar" id="editar" value="Editar">
							 <input type="submit" name="eliminar" id="eliminar" value="Eliminar">
	 			     </form>

						 <?php
						 	if(isset($_POST['eliminar'])){

								$id_proveedor= $_POST['id_proveedor'];

								$ch = curl_init('http://localhost:3000/Proveedor/'.$id_proveedor);
								curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
								curl_setopt($ch, CURLOPT_HTTPHEADER, array(
									)
								);
								$result = curl_exec($ch);
								echo $id_proveedor;
							}


								/*
						 		if (isset($_POST['agregar'])) {
									$Nombre= $_POST['Nombre'];
									$Telefono=$_POST['Telefono'];
									$Sucursal=$_POST['Sucursal'];


									$url= 'http://localhost:3000/Proveedor'.'/'.$Sucursal;



									$data_array= array(
										'Nombre' => ''.$Nombre,
										'Telefono' => ''.$Telefono
									);




									$data= http_build_query($data_array);


									$ch= curl_init();

									curl_setopt($ch, CURLOPT_URL, $url);
									curl_setopt($ch, CURLOPT_POST, true);
									curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
									curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

									$resp= curl_exec($ch);

									*/




								}


						  ?>

							<?php
								$api_url_proveedores= "http://localhost:3000/Proveedor";

								$json_data_proveedores= file_get_contents($api_url_proveedores);

								$response_data_proveedores= json_decode($json_data_proveedores);

								//$product_data= $response_data_products->data;

								foreach ($response_data_proveedores as $proveedor) {
									echo "<ol>";
									echo "<li>";
									echo "".$proveedor->Nombre;
									echo "</li>";
									echo "<li>";
									echo "".$proveedor->Contacto;
									echo "</li>";
									echo "</ol>";
								}
							 ?>

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
