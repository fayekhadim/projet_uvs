<?php 

if($_POST['soumis']) 
{
	$prenom = htmlspecialchars($_POST['prenom']);
	$nom = htmlspecialchars($_POST['nom']);
	$email = htmlspecialchars($_POST['email']);
	$phon = htmlspecialchars($_POST['phon']);
	$pass = htmlspecialchars($_POST['pass']);
	$cfpass = htmlspecialchars($_POST['cfpass']);

	if($prenom&&$nom&&$email&&$phon&&$pass&&$cfpass) 
	{
		if(preg_match("#^7[6-80][-_ .]?[0-9]{3}([-_ .]?[0-9]{2}){2}$#", $phon)) 
	{
		$passe = $pass;
	}else die("<h1>Veuillez saisir un bon numero !</h1>");
		if($passe == $cfpass) 
		{
			include("connec.php");
		$re1 = $bdd->prepare('SELECT email_m FROM membres WHERE email_m = :email');
		$re1->execute(array('email'=>$email
		));
		while($donnees = $re1->fetch())
			if($email == $donnees['email_m']) 
			{
				die("<h1>Cet email existe déja !</h1>");
			}
			if($email != $donnees['email_m']) 
			{
				$req = $bdd->prepare('INSERT INTO membres(prenom_m, nom_m, email_m, telephone_m, mot_de_passe_m) VALUES(?,?,?,?,?)');
				if($req->execute(array($prenom, $nom, $email, $phon, $passe))) 
				{
					session_start();
					$_SESSION['nom'] = $nom;
					$_SESSION['prenom'] = $prenom;
					header('Location:acceuil.php');
				}else echo "<h1>Erreur lors de l'enregistrement !</h1>";

			}
	}else echo "<h1>Les mots de passe ne correspondent pas !</h1>";
}else echo "<h1>Veuillez remplir tous les champs !</h1>";
		
}

 ?>