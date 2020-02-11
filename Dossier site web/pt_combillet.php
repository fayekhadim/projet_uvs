<?php 
session_start();

if(isset($_POST['soumis'])) 
{
	$nom = $_SESSION['prenom'].' '.$_SESSION['nom'];
	$id = $_SESSION['num'];
	$texte = htmlspecialchars(nl2br($_POST['texte']));

	if($nom&&$id&&$texte) 
	{
		include("connec.php");
		$req = $bdd->prepare('INSERT INTO comments(id_b_c, noms_c, texte_c) VALUES(:id, :nom, :texte)');
				if($req->execute(array('id'=>$id,
										 'nom'=>$nom,
										  'texte'=>$texte
				))) 
				{
					header("Location:combillet.php?num=$id");
				}
	}else echo "<h1>Veuillez remplir tous les champs !</h1>";
}

 ?>