<?php
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Require_once</title>
</head>
<body>
<h1>Require_once</h1>
<?php
require_once "inc/menu.php";
?>
<h3>Affichage de constantes venant de config.php</h3>
<p>
<?php
echo DB_LOGIN."@".DB_SERVER
?>
</p>
<h3>On veut à nouveau récupérer le fichier config.php</h3>
<?php

require_once "config.php";
?>

<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus commodi aliquid tempore vel perferendis soluta, hic qui ut ad delectus non deleniti consequatur ipsam repudiandae dolor vitae? Voluptates, voluptatum quam? Sequi fugit similique alias repudiandae explicabo suscipit dolor nemo illum aliquid expedita soluta illo nobis laborum consequatur nihil, porro magni beatae eveniet quam sit error dicta possimus. Ut laudantium nemo nobis ipsum itaque commodi numquam, laboriosam sunt maiores iusto aspernatur doloremque temporibus reprehenderit id asperiores aut debitis deleniti nisi unde ab cupiditate? Optio, cum ab beatae, neque reiciendis rem dolorem laudantium culpa dolor sed quo earum, quibusdam in officiis quisquam? Minima provident repudiandae ipsa harum neque veniam asperiores. <br> <br> Aperiam voluptatem omnis iure? Quia consequuntur consectetur assumenda, repellat provident eligendi praesentium aliquid inventore optio nemo beatae, quas neque autem sit perspiciatis labore minima. Numquam veniam voluptatum nemo fugiat cum quae hic eligendi ex corrupti laudantium perferendis facilis rem, dolor, amet laborum sunt veritatis nihil. Aspernatur dolores maiores, numquam, vitae, iure sit assumenda ratione quidem accusantium sint in maxime sunt. Totam error sint esse laboriosam non, perferendis unde dolorem laborum temporibus distinctio facilis officia tenetur fugit qui nulla? Reprehenderit quis, numquam animi facilis reiciendis sit ut quasi omnis maiores! Saepe id recusandae consequuntur fugiat provident repellendus eaque magni eum aliquid. Iusto aut, sint sunt eligendi saepe nobis mollitia! Et fugiat illum vel harum nulla id, voluptatibus, perferendis fugit eum, sequi similique libero. Temporibus sunt in reprehenderit illum itaque eum velit adipisci. Vero provident facere eum voluptatem recusandae fuga! Tenetur, eveniet esse. Blanditiis veniam, ab fugiat distinctio cupiditate beatae! Consequatur exercitationem perspiciatis fuga sed iusto distinctio? Ad, eligendi. Commodi ratione quos perferendis eius saepe. Dolor eaque ipsam a doloribus, ut maiores doloremque eligendi, minus non maxime adipisci consectetur consequuntur dignissimos? <br><br> Doloribus ullam, esse, amet non est voluptates consequatur similique odio aperiam nihil perferendis deserunt laudantium dolorem delectus iusto minus laborum quae veniam natus consectetur itaque? Vitae harum rem aut officiis esse, aperiam excepturi eligendi labore veritatis rerum illo omnis laborum reiciendis nesciunt voluptate at qui atque iste! Eum asperiores atque, voluptatibus quia fugit ex iste illo cum saepe quisquam eaque doloribus eveniet ipsa ipsum error ducimus! Voluptatibus eaque iure vel! Sunt laudantium minima alias quaerat perferendis perspiciatis facere, incidunt autem. Impedit quam neque at in reiciendis dolores unde commodi cupiditate! Facere delectus quos veritatis eaque mollitia velit fugiat sit quisquam voluptatum, saepe labore recusandae, ullam aliquam? Ratione aliquam et dolores obcaecati dolor earum numquam aspernatur assumenda porro illum repellat perferendis cumque corporis odit nam qui vel veniam, rem ea necessitatibus. Voluptatibus porro placeat a laborum, cupiditate laudantium voluptates! Rem ut doloremque veniam modi expedita, delectus dolor facere. Unde suscipit dolore numquam placeat pariatur, repudiandae labore rem, maxime exercitationem, iure ipsa. Est vel eos ex! Accusantium ducimus quibusdam dolor. Dolore iure nulla ratione labore? Sequi aut minima architecto tempora ut quia laboriosam odio, vitae doloribus dolorem beatae sunt dignissimos consequatur quos. Nesciunt, tempore ducimus. Molestiae, fuga perspiciatis laboriosam reiciendis pariatur maxime at dolorum adipisci in veniam quibusdam, dolor quas deserunt. Doloremque voluptatem cumque quae.</p>
<?php
require_once "inc/menu.php";
?>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet quia excepturi laborum natus ratione. Quasi, totam! Voluptatum minima consequatur nam.</p>
</html>