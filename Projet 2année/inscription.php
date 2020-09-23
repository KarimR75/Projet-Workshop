<!DOCTYPE html>
<?php
require_once("db2.php");


if(isset($_POST['forminscription'])) {


    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $mail = htmlspecialchars($_POST['mail']);
    $mdp = sha1($_POST['mdp']);
    $mdp2 = sha1($_POST['mdp2']);

    $insertmbr = $bdd->query("INSERT INTO utilisateur(prenom, nom, email, motdepasse)values
('$prenom','$nom','$mail','$mdp')");
    //$insertmbr = $bdd->prepare("INSERT INTO utilisateur(nom, prenom, mail, motdepasse) VALUES( ?, ?, ?, ?)");
    //$insertmbr->execute(array($nom, $prenom, $mail, $mdp));

}

?>
<html>
<head>
	<title> workshop</title>
	<meta charset="utf-8">
	
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
		width: 260px;
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
	<div align="center">
		<h2> </h2>
		</br>
		<form class='box' action='inscription.php' method='post'>
			<table>
				<tr>
					<td align="right">
						<label for="nom">
						Nom: </label>
					</td>
					<td>
						<input type="text" placeholder="Votre nom" id="nom" name="nom" value="<?php  if(isset($nom)) {echo $nom;} ?>" />
					</td>
				</tr>	
				<tr>
					<td align="right">
						<label for="prenom">
						Prenom: </label>
					</td>
					<td>
						<input type="text" placeholder="Votre prenom" id="prenom" name="prenom" value="<?php  if(isset($prenom)) {echo $prenom;} ?>"/>
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="mail">
						Mail: </label>
					</td>
					<td>
						<input type="text" placeholder="Votre mail" id="mail" name="mail" value="<?php  if(isset($mail)) {echo $mail;} ?>"/>
					</td>
				</tr>	
				<tr>
					<td align="right">
						<label for="mdp">
						Mot de passe: </label>
					</td>
					<td>
						<input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp"/>
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="mdp2">
						Confirmez le mot de passe: </label>
					</td>
					<td>
						<input type="password" placeholder="Confirmez le mdp" id="mdp2" name="mdp2"/>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<br>
						<input type="submit" value="Je m'inscris" name="forminscription">
					</td>
				</tr>			

    <div class ="container">
        <div class="formulaire">
            <h1 class ="votrecompte"> VOS COORDONNÉES BANCAIRES </h1>

            <form method="post" action="confirmation.php">

                <input type="name" placeholder="Nom du titulaire" required>

                <br />

                <input type="text" placeholder="Numéro de la carte"
                       size="12" minlength="12" maxlength="12"
                       pattern="[0-9]{12}"required>


                <br />

                <input type="text" placeholder="Date de fin de validité"
                       size="4" minlength="4" maxlength="4"
                       pattern="[0-9]{4}"required>

                <br />

                <input type="CVV" placeholder="CVV"
                       size="3" minlength="3" maxlength="3"
                       pattern="[0-9]{3}"required>

                <br />
                <input type="submit" value="ACHETER !">
            </form>
        </div>
    </div>
            </table>
        </form>

    </div>

</body>
</html>