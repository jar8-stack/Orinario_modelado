<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tiendita + App</title>
    <link rel="stylesheet" href="css/main.css" type="text/css" />
      <link rel="stylesheet" href="css/galery.css" type="text/css" />
      <link rel="stylesheet" href="css/styles.css" type="text/css" />
  </head>
  <body>
    <header id="header" class="alt">
      <div class="logo"><a href="index.php">Tiendita + App <span>Hanna Lizarraga</span></a></div>
      <a href="#menu"class="menu">Menu</a>
    </header>
    <nav id="menu">
      <ul class="links">
        <li><a href="index.php">Home</a></li>
        <li><a href="stock.php">Stock Escenciales</a></li>
        <li><a href="stock2.php">Stock</a></li>
        <li><a href="compra.php">Compras</a></li>
        <li><a href="users.php">Iniciar Sesion</a></li>
        <li><a href="contactanos.php">Contactános</a></li>
        <li><a href="dom.php">Proveedores</a></li>

      </ul>
    </nav>

    <section class="banner full">
      <article>
        <img src="images/sf1.png" alt="" />
        <div class="inner">
          <header>
            <p>Encuentra todo <a href="https://www.expedia.mx/"> lo que necesitas para tu tiendita</a></p>
            <h2>Punto de Venta</h2>
          </header>
        </div>
      </article>
      <article>
        <img src="images/gr1.png" alt="" />
        <div class="inner">
          <header>
            <p>Proveedores</p>
            <h2>Haz tu pedido</h2>
          </header>
        </div>
      </article>
      <article>
        <img src="images/it2.png"  alt="" />
        <div class="inner">
          <header>
            <p>Empleados</p>
            <h2>Control de empleados</h2>
          </header>
        </div>
      </article>
      <article>
        <img src="images/ky1.png"  alt="" />
        <div class="inner">
          <header>
            <p>Stock de Productos</p>
            <h2>Haz tu inventario</h2>
          </header>
        </div>
      </article>
      <article>
        <img src="images/cn1.png"  alt="" />
        <div class="inner">
          <header>
            <p>Historial de Ventas</p>
            <h2>Reportes</h2>
          </header>
        </div>
      </article>

    </section>
    <div class="peliculas-recomendadas contenedor">
    			<div class="contenedor-titulo-controles">
    				<div class="indicadores"></div>
    			</div>

    <div class="contenedor-principal">
    <button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>
      <div class="contenedor-carousel">
        <div class="carousel">
          <div class="pelicula">
            <a href="#"><img src="images/ch2.png" alt=""></a>
          </div>
          <div class="pelicula">
            <a href="#"><img src="images/ch1.png" alt=""></a>
          </div>
          <div class="pelicula">
            <a href="#"><img src="images/ld2.png" alt=""></a>
          </div>
          <div class="pelicula">
            <a href="#"><img src="images/sg1.png" alt=""></a>
          </div>
          <div class="pelicula">
            <a href="#"><img src="images/sk1.png" alt=""></a>
          </div>
          <div class="pelicula">
            <a href="#"><img src="images/sk3.png" alt=""></a>
          </div>
          <div class="pelicula">
            <a href="#"><img src="images/tl1.png" alt=""></a>
          </div>
          <div class="pelicula">
            <a href="#"><img src="images/tl2.png" alt=""></a>
          </div>
          <div class="pelicula">
            <a href="#"><img src="images/ld1.png" alt=""></a>
          </div>
          <div class="pelicula">
            <a href="#"><img src="images/tl3.png" alt=""></a>
          </div>
          <div class="pelicula">
            <a href="#"><img src="images/vc1.png" alt=""></a>
          </div>
          <div class="pelicula">
            <a href="#"><img src="images/vc2.png" alt=""></a>
          </div>
          <div class="pelicula">
            <a href="#"><img src="images/vc3.png" alt=""></a>
          </div>
      </div>

      <button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
    </div>
  </div>
  <section id="two" class="wrapper style3">
      <div class="inner">
        <header class="align-center">
          <p>Escoje la opcion que requieras</p>
          <h2>De click en el texto</h2>
        </header>
      </div>
    </section>
	</main>

          <div class="galeria">
          <br><br/>
      <div class="contenedor">
          <div class="imagen">
        <img id="myImg1" src="images/puntoventa.png" alt="">
        <div class="overlay">
          <h2 id="imageText1">Punto de Venta</h2>
        </div>
       </div>
      <div class="imagen">
        <img id="myImg2" src="images/provedor.png" alt="">
        <div class="overlay">
          <h2 id="imageText2">Proveedores</h2>
        </div>
      </div>
      <div class="imagen">
        <img id="myImg3" src="images/inven.png" alt="">
        <div class="overlay">
          <h2 id="imageText3">Stock</h2>
        </div>
      </div>
      <div class="imagen">
        <img id="myImg4" src="images/empleados.png" alt="">
        <div class="overlay">
          <h2 id="imageText4">Control de empleados</h2>
        </div>
      </div>
      <div class="imagen">
        <img id="myImg5" src="images/ventas.png" alt="">
        <div class="overlay">
          <h2 id="imageText5">Registros de Ventas</h2>
        </div>
      </div>
      <div class="imagen">
        <img id="myImg6" src="images/merma.png" alt="">
        <div class="overlay">
          <h2 id="imageText6">Mermas</h2>
        </div>
      </div>

    </div>
              <!-- The Modal -->
          <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
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
      <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	    <script src="js/main1.js"></script>
  </body>
 </html>
