<?php
// chargement du fichier de configuration
require_once "config.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" >
    <title>Require_once</title>
</head>
<body>
<h1>Require_once</h1>
<?php
// on importe, avec erreurs fatales en cas d'échec, le menu
// une seule et unique X
require_once "inc/menu.php";
?>
<h3>Affichage de constantes venant de config.php</h3>
<p>
    <?php
    echo DB_LOGIN."@".DB_SERVER;
    ?>
</p>
    <h3>On veut à nouveau récupérer le fichier config.php</h3>
<?php

require_once "config.php";
?>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis viverra turpis. Integer sed purus maximus erat
    rhoncus rhoncus. Morbi ac nulla sed turpis semper iaculis. Aenean auctor interdum blandit. Sed neque felis,
    finibus ut mauris sit amet, placerat tristique nunc. Nulla posuere enim vel tortor hendrerit tristique. Nullam
    pretium orci in rhoncus dictum. Donec malesuada, lectus hendrerit aliquam maximus, arcu lectus tempor odio, vel
    dignissim eros enim eu arcu. Proin elit nunc, elementum eu neque non, semper imperdiet mauris. Etiam nec aliquam leo. Fusce mollis sit amet nunc in gravida. Cras a purus vel purus mattis scelerisque. Vestibulum pharetra magna tortor, a posuere tellus commodo sit amet. Aenean tristique luctus ipsum eget lobortis. Integer fermentum quam nec ipsum tempus sollicitudin.<br><br>

Vestibulum id augue nisi. Donec porttitor, magna ut volutpat volutpat, turpis diam sodales sem, ac euismod tellus leo sit amet sapien. Aenean non diam elit. Donec eros magna, aliquet sit amet tincidunt eget, facilisis a diam. Praesent molestie risus at fringilla convallis. Curabitur finibus, odio sed interdum mattis, est libero ornare nulla, eu viverra dolor est eget ligula. Aenean quis ligula sapien. Aenean in nisl mi. Maecenas id sapien elit. Suspendisse pulvinar efficitur orci sit amet iaculis. Aliquam finibus mollis lorem at ultricies. Duis pretium finibus viverra. Cras semper nisl vel lorem condimentum iaculis. Praesent a lectus erat. Suspendisse sit amet feugiat dolor. Sed in eros viverra, elementum nunc at, dictum nibh.<br><br>

Sed iaculis, leo et congue convallis, enim nulla imperdiet urna, id porta justo risus et magna. Vivamus malesuada tellus nec nibh vulputate, at condimentum lectus interdum. Nulla est nisi, elementum non diam in, ultrices malesuada justo. Aliquam iaculis finibus interdum. Nullam id velit at turpis pulvinar accumsan. Quisque auctor ante ligula, molestie cursus eros luctus non. Donec euismod, tortor egestas pulvinar blandit, metus mi mollis nunc, fringilla porttitor ante nisi at nunc. Nulla sollicitudin velit turpis. Vivamus at blandit felis. Ut porttitor libero ut urna laoreet, tempus finibus arcu maximus. Aliquam laoreet sodales nisi vel placerat. Vestibulum finibus sem nec neque faucibus, sollicitudin tincidunt orci finibus. Vivamus dignissim dapibus purus, id pulvinar nulla semper sed. Quisque facilisis sem enim. Donec rhoncus metus vel mi placerat, in auctor massa porttitor.<br><br>

Nunc egestas non eros eu iaculis. Praesent id ante ipsum. Suspendisse non mi ligula. Sed nisi turpis, porttitor non mi vitae, tristique congue massa. Praesent blandit sodales viverra. Pellentesque id facilisis mauris. Praesent efficitur rhoncus volutpat. Suspendisse in condimentum augue. Pellentesque a lacus congue, rutrum nisi vel, iaculis augue. Maecenas efficitur, erat eget pharetra auctor, purus mauris ornare ipsum, nec tincidunt libero odio a dolor. Etiam blandit nunc quam, eget viverra dui dapibus sit amet.<br><br>

Mauris ac nunc quis ipsum egestas rutrum vel et risus. Vestibulum ac erat lorem. Proin ut eros posuere ligula iaculis malesuada at vel ante. <br><br>
Proin id congue orci, nec aliquet turpis. Aliquam quis tortor sed mi tristique condimentum. Vestibulum in velit tincidunt, eleifend quam at, egestas elit. Suspendisse ornare quis tellus efficitur eleifend. Nullam congue egestas posuere. Donec et urna et tortor rhoncus blandit non nec ante.</p>
<?php
// on recharge le menu, require_once ne permet pas de recharger le même fichier si
// il est déjà chargé
require_once "inc/menu.php";
?>
</body>
</html>
