      
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
        <li class="active"><a href="index.php">Accueil</a></li>
        <li><a href="ajout.php">Inscription</a></li>
        <li><a href="profil.php">Profil</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </nav>

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

  </form>

  <?php 
  if (isset($_POST['deconnexion'])){
    session_destroy();
    header("Location: index.php");
  }
  ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <form role="form">
          <div class="form-group">
            <label for="exampleInputPassword1">
              Validation : 
            </label>
            <input type="password" class="form-control" id="exampleInputPassword1" />
          </div>
          <button type="submit" class="btn btn-primary">
            Envoyer
          </button>
        </form>
      </div>
      <div class="col-md-4">
      </div>
    </div>
  </div>

</body>
</html>
