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

  <div class="container-fluid" style="background-color: white;">
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-6" >
        <form action="" method="post" name="authform">
          <div>
            <h3>Retrouvez le flag. Bonne chance !</h3>
            <br> <br>
            <h4>CJOXAEDXIS EPELXTRURX RFXUXLGAPO XRSXXESUIR</h4>
            <h4>9158a24367</h4>
          </div>
        </form>
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