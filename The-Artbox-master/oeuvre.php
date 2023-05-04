<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
    <?php include('oeuvres.php') ?>
</head>

<body>
    <main>

    <?php include_once('header.php'); ?>
    
    <?php       
        foreach($oeuvres as $oeuvre){
            if(in_array($_GET['id'], $oeuvre) && $_GET['id'] == $oeuvre['id']){

                $titre = $oeuvre['title'];
                $image = $oeuvre['image'];
                $artiste = $oeuvre['artist'];
                $description = $oeuvre['description'];
                
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

    <?php include_once('footer.php'); ?>
    </main>
</body>
