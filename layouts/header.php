<header class="site-navbar" role="banner">
  <div class="site-navbar-top">
    <div class="container">
      <div class="row align-items-center">


        <div class="col-12 order-3 order-md-3 text-right">
          <div class="site-top-icons">
            <ul>
              <li><a href="login.php"><span class="icon icon-person"></span>
            <?php
            if (session_status() == PHP_SESSION_NONE) {
              session_start();
            }
            if(isset($_COOKIE['user_name'])) {
              echo "Hola {$_COOKIE['user_name']}";
            }
            ?>
            </a>
              <li>
                <a href="cart.php" class="site-cart">
                  <span class="icon icon-shopping_cart"></span>
                  <span class="count">
                    <?php
                    if (isset($_SESSION['carrito'])) {
                      echo count($_SESSION['carrito']);
                    } else {
                      echo 0;
                    }
                    ?>
                  </span>
                </a>
              </li>

            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
</header>
