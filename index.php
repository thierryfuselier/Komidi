<?php require('vote/_drawrating.php'); ?> <!-- IMPORTANT A AJOUTER AU DESSUS DE TOUTES VOS PAGES PHP. NE PAS METTRE D'ESPACE AVEC LE CODE HTML !!! -->
<!doctype html>
<html>
<head>
<title>Exemple de votes</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" language="javascript" src="js/behavior.js"></script>
<script type="text/javascript" language="javascript" src="js/rating.js"></script>
<link rel="stylesheet" type="text/css" href="css/rating.css" />
<style type="text/css">
.ruban {
height: 50px;
position: absolute;
left:-16px;
float: left;
box-shadow: 0px 0px 4px rgba(0,0,0,0.55);
z-index: 100;
}
 
.ruban h5 {
font-size: 25px;
color: #fff;
text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
text-align: center;
margin:10px;
}
 
.ruban_gauche {
border-style:solid;
border-width:15px;
height:0px;
width:0px;
position: absolute;
left: -30px;
z-index: -1;  /*s'affichera sous le rectangle  */
float:left;
}

#main {
position:relative;
z-index:1;
background-color: #fff;
background-image:-webkit-radial-gradient(center, circle farthest-corner, #fff, #e2e2e2);
background-image:-moz-radial-gradient(center, circle farthest-corner, #fff, #e2e2e2);
background-image:radial-gradient(center, circle farthest-corner, #fff, #e2e2e2);
margin: 0px auto;
box-shadow: 0 3px 3px rgba(0,0,0,0.2);
min-height:800px;
width:1024px;
padding:10px;
font:18px "Lucida Grande", Helvetica, Arial, Sans-Serif;
}
</style>
</head>

<body>
<div id="main">
<div class="ruban" style="background: #4976E1; top: 40px; width: 500px;">
<h5 id="titre"><a>CORRECTION DU CODE</a></h5>
</div>    	  
<div class="ruban_gauche" style="border-color: transparent #2E4886 transparent transparent; top: 75px;"></div>
<fieldset style="float:left;position:relative;top:120px;display:block;clear:both;"><legend>PHP</legend>
<?php echo rating_bar('correction','5'); ?></textarea>
</fieldset>
<fieldset style="float:left;position:relative;margin-top:150px;display:block;clear:both;"><legend>CSS</legend>
<p><b>N'oubliez pas de changer les images dans le fichier rating.css en fonction de celle que vous voulez !</b></p>
<textarea cols="50" style="max-width:500px;max-height:100px;">background: url('../images/starrating3.png') top left repeat-x;</textarea>
</fieldset>
<div id="block" style="display:block;clear:both;position:relative;height:20px;"></div>
</body>
</html>