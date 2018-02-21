      
<!DOCTYPE html>

<html lang="fr">
<head>

  <title>Profil</title>
  
  <link href="css/style_profil.css" rel="stylesheet">
  <link href="css/navbar.css" rel="stylesheet">
  
  <style>

  body {
    background: url(images/montagne1.jpg); 
  }

</style>

</head>

<body>

 <?php 
 session_start();
 $login = $_SESSION['login'];
 $Statut = $_SESSION['Statut'];

 if($Statut == "admin"){

 } else {
   if(!isset($_SESSION['login'])){ 
    header("location:erreur_connexion.php"); 
  } 
}
?>

<ul style="width: 100%; margin-left: 0;">
  <li><a href="index.php">Accueil</a></li>
  <li><a href="ajout.php">Inscription</a></li>
  <li><a id="toto" href="profil.php">Profil</a></li>
  <li><a href="contact.php">Contact</a></li>
</ul>


<h1 class="title-pen"> Profil <span></span></h1>
<div class="user-profile">
	<img class="avatar" src="images\profil.png" alt="Ash" />
  <div class="username"><?php echo $_SESSION['login'];	?></div>
  <div class="bio">
  	Novice
  </div>
  <div class="description">
   Challenge accomplie : 
 </div>

</div>


</body>
</html>
