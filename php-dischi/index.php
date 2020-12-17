<?php include 'dati_dischi.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php foreach ($dischi as $singolo_album) {
            echo $singolo_album['title'];
        } ?>>
    </body>
</html>
