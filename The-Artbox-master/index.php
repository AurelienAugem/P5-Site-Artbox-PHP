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
    <!-- Import de l'en-tête du site factorisé -->
    <?php include_once('header.php'); ?>

    <main>           
            <div id="liste-oeuvres">
                
                    <?php 
                        /* Boucle permmettant de parcourir le tableau contenant les différentes oeuvres */                   
                        foreach($oeuvres as $oeuvre){ 
                            /* Les informations de chaque oeuvre sont stockées dans des variables */
                            $id = $oeuvre['id'];
                            $titre = $oeuvre['title'];
                            $image = $oeuvre['image'];
                            $artiste = $oeuvre['artist'];
                            $description = $oeuvre['description'];
                            /* Affichage des oeuvres sur la page */
                            echo '<article class="oeuvre">'; 
                            echo "<a href=\"oeuvre.php?id= $id \">";
                            echo $image;
                            echo '<h2>' . $titre . '</h2>';
                            echo '<p class="description">' . $artiste . '</p>';
                            echo "</a>";
                            echo '</article>';  
                        }
                    ?>
                    
            </div>        
    </main>
    <!-- Import du pied-de-page du site factorisé -->
    <?php include_once('footer.php'); ?>

</body>
</html>