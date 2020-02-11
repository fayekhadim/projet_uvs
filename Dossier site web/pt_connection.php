<?php 
session_start();
if($_POST['soumis'])
{
	$email = htmlspecialchars($_POST['email']);
	$pass = htmlspecialchars($_POST['pass']);

	if($email&&$pass) 
	{
		include("connec.php");
		$re = $bdd->prepare('SELECT * FROM membres WHERE email_m = ?');
		$re->execute(array($email));
		while($donnees = $re->fetch())
			
			if($donnees['mot_de_passe_m'] == $pass && $donnees['email_m'] == $email) 
				{	
					$_SESSION['prenom'] = $donnees['prenom_m'];
					$_SESSION['nom'] = $donnees['nom_m'];
					header('Location:acceuil.php');
				}
				if($donnees['mot_de_passe_m'] !== $pass || $donnees['email_m'] !== $email) 
				{
					die("<h1>Les données ne corespondent pas !</h1>");
				}
	}else echo "<h1>Veuillez remplir tous les champs !</h1>";
}
 ?>
