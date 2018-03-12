<!DOCTYPE html>
<html lang="en">
<head>

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="../css/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet'>
  <link href="../css/index.css" rel="stylesheet">

  <meta charset="utf-8">
  

  <title>Home</title>


  <style>
  .text-divider{margin: 2em 0; line-height: 0;  text-align: center; }
  .text-divider span{background-color: #f5f5f5; padding: 1em;}
  .text-divider:before{ content: " "; display: block; border-top: 1px solid #e3e3e3; border-bottom: 1px solid #f7f7f7;}

  .success {
    color: #4F8A10;
    background-color: #DFF2BF;
    border: 1px solid;
    margin: 10px 0px;
    padding:15px 10px 15px 10px;
    margin-top: 20px;
    margin-bottom: 20px;
  }

  form {
    margin-top: 20px;
  }


  h2{
    font-family: 'Cinzel';font-size: 32px;
  }
</style>
</head>
<body>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="../index.php">JNAK - CPIR</a>
      </div>
      
      <ul class="nav navbar-nav" style="font-size:15px">
        <li class="active"><a href="../index.php">Accueil</a></li>
        <li><a href="../ajout.php">Inscription</a></li>
        <li><a href="../profil.php">Profil</a></li>
        <li><a href="../contact.php">Contact</a></li>

      </ul>
      <?php 
      session_start();
      if(isset($_SESSION['Statut'])){

      } else {
        $_SESSION['Statut'] = "";
        $Statut = $_SESSION['Statut'];
      }

      include '../bdd.php';

      $Statut = $_SESSION['Statut'];


      if (isset($_POST['deconnexion'])){
        session_destroy();
        header("Location: ../index.php");
      }

      if (isset($_POST['seconnecter']))
      { 

       $login=$_POST["login"];
       $mdp=MD5($_POST['MDP']);
	   
	   //_SESSION

       $_SESSION['login'] = $_POST['login'];
       $_SESSION['pwd'] = $_POST['MDP'];


       $requete = "SELECT * FROM `log` WHERE User = :login AND Mdp = :mdp";
       $donnees=array(":login"=>$login,":mdp"=>$mdp);
       echo $mdp;
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

        <?php } ?>

      </ul>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
	  Lancer le challenge
        <form  method="POST" role="form">
          <div> 
           <a href="./trameWS.pcapng">
			   <input type="button"  class="btn btn-primary" value = "Démarrer le challenge" >
		   </a>
		   <br>
		   <br>
		   Veuillez entrer le nom d'utilisateur et le mot de passe trouvés :
		   <br>
		   <br>
		   User : <input class="form-control" id="chall1" type="texte" name="userCh1">
		   <br>
		   Password : <input class="form-control" id="chall1" type="texte" name="mdpCh1">   
		   <br>
		   <button type="submit" class="btn btn-danger" name="verifmdpch1">
		   Vérifier lees informations entrées
		   </button>
         </div>
       </form>
	   <?php
	   if(isset($_POST['verifmdpch1']))
	   {
		   
		   $userCh1 = $_POST['userCh1'];
		   $passwordCh = $_POST['mdpCh1'];
		   
		   $requete = "SELECT * FROM `challenge1` WHERE users = :loginCh1 AND password = :passwordCh1 ";
				$donnees=array(":loginCh1"=>$userCh1,":passwordCh1"=>$passwordCh);
				$resultat = $conn->prepare($requete); 
				$resultat->execute($donnees);
				
				if($ligne = $resultat->fetch())
				{
					
					$key = "";
					//echo $ligne['users'];
					//echo $ligne['password'];
					$ligne['point'];
					$login = $_SESSION['login'];
					// $_SESSION['pwd'];
					$mdp=MD5($_SESSION['pwd']);
					//echo $mdp."<br>";
					
					$requete = "SELECT `User`, `point_total` FROM `log` WHERE User = :loginsession	AND Mdp = :mdpsession";
					$donnees=array(":loginsession"=>$login,":mdpsession"=>$mdp);
					$resultat = $conn->prepare($requete); 
					$resultat->execute($donnees);
					if($key = $resultat->fetch())
					{
						echo 'coucou<br>';
						echo $key['User'];
						echo $key['point_total'];
						echo "les point du challenge".$ligne['point'];
						$pointAdditionner = $key['point_total'] + $ligne['point'];
						echo $pointAdditionner;
						
						//"UPDATE log SET point_total = :$pointAdditionner WHERE User = :$key['User']";
						//$pointAdditionner 
						
						//$key['User']
						//INSERT INTO table (nom_colonne_1, nom_colonne_2,) VALUES ('valeur 1', 'valeur 2', ...) 
						//INSERT INTO .. VALUES(..)  WHERE User = AND mdp = $pointAdditionner

						
					}
				
				}
				
	   }
		
	   ?>
     </div>
   </div>    
 </div>
</div>

<?php  

if(!empty($_POST['auth-login']) && !empty($_POST['authbutton'])){
  $login = $_POST['auth-login'];
  $button = $_POST['authbutton'];

  header("Location: result.php");
}

?>

</body>
</html>