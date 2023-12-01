<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <h1>Include</h1>
    <?php
    // on importe, sqns erreurs fatales en cas d'échec, le menu
    //le texte "on a du texte..." apparait 
    require "menu.php";
    ?>
    <p>On a du texte ici</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos exercitationem distinctio, vitae quia minima at sequi placeat architecto dicta sunt consequuntur? Voluptatum reprehenderit repellat earum saepe qui culpa impedit quos! Sit labore quo itaque architecto culpa vitae dolores corporis consequatur, harum aliquid recusandae libero ex ut dicta velit aliquam earum fugiat eveniet quod dolor distinctio ab adipisci eligendi eos. Eveniet perspiciatis odio error assumenda sequi repellendus qui laborum consectetur quidem corrupti voluptate voluptatem unde, inventore excepturi eum iure et dignissimos earum eligendi. Tempora sit dignissimos, perferendis ut rem non necessitatibus porro officiis architecto explicabo totam itaque? Recusandae non quidem optio?</p>
    <?php
    //on recharge le menu, include permet de recharger autant de x qu'on veut
    include "inc/menu.php";
    ?>
</body>
</html>
