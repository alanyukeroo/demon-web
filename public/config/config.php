<?php

    ob_start();
    session_start();

    defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);
    defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");
    defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back");

    $koneksi = new mysqli('localhost', 'root', '', 'db_demon');
    require_once 'functions.php';
