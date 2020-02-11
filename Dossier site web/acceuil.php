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
	<title>acceuil</title>
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
				bienvenue dans ton espace m.i.c
			</p>
		</header>
	</div>
	<div id="b3">
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
	</div>
	<section>
		<div id="b2" style="background-color: white;">
<p border="1px"><center>
<table width="600px" style="text-align: center;">
<tr>
<td><img src="image/Logo.jpg" width="100px" height="90"></td>
<td colspan="3"><h1 style="color: red;">République Du Sénégal</h1><h5 style="color: red;">Un peuple-Un But-Une Foi</h5><h4 style="color: red;">MINISTERE DE L'ENSEIGNEMENT SEPERIEUR ET DE LA RECHERCHE</h4><h5 style="color: red;">SCIENCE ECONOMIQUE ET SOCIALE<br>Management Informatise Des organisations</h5></td>
<td ><img src="image/sceau.jpg" width="100px" height="80"></td>
</tr>
<p>
<tr class="a">
<td ><h5>Mot du chef</h5></td>
<td ><h5>Le Departement</h5></td>
<td><h5>Les Enseignants</h5></td>
<td ><h5>Emploi Du Temps</h5></td>
<td ><h5>Contacts</h5></td>
</tr>
</p>
<tr>
<td colspan="5"><img src="image/eno.jpg" width="600px" height="200"></td>
</tr>
<p>
<tr class="a">
<td colspan="5"><h5>Khadim FAYE, Pape Semoune MBAYE, Baba AIDARA, DAKAR LE 6/12/2019</h5></td>
</tr>
</p>
</table></center>
		</div>
	</section>
	<footer>
		<p class="pied">
			uvs, l'université de l'avenir ...<br><a href="deconnec.php">déconnexion</a>
		</p>
	</footer>
</body>
</html>