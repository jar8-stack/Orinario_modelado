<!DOCTYPE HTML>
<html>
	<head>
		<title>Tiendita + App</title>
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
				<div class="logo"><a href="https://www.westjet.com/es-mx/book-trip/flights">Tiendita + App <span>Hanna Lizarraga</span></a></div>
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
						<p>Contactános</p>
						<h2>Da una nueva experiencia a tu tienda</h2>
					</header>
				</div>
			</section>

			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<p>Cotiza con nosotros</p>
								<h2>Nos adecuaremos a tu presupuesto</h2>
							</header>
							<h2>Contactános</h2>
					    <label for="name">Name:</label>
					      <input type="text" placeholder="Put your name here" maxlength="50"name="name" id="name">
					      <br><br/>
					        <label for="country">Chose your country:</label>
					        <input list="country">
					        <datalist id="country">
					          <option value="México"></option>
					          <option value="United Stated"></option>
					          <option value="Canada"></option>
					          <option value="Argentina"></option>
					          <option value="Spain"></option>
					          <option value="England"></option>
										<option value="Chile"></option>
					          <option value="Rusia"></option>
					          <option value="Netherland"></option>
					          <option value="Australia"></option>
					          <option value="New Zeland"></option>
					          <option value="Japan"></option>
										<option value="China"></option>
					          <option value="Thailand"></option>
					          <option value="Philipines"></option>
					          <option value="South Africa"></option>
					          <option value="Nicaragua"></option>
					      </datalist>
					      <br><br>
					        <label for="tour">Cuantos empleados tiene</label>
					        <select name="" id="">
					        <option value="1">1 </option>
					        <option value="2">2 </option>
					        <option value="3">3 </option>
					        <option value="4">4 </option>
					        <option value="5">5 </option>
					        <option value="6">6 </option>
					        <option value="7">1 </option>
					        <option value="8">2 </option>
					    </select>
					    <br><br>
					      <label for="phone">Phone Number:</label>
					      <input type="phone" placeholder="Put your phone number" maxlength="10" id="phone">

					      <br><br>
					        <label type="email">Email:</label>
					        <input type="email" placeholder="Put your email" maxlength="100" id="email">

					      <br><br>
					     <label type="date">Born day:</label>
					     <input type="date">
					     <br></br>

					     <div class="sexo">
					       <label type="sexo">Sex:</label>
					       <input type="radio" name="sexo" id="man">
					       <label for="man">Man</label>

					       <input type="radio" name="sexo" id="women">
					       <label for="women">Women</label>
					     </div> <br></br>
					     <label type="notes">Notes:</label>
					     <textarea name="notes" rows="5" cols="25"></textarea>
					     <br></br>
					     <input type="submit" value="Save">

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
