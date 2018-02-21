<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  

  <title>Accueil</title>
  <link href="css/navbar.css" rel="stylesheet">
  <link href="css/formulaire.css" rel="stylesheet">
  <style>

  body {
    background: url(images/montagne1.jpg); 
  }

</style>
</head>
<body>

  <ul style="width: 100%; margin-left: 0;">
    <li><a id="toto" href="index.php">Accueil</a></li>
    <li><a href="ajout.php">Inscription</a></li>
    <li><a href="profil.php">Profil</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
  
  <?php 
  session_start();
  //$_SESSION['Statut'] =  $_SESSION['Statut']; 

  if(isset($_SESSION['Statut'])){

  } else {
    $_SESSION['Statut'] = "";
    $Statut = $_SESSION['Statut'];
  }

  $conn=new PDO ("mysql:host=192.168.0.44;dbname=projet","admin","admin");

  $Statut = $_SESSION['Statut'];


  if (isset($_POST['deconnexion'])){
    session_destroy();
    header("Location: index.php");
  }

  if (isset($_POST['seconnecter']))
  { 

   $login=$_POST["login"];
   $mdp=$_POST['MDP'];
   $_SESSION['login'] = $_POST['login'];
   $_SESSION['pwd'] = $_POST['MDP'];


   $requete = "SELECT * FROM `log` WHERE User = :login AND Mdp = :mdp";
   $donnees=array(":login"=>$login,":mdp"=>$mdp);
   $resultat = $conn->prepare($requete); 
   $resultat->execute($donnees);
   $ligne = $resultat->fetch();

   $_SESSION['Statut'] = $ligne['Statut'];
   
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

            <form method="POST" role="form">
              <p><button type="submit" class="btn-default" name="deconnexion">
                Déconnexion
              </button><p>

              </form>


              <?php }else {

                ?>

                <div id ="formu" >
                  <center>

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

                      <p><button type="submit" class="btn-default" name="seconnecter">
                        Se connecter
                      </button><p>
                      </form>



                    </center>
                  </div>

                  <?php }

                  ?>
                </body>
                </html>