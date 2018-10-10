<?php
if (isset($_POST['generate_text'])) {
    include('../resources/phpqrcode/qrlib.php');
    $text = $_POST['qr_text'];
    $folder = "../resources/images/";
    $date = date("d-m-Y his");
    $file_name = $date . ".png";
    $path = $folder . $file_name;

    QRcode::png($text, $path);

    echo "<h4 style='margin-bottom: 0'>QR Code succesfully generated!</h4>";
    echo "<img src='../resources/images/" . $file_name. "'>";
    echo "<br>";
    echo "<a href='index.php'><button>Back</button></a>";


    //To Display Code Without Storing
    //QRcode::png($text);
}
