<!DOCTYPE html>
<html lang="en">

<head>
  <title>Chiri & Co.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <div class="site-wrap">
    <?php
    include("./layouts/header.php");
    if (isset($_POST['action'])) {
      include_once './php/conexion.php';
      // register
      if ($_POST['action'] == 'register') {
        $conexion->query("INSERT INTO usuario(nombre,telefono,email,password)
        values('{$_POST['c_fname']} {$_POST['c_lname']}','{$_POST['c_phone']}',
        '{$_POST['c_email']}','{$_POST['c_account_password']}')") or die($conexion->error);
        $register_message = "Usuario registrado exitósamente";
      } else {
        // login
        $res = $conexion->query("SELECT * FROM usuario WHERE email='{$_POST['c_email']}'
        AND password='{$_POST['c_account_password']}'") or die($conexion->error);
        $fila = mysqli_fetch_assoc($res);
        if ($fila) {
          $login_message = "Usuario logueado";
          if (session_status() == PHP_SESSION_NONE) {
            session_start();
          }
          setcookie('user_email', $fila['email'], time() + 365 * 24 * 60 * 60);
          setcookie('user_name',  $fila['nombre'], time() + 365 * 24 * 60 * 60);
          setcookie('user_id', $fila['id'], time() + 365 * 24 * 60 * 60);
        } else {
          $login_error = "Usuario o contraseña incorrectos";
        }
      }
    }
    ?>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Create Acount</h2>
          </div>

          <div class="col-md-7">

            <form action="#" method="post">
              <input type="hidden" name="action" value="register">
              <?php
              if (isset($register_message)) {
                echo "<div class='alert alert-success' role='alert'>$register_message</div>";
              }
              ?>
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="c_fname">
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_lname" name="c_lname">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="c_phone" name="c_phone" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="c_account_password" class="text-black">Account Password</label>
                  <input type="password" class="form-control" id="c_account_password" name="c_account_password" placeholder="">
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Register">
                  </div>
                </div>
              </div>
            </form>
            <form action="#" method="post">
              <input type="hidden" name="action" value="login">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Login</h2>
              </div>
              <div class="p-3 p-lg-5 border">
                <?php
                if (isset($login_message)) {
                  echo "<div class='alert alert-success' role='alert'>$login_message</div>";
                }
                if (isset($login_error)) {
                  echo "<div class='alert alert-danger' role='alert'>$login_error</div>";
                }
                ?>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="c_account_password" class="text-black">Account Password</label>
                  <input type="password" class="form-control" id="c_account_password" name="c_account_password" placeholder="">
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Login">
                  </div>
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <?php include("./layouts/footer.php"); ?>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

</body>

</html>