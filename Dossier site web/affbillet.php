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
	<title>liste billets</title>
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
				les billets disponibles.
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
		$re = $bdd->query('SELECT id_b, titre_b, texte_b, DATE_FORMAT(date_b, "%d/%m/%Y à %Hh:%imin:%Ss") AS fornor FROM billets ORDER BY id_b DESC LIMIT 0, 10');
		while($donnees = $re->fetch())
			{?>
		<h3 style="background-color: black;color: white;text-align: center;margin-bottom: 0px;">
		
			<?php echo $donnees['titre_b'].'<br>ajouté le '.$donnees['fornor']; ?>
		 </h3>
		 <p style="background-color: white;text-align: center;margin-top: 0px;">
		 	<?php echo $donnees['texte_b']; ?><br><a href="combillet.php?num=<?php echo $donnees['id_b']; ?>">commentaire</a>
		 </p>
		<?php
	}?>
		</div>
	</section>
	<footer>
		<p class="pied">
			uvs, l'université de l'avenir ...<br><a href="deconnec.php">déconnexion</a>
		</p>
	</footer>
</body>
</html>