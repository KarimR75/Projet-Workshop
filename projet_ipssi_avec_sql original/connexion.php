<?php
session_start();
require_once("db.php");
if (count($_POST) > 0) {

	$mail = $_POST["mail"];
	$psw = $_POST["motdepasse"];
	$sql = "select count(*)  ID, prenom, nom , mail , motdepasse from membre
where mail= '" . $mail . "' and motdepasse = '" . $psw . "'";

	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	$reponse = $row[0];
	if ($reponse == 1) {
		$_SESSION['id'] = $row['ID'];
		$_SESSION['leprenom'] = $row['prenom'];
		$_SESSION['lenom'] = $row['nom'];
		$_SESSION['lemail'] = $row['mail'];
		$_SESSION['lemotdepasse'] = $row['motdepasse'];





		header('Location: index.php');


		echo ("<h1> bonjour " . $_SESSION["prenom"] . " " . $_SESSION["nom"]);
	} else {
		echo "<h1> erreur de connexion</h1>";
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>
		IPSSI PARIS SPORT
	</title>
	
</head>
<style>
	body {
		margin: 0;
		padding: 0;
		font-family: sans-serif;
		background:  #E8E8E8;
	}

	.box {
		width: 350px;
		padding: 40px;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		text-align: center;
		border-radius: 15px;
		border: 3px solid #191919;
	}

	.box h1 {
		color: black;
		text-transform: uppercase;
		font-weight: 500;
	}

	.box input[type="text"],
	.box input[type="password"] {
		border: 0;
		background: none;
		display: block;
		margin: 20px auto;
		text-align: center;
		border: 2px solid #EC0433;
		padding: 14px 10px;
		width: 260px;
		outline: none;
		color: black;
		border-radius: 24px;
		transition: 0.25s;
	}

	.box input[type="text"]:focus,
	.box input[type="password"]:focus {
		width: 320px;
		border-color: #003b6e;
	}

	.box input[type="submit"] {
		border: 0;
		background: none;
		display: block;
		margin: 20px auto;
		margin-left: 5px;
		margin-right: 5px;
		border: 2px solid #EC0433;
		padding: 14px 40px;
		outline: none;
		color: #EC0433;
		border-radius: 24px;
		transition: 0.25s;
		cursor: pointer;
		display: inline-block;
		width: 160px;
	}

	.box input[type="submit"]::placeholder {
		text-align: center;
	}

	.box input[type="submit"]:hover {
		background: #003b6e;
		color: #E8E8E8;
		border: 2px solid #E8E8E8;
	}
</style>

<body>
	<?php include("code_header.htm"); ?>
	<form class='box' action='' method='post'>
		<h1> Connexion </h1>
		<input type="text" name="mail" placeholder="mail" required>
		<input type="password" name="motdepasse" placeholder="Mot de passe" required>
		<input type="submit" name="" value="Se connecter" haref>
	</form>
</body>

</html>