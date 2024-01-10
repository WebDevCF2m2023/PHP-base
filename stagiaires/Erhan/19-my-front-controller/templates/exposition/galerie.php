<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css"><title>Galerie</title>
</head>
<body class="foto-galerie">
  <div class="navbar">
    <div class="logo">
      <h4><a href="./?page=accueil">Erhan ERDAS</a></h4>
    </div>
    <nav class="navbar-sections">
      <a href="./?page=accueil">Accueil</a>
      <a href="?page=interview">Interview</a>
      <a href="?page=rapport">Conclusion</a>
      <a href="?page=expo">Exposition</a>
      <a href="#">Photos</a>
    </nav>
  </div>
  <div class="full-img" id="fullImgBox">
        <img src="image/eye.jpg" id="fullImg">  
        <span onclick="closefullImg()">X</span>
  </div>
  <div class="img-galerie">
        <img src="image/musee1.JPG" onclick="openfullImg(this.src)">
        <img src="image/musee2.JPG" onclick="openfullImg(this.src)">
        <img src="image/musee3.JPG" onclick="openfullImg(this.src)">
        <img src="image/musee4.JPG" onclick="openfullImg(this.src)">
        <img src="image/musee5.JPG" onclick="openfullImg(this.src)">
        <img src="image/musee6.JPG" onclick="openfullImg(this.src)"> 
        <img src="image/musee7.JPG" onclick="openfullImg(this.src)"> 
        <img src="image/musee8.JPG" onclick="openfullImg(this.src)"> 
        <img src="image/musee9.JPG" onclick="openfullImg(this.src)"> 
        <img src="image/musee10.JPG" onclick="openfullImg(this.src)"> 
        <img src="image/musee11.JPG" onclick="openfullImg(this.src)"> 
        <img src="image/musee12.JPG" onclick="openfullImg(this.src)"> 
  </div>
  <script>
        var fullImgBox = document.getElementById('fullImgBox'); 
        var fullImg = document.getElementById('fullImg'); 

        function openfullImg(pic){
            fullImgBox.style.display = 'flex';
            fullImg.src = pic;
        }

        function closefullImg(){
            fullImgBox.style.display = 'none';
        }
      </script>  
    </body>
</html>