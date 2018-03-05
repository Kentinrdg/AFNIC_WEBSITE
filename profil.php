      
<!DOCTYPE html>

<html lang="fr">
<head>

  <title>Profil</title>
  
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <link href="css/style_profil.css" rel="stylesheet">
  
  <style>
  footer {
    .grid(full);
    background: #ffffff;
    border-top: 0.0625em solid lightgrey;
    bottom: 0; // !important helps maintain set height 
    color: #000000;   
    height: 5em; // !important - must be < = body margin-bottom
    position: absolute; // !important clears
    p {
      .col(12; @ta: center);
      padding: 1.25em;
    } 
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


<h1 class="title-pen"> Profil <span></span></h1>
<div class="user-profile">
	<img class="avatar" src="images\profil.png" alt="Ash" />
  <div class="username"><?php echo $_SESSION['login'];	?></div>
  <div class="bio">
  	Novice
  </div>
  <div class="description">
   Challenge accomplie : 

   Nombre de points : 
 </div>

</div>

<div  style="background-color: white;" class="container-fluid">
  <?php include 'footer.php'; ?>
</div>
</body>
</html>
