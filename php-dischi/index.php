<?php include 'dati_dischi.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title></title>
    </head>
    <body>
        <main>
            <div class="container">
                <div class="lista_album">
                    <?php foreach ($dischi as $singolo_album) { ?>
                    <div class="singolo_album">
                        <img src="<?php echo $singolo_album['poster'] ?>" alt="<?php $singolo_album['title'] ?>">
                        <p>
                            <?php echo $singolo_album['title'] ?>
                        </p>
                        <p class="author">
                            <?php echo $singolo_album['author'] ?>
                        </p>
                        <p class="genre">
                            <?php echo $singolo_album['genre'] ?>
                        </p>
                        <p class="year">
                            <?php echo $singolo_album['year'] ?>
                        </p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
