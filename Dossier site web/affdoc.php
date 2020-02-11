<?php 
session_start();
if(empty($_SESSION['prenom']) || empty($_SESSION['nom']))
{
	header('Location:connection.php');
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>ducuments</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="abc.css">
</head>
<body>
	<div id="b1">
			<p>
				<img src="image/logouvs.png" width="150px">
			</p>
		<header>
			
			<p class="tet">
				<?php echo 'bonjour '.$_SESSION['prenom'].' '.$_SESSION['nom'].'<br>'; ?>
				documents disponibles
			</p>
		</header>
	</div>
	<div id="b3">
	<nav>
		<p class="ng">
			<ul>
				<li>
					<a href="acceuil.php">Acceuil</a>
				</li>
				<li>
					<a href="tchat.php">Discussions</a>
				</li>
				<li>
					<a href="affbillet.php">Billets</a>
				</li>
				<li>
					<a href="ajou_billet.php">Ajouter un billet</a>
				</li>
				<li>
					<a href="affdoc.php">Documents</a>
				</li>
				<li>
					<a href="partdoc.php">Ajouter un documents</a>
				</li>
			</ul>
		</p>
	</nav>
	</div>
	<section>
		<div id="b2">
			<?php 
		include("connec.php");
		$re1 = $bdd->query('SELECT nom_d, adresse_d, taille_d FROM documents');
		while($donnees = $re1->fetch()) 
		{
		 	?>
		 	<ul style="background-color: silver;">
		 	<li><?php echo $donnees['nom_d'].'  taille:('.$donnees['taille_d'].')  '.'<a href="'.$donnees['adresse_d'].'">Télécharger</a>'; ?></li>
		 	</ul>
		 <?php 
		}
		 ?>
		</div>
	</section>
	<footer>
		<p class="pied">
			uvs, l'université de l'avenir ...<br><a href="deconnec.php">déconnexion</a>
		</p>
	</footer>
</body>
</html>