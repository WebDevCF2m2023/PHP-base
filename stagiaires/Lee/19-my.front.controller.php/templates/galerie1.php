<!DOCTYPE html>
<html lang="fr">
<head>
    <link href="styles/style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie</title>
</head>
<body>
    <header>
        <nav>
            <div>
                <div>
                    <hr>                
                    <h1 id="hspec">Site Préformation de Lee Brennan</h1>    
                    <hr>
                </div>
            </div>
            <ul>
                <a href="?section=home"><li>Home</li></a> 
                <a href="?section=entreprise"><li>Entreprise</li></a>
                <a href="?section=interview"><li>Interview</li></a>
                <a href="?section=museum"><li>Musée</li></a>
                <a href="?section=galerie"><li>Galerie</li></a>
                <a href="?section=conclusion"><li>Conclusion</li></a>
            </ul>
        </nav>
    </header>
        <section id="galpad">
        <h3>Cliquer sur une image pour l'agrandir</h3>

            <div>
                <ul>
                    <a href="?page=galerie && section=galerie2"><li>Page 2</li></a>
                    <a href="?page=galerie && section=galerie3"><li>Page 3</li></a>
                    <a href="?page=galerie && section=galerie4"><li>Page 4</li></a>
                </ul>
            </div>
    
            <a href="#img2"><img src="images/thumb/photo2.jpg" title="./..Les Mémoires"></a>             <!-- Création du lien vers l'image. La dénomination de cette manière permet de la rappeler dans la lightbox, qui est déclarée à la ligne suivante -->     
            <a href="#" class="lightbox" id="img2">                                                            
            <span style="background-image: url(images/orig/photo3.jpg)"></span></a>                      <!-- Utilisation de la balise Span pour contrôler la réaction des images -->   

            <a href="#img3"><img src="images/thumb/photo3.jpg" title="Encore les Mémoires"></a>
            <a href="#" class="lightbox" id="img3">
            <span style="background-image: url(images/orig/photo3.jpg)"></span></a>

            <a href="#img5"><img src="images/thumb/photo5.jpg" title="Timeline 1981"></a>
            <a href="#" class="lightbox" id="img5">
            <span style="background-image: url(images/orig/photo5.jpg)"></span></a>

            <a href="#img6"><img src="images/thumb/photo6.jpg" title="Timeline 1983"></a>
            <a href="#" class="lightbox" id="img6">
            <span style="background-image: url(images/orig/photo6.jpg)"></span></a>

            <a href="#img7"><img src="images/thumb/photo7.jpg" title="Timeline 1985"></a>
            <a href="#" class="lightbox" id="img7">
            <span style="background-image: url(images/orig/photo7.jpg)"></span></a>

            <a href="#img8"><img src="images/thumb/photo8.jpg" title="Timeline 1987"></a>
            <a href="#" class="lightbox" id="img8">
            <span style="background-image: url(images/orig/photo8.jpg)"></span></a>
             
            <a href="#img9"><img src="images/thumb/photo9.jpg" title="Timeline 1989-1991"></a>
            <a href="#" class="lightbox" id="img9">
            <span style="background-image: url(images/orig/photo9.jpg)"></span></a>
             
            <a href="#img10"><img src="images/thumb/photo10.jpg" title="Timeline 1992-1993"></a>
            <a href="#" class="lightbox" id="img10">
            <span style="background-image: url(images/orig/photo10.jpg)"></span></a>
             
            <a href="#img11"><img src="images/thumb/photo11.jpg" title="Timeline 1994-1995"></a>
            <a href="#" class="lightbox" id="img11">
            <span style="background-image: url(images/orig/photo11.jpg)"></span></a>
             
            <a href="#img12"><img src="images/thumb/photo12.jpg" title="Timeline 1996-1998"></a>
            <a href="#" class="lightbox" id="img12">
            <span style="background-image: url(images/orig/photo12.jpg)"></span></a>
             
            <a href="#img13"><img src="images/thumb/photo13.jpg" title="Timeline 1999-2000"></a>
            <a href="#" class="lightbox" id="img13">
            <span style="background-image: url(images/orig/photo13.jpg)"></span></a>
             
            <a href="#img14"><img src="images/thumb/photo14.jpg" title="Timeline 2001-2003"></a>
            <a href="#" class="lightbox" id="img14">
            <span style="background-image: url(images/orig/photo14.jpg)"></span></a>
        </section>
             
            
        <?php

include("../templates/inc/footer.php");
?>
      
</body>
</html>

