<?php 

// Sidebar 5 mieux notés
	ob_start();
	?>
<?php

	$BDD_ADRESSE = "mysql:host=127.0.0.1";
	$BDD_DBNAME = "db_komidi";
	$BDD_LOGIN = "root";
	$BDD_PASSWORD = "btssio";

	try {
		$bdd = new PDO("$BDD_ADRESSE;dbname=$BDD_DBNAME", $BDD_LOGIN, $BDD_PASSWORD);
		} catch(Exception $e) {
	exit('Impossible de se connecter à la base de données.');
		}
$requete = "SELECT Spe_id, Spe_titre FROM spectacles ORDER BY RAND(5)";
// exécution de la requête
$resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));
?>
<div class="col-xs-6 col-sm-9 sidebar-offcanvas" id="sidebar">
	<div class="panel panel-success">
		<div class="panel-heading">Les 5 spectacles les mieux notés</div>
		<div class="container">
	<?php
$i = 1;
while($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
?>

<div class="row">
<div class="col-lg-6">
<div class="panel-group" id="accordion">
<!-- Question -->
<?php echo htmlentities($donnees['spe_id'], ENT_QUOTES, 'UTF-8'); ?>
<div class="panel panel-default">
<div class="panel-heading"><h4 class="panel-title">
<a class="accordion-toggle" data-toggle="collapse" href="#collapseOne">
Spectacle <?php echo $i; ?></a></h4></div>
<!-- div de la Reponses -->
<div id="collapseOne" class="panel-collapse collapse">
<div class="panel-body">
<?php echo htmlentities($donnees['spe_titre'], ENT_QUOTES, 'UTF-8'); ?>
</div>
</div>
</div>
</div>
</div><?php
$i++;} ?>
		</div>
	</div>
</div>
</div>
<?php
$sidebarpage = ob_get_clean();
?>