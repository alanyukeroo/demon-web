<?php

  require_once '../config/config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DEMON - Device Monitoring</title>

  <link rel="stylesheet" href="font-awesome/css/fontawesome.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!-- Custom CSS -->
  <link href="css/style.css" rel="stylesheet">

  <style>
    body {
      color: #000;
      font-family: Arial;
      margin: 20px;
    }
  </style>

</head>

<body>

  <div id="wrapper">
    <form method="post" action="generate_code.php">
      ID Device : <input type="text" name="qr_text">
      <input type="submit" name="generate_text" value="Generate">
    </form>
  </div>

</body>

<!-- jQuery -->
<script type="text/javascript" src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</html>
