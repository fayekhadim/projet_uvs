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
	<title>billets</title>
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
				<?php echo 'on debat '.$_SESSION['prenom'].' '.$_SESSION['nom'].'<br>'; ?>
				ajoutez un billet et discutons en.
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
		<fieldset>
			<legend>Veuillez remplir ce formulaire.</legend>
		<table>
			<form method="post" action="pt_ajou_billet.php">
			<tr>
				<td><label for="titre">titre</label> :</td>
				<td><input type="text" name="titre" id="titre" required></td>
			</tr>
			<tr>
				<td><label for="texte">Billet</label> :</td>
				<td><textarea name="texte" id="texte" rows="10" cols="20"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="soumis" value="Ajouter"></td>
			</tr>
			</form>
		</table>
		</fieldset>
	</div>
	</section>
	<footer>
		<p class="pied">
			uvs, l'université de l'avenir ...<br><a href="deconnec.php">déconnexion</a>
		</p>
	</footer>
</body>
</html>