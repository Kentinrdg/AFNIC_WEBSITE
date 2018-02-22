      
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
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">JNAK - CPIR</a>
      </div>
      <ul class="nav navbar-nav" style="font-size:15px">
        <li class="active"><a  href="admin.php">Admin</a></li>
        <li><a  href="challenge_admin.php">Challenge</a></li>
        <li><a  href="table_user.php">Utilisateurs</a></li>
      </ul>
    </div>
  </nav>

      <?php 
      session_start();
      $login = $_SESSION['login'];
      $Statut = $_SESSION['Statut'];

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
