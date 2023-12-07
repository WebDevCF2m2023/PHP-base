<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Include</h1>
    <?php
    //On importe sans erreurs fatales en cas d'échecs, le menu
    //Le texte "on a  du texte ici" apparait 
include "inc/menu.php";
    ?>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa vel aperiam eligendi. Corrupti, maiores architecto non natus, voluptate tenetur ducimus et tempora voluptas omnis magnam illum a impedit laboriosam tempore debitis dicta odit incidunt provident. Nostrum excepturi rerum, repudiandae assumenda vitae debitis ipsam praesentium commodi, consectetur ducimus repellat non quas eius quibusdam recusandae tempora. Accusantium natus id voluptates architecto earum dolorum, reprehenderit quidem ratione praesentium cupiditate culpa dignissimos nobis. Ab maxime cupiditate nesciunt quod suscipit, odio nihil optio quisquam. Maiores dolore id exercitationem assumenda iste veritatis doloremque cumque cum nostrum provident. Officiis cupiditate illo reprehenderit consectetur, totam modi ipsum ab laboriosam neque voluptas. Tempore, repellendus reprehenderit maiores debitis blanditiis mollitia unde, explicabo animi quaerat at ducimus ullam vero! A corrupti vitae quos sunt aliquid molestiae recusandae voluptatibus animi aliquam soluta at accusamus, doloribus ex perspiciatis modi dolores libero aperiam necessitatibus harum magnam natus illo. Fuga, voluptatum a. Delectus possimus aperiam, esse velit illo amet voluptatum laudantium beatae facere, exercitationem est alias omnis? Laudantium aliquid totam, dolorem ducimus fugit officia. Ullam porro laboriosam ex corporis maiores reprehenderit quo harum inventore fugit voluptatem eligendi, ab similique, consectetur enim perspiciatis eos voluptatibus iusto! Mollitia dolor repudiandae facilis consectetur quisquam ipsum ad aliquam assumenda doloremque sunt saepe omnis animi tempore illo, adipisci modi, vel rem veniam aut tenetur aperiam architecto explicabo nostrum. Ratione tenetur asperiores, laudantium nam facilis nemo perspiciatis distinctio dolores voluptatibus deleniti aliquid maxime explicabo libero eius rerum soluta id assumenda corrupti neque ipsam sapiente autem enim fugiat numquam! Hic, laudantium saepe distinctio possimus facilis perferendis debitis exercitationem a corporis temporibus maxime? Perferendis eius nisi dignissimos corrupti ullam quasi sint accusantium, sit eligendi, quisquam quam? Necessitatibus exercitationem placeat molestias, a inventore tempora! Nisi illo illum quam necessitatibus nihil enim quas quibusdam, debitis atque omnis maxime hic, quisquam tempora animi pariatur! Ipsum rerum enim, voluptas tenetur nesciunt mollitia officiis asperiores quis. Vitae minima ad mollitia tempora assumenda, commodi ea ducimus molestias eaque ratione corrupti dolorum. Cupiditate rem unde necessitatibus nemo mollitia nihil atque sit, sapiente fuga eos velit aperiam esse facilis corrupti deleniti vel! Tempora dolores porro repellendus voluptas magni reprehenderit fuga soluta voluptate, temporibus repudiandae esse voluptatem omnis eaque expedita iure laboriosam est ratione alias quo nam, quod minima, explicabo nesciunt. Minima placeat, quibusdam et adipisci alias optio delectus, similique at quam quo inventore modi libero! Quis nisi deserunt est eveniet dolorum accusamus impedit non quidem temporibus, voluptas explicabo sapiente architecto molestiae!</p>
    <?php
    //On recharge le menu, include permet de recharger autant de fois qu'on le souhaite ! 
    include "inc/menu.php";
    ?>
    

    </body>
</html>