<?php 
session_start();
if(empty($_SESSION['prenom']) || empty($_SESSION['nom']))
{
	header('Location:connection.php');
}
$id = $_GET['num'];
$_SESSION['num'] = $id;
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
				les commentaires de billets.
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
		$re = $bdd->prepare('SELECT id_b, titre_b, texte_b, DATE_FORMAT(date_b, "%d/%m/%Y à %Hh:%imin:%Ss") AS fornor FROM billets WHERE id_b = :id');
		$re->execute(array('id'=>$id));
		while($donnees = $re->fetch())
			{?>
		<h3 style="background-color: black;color: white;text-align: center;margin-bottom: 0px;">
		
			<?php echo $donnees['titre_b'].'<br>ajouté le '.$donnees['fornor']; ?>
		 </h3>
		 <p style="background-color: white;text-align: center;margin-top: 0px;">
		 	<?php echo $donnees['texte_b']; ?>
		 </p>
		<?php
	}?>
			<?php 
			$ree = $bdd->prepare('SELECT id_c, id_b_c, noms_c, texte_c, DATE_FORMAT(date_c, "%d/%m/%Y à %Hh:%imin:%Ss") AS forno FROM comments WHERE id_b_c = :id ORDER BY id_c DESC LIMIT 0, 10' );
		$ree->execute(array('id'=>$id));
		while($donnee = $ree->fetch())
			 {?>
		<p style="background-color: silver;">	
			<?php 
				echo $donnee['noms_c'].' ('.$donnee['forno'].') :<br>'.$donnee['texte_c'];
			 ?>
		</p>
		<?php 
			}
		 ?>
		<form method="post" action="pt_combillet.php">
		<label for="texte">Commentaire</label> :
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