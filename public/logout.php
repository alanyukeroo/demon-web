<?php

  require_once 'config/config.php';
  unset($_SESSION['admin_user']);
  session_destroy();
  redirect("login.php");
