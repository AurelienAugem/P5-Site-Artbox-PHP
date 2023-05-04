<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
    <!-- Lien avec la page 'oeuvres.php' sur laquelle se trouve le tableau '$oeuvres' -->
    <?php include('oeuvres.php') ?>
</head>

<body>
    <main>
    <!-- Import de l'en-tête du site -->
    <?php include_once('header.php'); ?>
    
    <?php  
        /* Boucle permmettant de parcourir le tableau contenant les différentes oeuvres */      
        foreach($oeuvres as $oeuvre){
            /* Structure conditionnelle vérifiant que la valeur l'ID soit bien égale à celle présente dans le tableau */
            if($_GET['id'] == $oeuvre['id']){
                /* Les information de l'oeuvre corerspondante à l'id envoyer dans l'URL sont stockées dans des variables */
                $titre = $oeuvre['title'];
                $image = $oeuvre['image'];
                $artiste = $oeuvre['artist'];
                $description = $oeuvre['description'];
                /* Affichage de l'oeuvre  */
                echo '<article id="detail-oeuvre">';
                echo '<div id="img-oeuvre">'. $image . '</div>';
                echo '<div id="contenu-oeuvre">';
                echo '<h1>' . $titre . '</h1>';
                echo '<p class="description">' . $artiste . '</p>';
                echo '<p class="description-complete">' . $description . '</p>';
                echo '</div>';
                echo '</article>';

            } 
                       
        }    
    ?>
    <!-- Import du pied-de-page -->
    <?php include_once('footer.php'); ?>
    </main>
</body>
