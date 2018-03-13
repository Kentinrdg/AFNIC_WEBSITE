<!DOCTYPE html>
<html lang="en">
<head>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet'>
  <link href="css/formulaire.css" rel="stylesheet">
  <link href="css/index.css" rel="stylesheet">
  <style>
  body {

  }
  <meta charset="utf-8">
  

  <title>Home</title>


  <style>
  .text-divider{margin: 2em 0; line-height: 0;  text-align: center; }
  .text-divider span{background-color: #f5f5f5; padding: 1em;}
  .text-divider:before{ content: " "; display: block; border-top: 1px solid #e3e3e3; border-bottom: 1px solid #f7f7f7;}

  h2{
    font-family: 'Cinzel';font-size: 32px;
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
      <?php 
      session_start();
      if(isset($_SESSION['Statut'])){

      } else {
        $_SESSION['Statut'] = "";
        $Statut = $_SESSION['Statut'];
      }

      include 'bdd.php';

      $Statut = $_SESSION['Statut'];


      if (isset($_POST['deconnexion'])){
        session_destroy();
        header("Location: index.php");
      }

      if (isset($_POST['seconnecter']))
      { 

       $login=$_POST["login"];
       $mdp=MD5($_POST['MDP']);

       $_SESSION['login'] = $_POST['login'];
       $_SESSION['pwd'] = $_POST['MDP'];


       $requete = "SELECT * FROM `log` WHERE User = :login AND Mdp = :mdp";
       $donnees=array(":login"=>$login,":mdp"=>$mdp);
       echo $mdp;
       $resultat = $conn->prepare($requete); 
       $resultat->execute($donnees);
       $ligne = $resultat->fetch();

       $_SESSION['Statut'] = $ligne['Statut'];
       $_SESSION['point_total'] = $ligne['point_total'];

       if($ligne['User']== $login && $ligne['Mdp']== $mdp)
       {

              $message='Identifiant correct ';//echo "veuillez vous identifier";
              echo '<script type="text/javascript">window.alert("'.$message.'");</script>';

              if($ligne['Statut'] == "admin"){
                header("Location: admin.php");
              }

              if($ligne['Statut'] == "user"){
               header("Location: index.php");
             }
           }else 
           {
              //$message = $ligne['Statut'];
              $message='Identifiant incorrect ';//echo "veuillez vous identifier";
              echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
            }
          }

          if($Statut != ""){


            ?>
            <ul class="nav navbar-nav navbar-right">
              <li>
                <form method="POST" role="form">
                  <button type="submit" class="btn btn-danger" name="deconnexion">
                    Déconnexion
                  </button>
                </form>
              </li>
            </ul>
          </div>
        </nav>

        <?php } else {

          ?>
        </div>
      </nav>


      <div class="container">
        <div class="card card-container">
          <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
          <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
          <p id="profile-name" class="profile-name-card"></p>
          <form method="POST" role="form">

            <h3 class="text-center">
              Identification
            </h3>
            <div class="form-group">

              <label for="exampleInputEmail1">
                S'identifier
              </label>
              <input class="form-control" id="exampleInputEmail1" type="text" name="login">
            </div>

            <div class="form-group">

              <label for="exampleInputPassword1">
                Mot de passe
              </label>
              <input class="form-control" id="exampleInputPassword1" type="password" name="MDP">
            </div>

            <p><button type="submit" class="btn btn-primary" name="seconnecter">
              Se connecter
            </button><p>
            </form>
          </div>
        </div>
        <?php
      }
      ?>

      <div class="container">
        <br>
        <div class="well" style="font-size: 15px;">
          <h2 class="text-divider"><span>CAPTURE THE FLAG</span></h2>
          <p>
            Vous êtes face à un serveur vulnérable situé sur le réseau internet. Il vous faut trouver des faiblesses dans la sécurité de ce système pour y pénétrer.
            Les parties se déroulent de la façon suivante :
          </p>
          <p>
            <ul>
              <li> Chaque joueur sélectionne et vote pour définir la cible, représentée par un environnement virtuel, qu’il souhaite attaquer.</li>
              <li> La partie démarre quand tous les joueurs se sont déclarés prêts. </li>
              <li> L’environnement à attaquer est joignable. </li>
              <li> La partie se termine quand la machine est compromise, c’est-à-dire quand un joueur obtient les privilèges d’administration de celle ci et récupère le drapeau / flag de validation.</li>
            </ul>
          </p>
          <p><center>
            <img src="images/cdd.jpg">
          </center>
        </p>
      </div>
    </div>

    <div  style="background-color: white; font-size: 14px" class="container-fluid">
      <?php include 'footer.php'; ?>
    </div>
  </body>
  </html>