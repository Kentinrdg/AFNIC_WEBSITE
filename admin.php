      
<!DOCTYPE html>

<html lang="fr">
<head>

  <title>Ajout adminisrateur</title>
  <link href="css/background.css" rel="stylesheet">
  <link href="css/navbar.css" rel="stylesheet">
  <style>

  body {
    background: url(images/montagne1.jpg); 
  }

</style>
</head>

<body>
  <ul style="width: 100%; margin-left: 0;">
    <li><a  id="toto" href="admin.php">Admin</a></li>
    <li><a  href="challenge_admin.php">Challenge</a></li>
    <li><a  href="table_user.php">Utilisateurs</a></li>
  </ul>

  <?php 
  session_start();
  $login = $_SESSION['login'];
  $Statut = $_SESSION['Statut'];
  echo $login;
  echo $Statut;
  if($Statut == "admin"){
    
  } else {
    header("location:erreur_connexion.php"); 
  }
  ?>

  <p><h1>
    Bonjour, <?php  echo $_SESSION['login']; ?>
  </p></h1>


  <form method="POST" role="form">
    <p><button type="submit" class="btn-default" name="deconnexion">
      Déconnexion
    </button><p>

    </form>

    <?php 
    if (isset($_POST['deconnexion'])){
      session_destroy();
      header("Location: index.php");
    }
    ?>

  </body>
  </html>
