<!DOCTYPE html>
<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=workshop','root','');

if(isset($_GET['id']) AND $_GET['id'] > 0)
{
	$getid = intval($_GET['id']);
	$requser = $bdd->prepare('SELECT * FROM membre WHERE id = ?');
	$requser->execute(array($getid));
	$userinfo = $requser->fetch();

?>
<html>
<head>
	<title> workshop</title>
	<meta charset="utf-8">
</head>
<body>
	<div align="center">
		<h2> Profil de <?php echo $userinfo['nom']; ?></h2>
		</br>
		Nom = <?php echo $userinfo['nom']; ?>
		<br />
		Mail= <?php echo $userinfo['mail']; ?>
		<br/>
		<?php
		if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id'])
		{
		?>
		<a href="editionprofil.php">Editer mon profil</a>
		<br/>
		<a href="deconnexion.php">Se deconnecter</a>
		<?php
		}
		?>
	</div>
</body>
</html>
<?php
}
?>