<?php

require_once "function.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP İLE MOBİL KONTROL</title>
</head>

<body>
<!-- İşte en basit Kullanımı bol kodlu günler :) -->
    <?php
    if (isMobileDevice()) {
        ?>
        <h1>Şuanda Mobildeyim</h1>
    <?php } else { ?>

        <h2>Şuanda Mobilde Değilim</h2>


    <?php } ?>
</body>

</html>