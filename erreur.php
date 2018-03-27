      
<!DOCTYPE html>

<html lang="fr">
<head>

  <title>Ajout adminisrateur</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <style>

  body {
    background: url(images/montagne1.jpg); 
  }

</style>
</head>

<body>
<!DOCTYPE html>

<html lang="fr">
<head>

	<title>Profil</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="css/bootstrap.min.js"></script>
	<link href="css/style_profil.css" rel="stylesheet">
	</head>

<body>


	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">JNAK - CPIR</a>
			</div>
			<ul class="nav navbar-nav" style="font-size:15px">
				<li><a href="index.php">Accueil</a></li>
				<li><a href="ajout.php">Inscription</a></li>
				<li class="active"><a href="profil.php">Profil</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
	</nav>
<?php
switch($_GET['erreur'])
{
   case '400':
   echo 'Échec de l\'analyse HTTP.';
   break;
   case '401':
   echo 'Le pseudo ou le mot de passe n\'est pas correct !';
   break;
   case '402':
   echo 'Le client doit reformuler sa demande avec les bonnes données de paiement.';
   break;
   case '403':
   echo 'Requête interdite !';
   break;
   case '404':
   echo 'La page n\'existe pas ou plus !';
   break;
   case '405':
   echo 'Méthode non autorisée.';
   break;
   case '500':
   echo 'Erreur interne au serveur ou serveur saturé.';
   break;
   case '501':
   echo 'Le serveur ne supporte pas le service demandé.';
   break;
   case '502':
   echo 'Mauvaise passerelle.';
   break;
   case '503':
   echo ' Service indisponible.';
   break;
   case '504':
   echo 'Trop de temps à la réponse.';
   break;
   case '505':
   echo 'Version HTTP non supportée.';
   break;
   default:
   echo 'Erreur !';
}
?>

</body>
</html>
