<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Stock</title>
</head>

<body>
  <?php include("nav-bar.php");?>

  <section id="One" class="wrapper style4">
		<div class="inner">
			<header class="align-center">
				<p>Stock</p>
				<h2>Abarrotes</h2>
			</header>
		</div>
	</section>

  <?php
    $api_url_productos= "http://localhost:3000/Producto";

    $json_data_products= file_get_contents($api_url_productos);

    $response_data_products= json_decode($json_data_products);

    //$product_data= $response_data_products->data;

    foreach ($response_data_products as $product) {
      echo "<ol>";
      echo "<li>";
    	echo "".$product->Descripcion;
      echo "</li>";
    	echo "<li>";
    	echo "".$product->Precio;
    	echo "</li>";
      echo "</ol>";
    }

   ?>
</body>

</html>
