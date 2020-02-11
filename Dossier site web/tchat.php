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
	<title>commentaire</title>
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
				vos discussions.
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
	<section style="background-color: silver;">
		<div id="b2">
			<?php 
				include("connec.php");
		$re = $bdd->query('SELECT nom_tch, texte_tch, DATE_FORMAT(date_tch, "%d/%m/%Y à %Hh:%imin:%Ss") AS fornor FROM tchats ORDER BY fornor DESC LIMIT 0, 10');
		while($donnees = $re->fetch())
			{?>
				<p style="background-color: white;">
				<?php echo $donnees['nom_tch'].' : '.$donnees['fornor'].'<br>'.$donnees['texte_tch']; ?>
				<?php 
				
			}

			?></p>
		<form method="post" action="pt_tchat.php">
		<label for="texte">Ton mot</label> :
				<input type="text" name="texte" id="texte" required><br>
				<input type="submit" name="soumis" value="Envoyer">
		</form>		
		</div>
	</section>
	<footer>
		<p class="pied">
			uvs, l'université de l'avenir ...<br><a href="deconnec.php">déconnexion</a>
		</p>
	</footer>
</body>
</html>