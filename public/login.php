<?php

  require_once 'config/config.php';

  if (isset($_SESSION['admin_user'])) {
      redirect("admin");
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login | DEMON - Device Monitoring</title>

  <link rel="stylesheet" href="font-awesome/css/fontawesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.min.css" />

  <!-- Custom CSS -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body class="bg-image">

    <div class="container">
      <h1 class="text-center" style="color: #fff">LOGIN</h1>
    </div>

    <br>

    <!-- Page Content -->
    <div class="container login-bg">
        <div class="col-sm-12">
            <?php
                if (isset($_SESSION['message'])) {
                    ?>
                    <div class="alert alert-danger" style="margin-bottom: 20px; padding: 5px; text-align: center; border-radius: 5px">
                      <?php display_message(); ?>
                    </div>
                    <?php
                }
            ?>

            <form class="" action="" method="post" enctype="multipart/form-data">
                <?php login_user(); ?>
                <div class="form-group">
                  <input type="text" name="username" class="form-control input-fluent" placeholder="Username" autocomplete="off">
                </div>

                <div class="form-group">
                  <!-- <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-key"></i></div>
                    </div>
                    <input type="text" class="form-control input-fluent" placeholder="Password">
                  </div> -->
                  <input type="password" name="password" class="form-control input-fluent" placeholder="Password">
                </div>

                <div style="margin-top: 30px"><h6 class="text-center"><a href="#">Forgot password?</a></h6></div>

                <div class="form-group" align="center" style="margin-top: 10px;margin-bottom: 0">
                  <input type="submit" name="submit" class="btn btn-primary"
                  style="border-radius: 20px;
                         border: 0;
                         width: 180px;
                  ">
                </div>
            </form>
        </div>
    </div>

    <br>

    <div class="container">
      <h5 class="text-center" style="color: white">© 2018 DEMON - DEVICE MONITORING. V1.0</h5>
    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>

</html>
