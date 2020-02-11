<?php 
if(isset($_POST['soumis'])) 
{
	$titre = htmlspecialchars($_POST['titre']);
	$texte = htmlspecialchars(nl2br($_POST['texte']));

	if($titre&&$texte) 
	{
		include("connec.php");
		$req = $bdd->prepare('INSERT INTO billets(titre_b, texte_b) VALUES(?,?)');
				if($req->execute(array($titre, $texte))) 
				{
					header("Location:affbillet.php");
				}
	}else echo "<h1>Veuillez remplir tous les champs !</h1>";
}
 ?>
