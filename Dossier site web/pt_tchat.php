<?php 
session_start();

if(isset($_POST['soumis'])) 
{
	$nom = $_SESSION['prenom'].' '.$_SESSION['nom'];
	
	$texte = htmlspecialchars(nl2br($_POST['texte']));

	if($nom&&$texte) 
	{
		include("connec.php");
		$req = $bdd->prepare('INSERT INTO tchats(nom_tch, texte_tch) VALUES(:nom, :texte)');
				if($req->execute(array(	 'nom'=>$nom,
										  'texte'=>$texte
				))) 
				{
					header("Location:tchat.php");
				}
	}else echo "<h1>Veuillez remplir tous les champs !</h1>";
}

 ?>