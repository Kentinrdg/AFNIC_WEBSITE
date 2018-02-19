<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  

    <title>accueil</title>

    <link href="css/style.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">



  </head>
  <body>

<ul style="width: 100%; margin-left: 0;">
    <li><a id="toto" href="index.php">accueil</a></li>
    <li><a href="ajout.php">inscription</a></li>
    <li><a href="#3">profil</a></li>

    <li><a href="#5">Contact</a></li>
</ul>
  
<?php 
          session_start();
          
          // Create connection
          $conn=new PDO ("mysql:host=192.168.0.44;dbname=projet","admin","admin");

          if (isset($_POST['seconnecter']))
          { 
          	$Statut = "admin";
            $login=$_POST["login"];
            $mdp=$_POST['MDP'];
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['pwd'] = $_POST['MDP'];

            $requete = "SELECT * FROM `log` WHERE User = :login AND Mdp = :mdp AND Statut = :Statut";
            $donnees=array(":login"=>$login,":mdp"=>$mdp,":Statut"=>$Statut);
            $resultat = $conn->prepare($requete); 
            $resultat->execute($donnees);
            $ligne = $resultat->fetch();
            
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
              $message='Identifiant incorrect ';//echo "veuillez vous identifier";
              echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
            }
          }

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


  </body>
</html>