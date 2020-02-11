<?php 
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projetpilote;charset=utf8','root','');
}
catch(Exeption $e)
	{
		die('Erreur '.$s->getMessage());
	}
 ?>