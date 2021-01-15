<?php

require_once('controller_index.php');

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Xml TP</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark d-flex">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active text-white" aria-current="page" href="acceuil.html"><?= $xml->page[0]->menu ?></a>
                    <a class="nav-link text-white" aria-current="page" href="qui-sommes-nous.html"><?= $xml->page[1]->menu ?></a>
                    <a class="nav-link text-white" aria-current="page" href="nos-clients-témoignent.html"><?= $xml ->page[2] ->menu ?></a>
                    <a class="nav-link text-white" aria-current="page" href="contact.html"><?= $xml ->page[3] ->menu ?></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">

        <h1 class="text-center mt-4"><?= $title ?></h1>
        <?= $content ?>

    </div>

</body>

</html>