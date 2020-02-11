<!DOCTYPE html>
<html>
<head>
	<title>connection</title>
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
				connectez vous et profitez pleinement.<br><a href="inscription.php">inscription</a>
			</p>
		</header>
	</div>
	<section>
		<div id="b2">
		<fieldset>
			<legend>Veuillez remplir ce formulaire.</legend>
		<table>
			<form method="post" action="pt_connection.php">
			<tr>
				<td><label for="email">Email</label> :</td>
				<td><input type="email" name="email" id="email" required></td>
			</tr>
			<tr>
				<td><label for="pass">Mot de passe</label> :</td>
				<td><input type="password" name="pass" id="pass" required></td>
			</tr>
			<tr>
				<td><input type="submit" name="soumis" value="Connection"></td>
			</tr>
			</form>
		</table>
		</fieldset>
	</div>
	</section>
	<footer>
		<p class="pied">
			uvs, l'université de l'avenir ...
		</p>
	</footer>
</body>
</html>