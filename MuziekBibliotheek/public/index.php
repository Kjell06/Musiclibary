<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MuziekBibliotheek</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js"></script>
</head>

<body>
    <header>
        <a class="headerbutton1">Catagorie</a>
        <a class="headerbutton2">Hits</a>
        <p class="menu">Menu</p>
    </header>
</body>
<main>
    <article>
    <?php
    require_once('../source/config.php');
    require_once('../source/data.php');
    ?>

    <?php
    foreach($libary as $single){
        echo $single['titel'] . 'br';
        include('../source/views/card.php');
    }
    ?>
    
    </article>
</main>

</html>