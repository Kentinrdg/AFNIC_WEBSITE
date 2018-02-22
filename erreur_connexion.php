<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Erreur</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="css/bootstrap.min.js"></script>
	<link href="css/popup.css" rel="stylesheet">
	<link href="css/table_user.css" rel="stylesheet">

	<style>
	.success-popup  {
		transition: .3s ease all;
		font-family: 'Roboto', sans-serif;
	}


	body {
		background: url(images/montagne1.jpg); 
	}

</style>
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
        <li><a href="profil.php">Profil</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </nav>

	<?php
	  //Connect to BDD
	$conn=new PDO ("mysql:host=localhost;dbname=test","root","");
	  //$conn = new PDO ("mysql:host=192.168.0.44;dbname=projet","admin","admin"); //  localhost -u root -p | 192.168.0.44 -u admin -p admin

	session_start();

	?>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<div class="container">
		<div class="jumbotron"  style="background-color: white;">
			<div class="text-center"><i class="fa fa-5x fa-frown-o" style="color:#d9534f;"></i></div>
			<h3 class="text-center">Erreur vous n'avez pas accès à cet espace.<p> </p><p><small class="text-center"> En cas de problème contactez l'administrateur du site.</small></p></h3>
			<p class="text-center">You sould not pass.</p>
			<p class="text-center"><a class="btn btn-primary" href="ajout.php"><i class="fa fa-home"></i> S'inscrire</a></p>
			<p class="text-center"><a class="btn btn-default" href="index.php"><i class="fa fa-home"></i>Connexion</a></p>
			<center><img src="images/gandalf.png" style="width: 350px; height: 200px"></center>
		</div>
	</div>
</body>
</html>