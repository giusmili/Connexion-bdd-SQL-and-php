<?php
    include_once(__DIR__ ."/controller/class.inc.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= title ?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= ControllerBase::$_logo ?>">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="./font/stylesheet.css">
    <link rel="stylesheet" href="<?= $_new_page->_css ?>">
   
   
</head>
<body>
    <header>
        <h1><?= title ?></h1>
    </header>
    
    <main>
        <section>
            <h2>
            
                <?= ControllerBase::$_subtitle ?>
                <span class="material-symbols-outlined" aria-hidden="true">
                    shopping_cart
                </span>
                
            </h2>
            <ul class="product">
            
                <?php
                    
                    include_once(__DIR__ .'/controller/bdd.inc.php'); 
                    // La constante magique __DIR__ assure une certaine sécurité pour le répertoire racine
                  
                    //ajouter un try catch pour tester la connection bdd
                
                ?>
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; - PHP - <?= $_date ?> </p>
    </footer>
</body>
</html>