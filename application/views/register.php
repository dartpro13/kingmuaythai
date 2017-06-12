<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
     <!-- navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
  <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>

    <a href="index.php" class="navbar-brand page-scroll ">Logo
    <img src="" alt="">
    </a>

  </div>
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
    <li><a href="register.php" class="page-scroll">Register</a></li>
    <li><a href="login.php" class="page-scroll">Login</a></li>
  
    </ul>
  </div>
  </div>
  </nav>

    <div class="col-md-4 col-md-offset-4 form-login">
    
    <?php
    /* handle error */
    if (isset($_GET['error'])) : ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
        </div>
    <?php endif;?>

        <div class="outter-form-login">
           
            <form action="send_register.php" class="inner-login" method="post">
            <h3 class="text-center title-login">Registrasi</h3>
                <div class="form-group">
                <label for="pengguna" >Nama Lengkap </label>
                    <input type="text" class="form-control" name="nama" placeholder="">
                </div>

                <div class="form-group">
                <label for="pengguna" >ID Pengguna </label>
                    <input type="text" class="form-control" name="pengguna" placeholder="">
                </div>

                <div class="form-group">
                <label for="pengguna" >Kata Sandi </label>
                    <input type="password" class="form-control" name="password" placeholder="Kata Sandi">
                </div>

                <div class="form-group">
                <label for="pengguna" >Email </label>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>

                <input type="submit" class="btn btn-block btn-custom-green" value="DAFTAR" />
                
                
            </form>
        </div>
    </div>

   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>