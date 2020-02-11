<?php 
if(isset($_POST['soumis'])) 
{
	$nom = $_FILES['doc']['name'];
	$taille = $_FILES['doc']['size'];
	$ad_temp = $_FILES['doc']['tmp_name'];
	$erreur = $_FILES['doc']['error'];
	$extend = strrchr($nom,".");
	$adresse = 'uploads/Document:_'.md5($nom ,false).$extend;;
	$f_adresse = 'Document_'.md5($nom ,false).$extend;;
	$ez = 'uploads/';
	echo '<h2>taille : '.$_FILES['doc']['size'].'</h2>';
		$auto_extend = array(".pdf", ".PDF");
		if(in_array($extend, $auto_extend)) 
		{
			$resul = move_uploaded_file($ad_temp, $ez.$f_adresse);
			if($resul) 
			{
			include("connec.php");
			$req = $bdd->prepare('INSERT INTO documents(nom_d, adresse_d, taille_d) VALUES(?,?,?)');
				if($req->execute(array($nom, $adresse, $taille
					))) 
				{
					header("Location:affdoc.php");
				}
			}else echo "<h1>Erreur lors de l'enregistrement !</h1>";
		}else echo "<h1>Seul les fichiers pdf sont autorisés !</h1>";
	
}

 ?>