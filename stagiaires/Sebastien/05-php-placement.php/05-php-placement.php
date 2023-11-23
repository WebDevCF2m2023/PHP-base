<?php // Début du code PHP
  // Prenons la date et heure du jour dans une variable
  
  $date = date("d/m/Y H:i:s"); // format datetime MySQL
// Fin du code PHP
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
function startTime()
{
  actualiser();
  setInterval(() => {
    actualiser();
  }, 1000);
}

function actualiser(){
  
  var aujourdhui=new Date()
  var h=aujourdhui.getHours()
  var m=aujourdhui.getMinutes()
  var s=aujourdhui.getSeconds()
  
  h=checkTime(h)
  m=checkTime(m)
  s=checkTime(s)
  document.getElementById('txt').innerHTML=h+":"+m+":"+s
}

function checkTime(i)
{
if (i<10)
  {i="0" + i}
  return i
}
</script>

  <title>05 date <?= date("H:i") // heure et minute?></title>
  <style>
    body{
      background-color:black;
    }
    h1{
      font-size: 10rem;
      color:red;
    }
    p{
      font-size: 10rem;
      color:yellow;
    }
  </style>
</head>
<body onload="startTime()">
<div id="txt" style="color:white; font-size:10rem;"></div>
  <h1>05 date <?= $date?></h1>
  <p>Il est <?= date("H:i:s") // heure, minute et seconde?></p>
</body>
</html>
<?php
// on peut même mettre du code PHP après la fermeture de la balise HTML
?>