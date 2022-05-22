<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../script/style.css">
	<title>Quiz</title>

</head>	
<header>
<a href="../index.html"><img src="../Images/Logo2.png" width="400"></header></a>
<body>
<nav><a class="top"></a>
	<a class="abouton" href="../index.html"><img class="iconmenu" src="../Images/HomeIcons.png">&nbsp;Accueil</a>
	<a class="abouton" href="../pages/page1.html"><img class="iconmenu" src="../Images/GenshIcon.png">&nbsp;Découverte du jeu</a>
	<a class="abouton" href="../pages/page2.html"><img class="iconmenu" src="../Images/CharacterIcon.png"> &nbsp;Personnages</a>
	<a class="abouton" href="../pages/page3.html"><img class="iconmenu" src="../Images/MapIcon.png">&nbsp;Exploration</a>
	<a class="abouton" href="#"><img class="iconmenu" src="../Images/QuizIcon.png">&nbsp;Quiz</a>
</nav>
<a class="button" href="#top">↑</a>
<div class="container">
<img class="imgif2" src="../images/paimon.png"><div class="text-perso"><h2 style="font-size:35px;">Bienvenue sur le quiz !<br>Montrez que vous êtes un expert de Genshin Impact&nbsp;!</h2><p style="font-size:18px;">Fan de Genshin Impact ? Venez tester vos connaissances !<br></p>
</div></div>
<?php 
if (!isset($_POST["soum"])){
?>
<!--Formulaire-->
<div class="text-quiz">
<form method="POST">
<ol>
<li class="liquiz"><h1 style="padding-top:20px; font-size: 24px; text-align: center;">Comment se nomment les Jumeaux ?</h1><br/>
<img src="../images/twins.jpg" width="700"><div class="align">
<p><input type="radio" id="twins" name="twins" value="twins1">Lumin et Eden</input><br>
<input type="radio" id="twins" name="twins" value="twins2">Lumine et Aether</input><br>
<input type="radio" id="twins" name="twins" value="twins3">Loumine et Heather</input>
</p></div></li><br/>

<li class="liquiz"><h1 style="padding-top:20px; font-size: 24px; text-align: center;">Quel personnage est l'Archon Géo ?</h1><br/>
<img src="../images/morax.png" width="700" style="padding-top: 1px;"><div class="align">
<p><input type="radio" id="archongeo" name="archongeo" value="archongeo1">Zongli</input><br>
<input type="radio" id="archongeo" name="archongeo" value="archongeo2">Gorou</input><br>
<input type="radio" id="archongeo" name="archongeo" value="archongeo3">Albedo</input>
</p></div></li><br/>

<li class="liquiz"><h1 style="padding-top:20px; font-size: 24px; text-align: center;">Quel est le nom de la flotte de Beidou ?</h1><br/>
<img src="../images/crux.webp" width="700"><div class="align">
<p><input type="radio" id="beidou" name="beidou" value="beidou1">Flotte du Crux </input><br>
<input type="radio" id="beidou" name="beidou" value="beidou2">Perle Écarlate</input><br>
<input type="radio" id="beidou" name="beidou" value="beidou3">Dragon de l'Océan</input>
</p></div></li><br/>

<li class="liquiz"><h1 style="padding-top:20px; font-size: 24px; text-align: center;">La surchage (réaction élémentaire) provoquée par...</h1><br/>
<img src="../images/barbara.jpg" width="700">
<p><div class="align"><input type="radio" id="surchage" name="surchage" value="surchage1">l'Anémo + l'Électro</input><br>
<input type="radio" id="surchage" name="surchage" value="surchage2">le Pyro + le Dendro</input><br>
<input type="radio" id="surchage" name="surchage" value="surchage3">l'Électro + le Pyro</input>
</p></div></li><br/>

<li class="liquiz"><h1 style="padding-top:20px; font-size: 24px; text-align: center;">Quelle ville a été inspirée par l'architecture allemande ?</h1><br/>
<img src="../images/q5.jpg" width="700">
<p><div class="align"><input type="radio" id="ville" name="ville" value="ville1">Mondstadt</input><br>
<input type="radio" id="ville" name="ville" value="ville2">Liyue</input><br>
<input type="radio" id="ville" name="ville" value="ville3">Inazuma</input>
</p></div></li><br/>
</ol><input type="submit" name="soum" value="Valider vos réponses"/>
</form>
</div>
<?php
exit();
}
//Traitement
//Test d'erreur
$erreur=0;
if(empty($_POST["twins"])){
  print "Vous devez sélectionner une réponse pour la question 1 !<br>";
  $erreur=1;
}
if(empty($_POST["archongeo"])){
  print "Vous devez sélectionner une réponse pour la question 2 !<br>";
  $erreur=1;
}
if(empty($_POST["beidou"])){
  print "Vous devez sélectionner une réponse pour la question 3 !<br>";
  $erreur=1;
}
if(empty($_POST["surchage"])){
  print "Vous devez sélectionner une réponse pour la question 4 !<br>";
  $erreur=1;
}
if(empty($_POST["ville"])){
  print "Vous devez sélectionner une réponse pour la question 5!<br>";
  $erreur=1;
}
if($erreur==1){
  print "<br><a class=\"mapbouton\" href=\"page4.php\">Retourner au quiz</a></body></html>";
  exit();
}
//Etat du monde
$soum=$_POST["soum"];
$twins=$_POST["twins"];
$archongeo=$_POST["archongeo"];
$beidou=$_POST["beidou"];
$surchage=$_POST["surchage"];
$ville=$_POST["ville"];

$listereponses=array("twins1"=>"<p>Mauvaise réponse</p>","twins2"=>"<p>Bonne réponse</p>", "twins3"=>"<p>Mauvaise réponse</p>",
  "archongeo1"=>"<p>Bonne réponse</p>","archongeo2"=>"<p>Mauvaise réponse</p>", "archongeo3"=>"<p>Mauvaise réponse</p>",
  "beidou1"=>"<p>Bonne réponse</p>","beidou2"=>"<p>Mauvaise réponse</p>", "beidou3"=>"<p>Mauvaise réponse</p>",
  "surchage1"=>"<p>Mauvaise réponse</p>","surchage2"=>"<p>Mauvaise réponse</p>", "surchage3"=>"<p>Bonne réponse</p>",
  "ville1"=>"<p>Bonne réponse</p>","ville2"=>"<p>Mauvaise réponse</p>", "ville3"=>"<p>Mauvaise réponse</p>");



$listescoretwins=array("twins1"=> 0,"twins2"=>1, "twins3"=>0);

$listescorearchongeo=array("archongeo1"=>1,"archongeo2"=>0, "archongeo3"=>0);

$listescorebeidou=array("beidou1"=>1,"beidou2"=>0, "beidou3"=>0);

$listescoresurchage=array("surchage1"=>0,"surchage2"=>0, "surchage3"=>1);

$listescoreville=array("ville1"=> 1,"ville2"=>0, "ville3"=>0);

$score=$listescoretwins[$twins]+$listescorearchongeo[$archongeo]+$listescorebeidou[$beidou]+$listescoresurchage[$surchage]+$listescoreville[$ville];
?>
<div style="padding: 10px;"class="liquiz">
<img src="../images/nicejob.jpg" width="400px">
<p style="font-size:25px;">Merci d'avoir participé au quiz !<br><br>Votre score est de <?php print($score)?> / 5
<? if ($score>=3){print "<p>Vous vous y connaissez dis donc !</p>";}
else {print "<p>Vous pouvez faire mieux !</p>";}
?>
<br></p>
</div>

</ul>
</body>
</html>
