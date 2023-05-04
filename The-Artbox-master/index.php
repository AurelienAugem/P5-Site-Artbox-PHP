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

    <?php include_once('header.php'); ?>

    <main>           
            <div id="liste-oeuvres">
                
                    <?php 
                                           
                        foreach($oeuvres as $oeuvre){ 

                            $id = $oeuvre['id'];
                            $titre = $oeuvre['title'];
                            $image = $oeuvre['image'];
                            $artiste = $oeuvre['artist'];
                            $description = $oeuvre['description'];

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

    <?php include_once('footer.php'); ?>

</body>
</html>