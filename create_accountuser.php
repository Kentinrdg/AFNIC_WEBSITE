      
<!DOCTYPE html>

<html lang="fr">
<head>

  <title>Challenge Administrateur</title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <link href="css/challenge.css" rel="stylesheet">
  <style>

  body {
    background: url(images/montagne1.jpg); 
  }

</style>
</head>

<body>

  <?php
  include 'bdd.php';

  session_start();
  $login = $_SESSION['login'];
  $Statut = $_SESSION['Statut'];

  if($Statut == "admin"){

  } else {
    header("location:erreur_connexion.php"); 
  }
  ?>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">JNAK - CPIR</a>
      </div>
      <ul class="nav navbar-nav" style="font-size:15px">
        <li><a  href="admin.php">Admin</a></li>
        <li class="active"><a  href="challenge_admin.php">Challenge</a></li>
        <li><a  href="table_user.php">Utilisateurs</a></li>
      </ul>
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

  <?php 
  if (isset($_POST['deconnexion'])){
    session_destroy();
    header("Location: index.php");
  }
  ?>


  <br>
  <br>

  <div>
    Cette page permet de créer des utilisateurs pour chaque équipe si aucun compte ne leur a été attribuer. Ces comptes leurs permettrons d'accèder au divers Challenge proposer par le site et lancer par l'administrateur.  
  </div>

  <br>
</br>

<div class="container-fluid" style="background-color: white;">
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-6">

          <div class="card card-container">
            <form method="POST" role="form">

              <h3 class="text-center" style="color: blue;">
                Inscription équipe bleu
              </h3>
              <div class="form-group">
                <label for="exampleInputEmail1">
                  Mail : 
                </label>
                <input class="form-control" id="login_teamblue" type="email" name="login_teamblue">
              </div>

              <div class="form-group">

                <label for="exampleInputPassword1">
                  Mot de passe : 
                </label>
                <input class="form-control" id="MDP_BLUE" type="password" name="MDP_BLUE">
              </div>
              <div class="form-group">

                <label for="exampleInputPassword1">
                  Mot de passe 2 : 
                </label>
                <input class="form-control" id="MDP2_BLUE" type="password" name="MDP2_BLUE">
              </div>

              <label for="exampleInputPassword1">
                Prénom : 
              </label>
              <input class="form-control" id="prenom_teamblue" type="text" name="prenom_teamblue">
              <br>
             <!-- <div class="form-group">
                <label for="exampleInputPassword1">
                  Choisir date de validitée (La durée de validitée d'un challenge est de 4 heures) : 
                </label>
                <br>
                <input id="datetime" type="datetime-local">
              </div>-->
              <div class="form-group">
               <center> <p><button type="submit" class="btn btn-primary" name="seconnecter_teamblue">
                Ajouté
              </button><p></center>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card card-container">
            <form method="POST" role="form">

              <h3 class="text-center" style="color: red;">
                Inscription équipe rouge
              </h3>
              <div class="form-group">
                <label for="exampleInputEmail1">
                  Mail : 
                </label>
                <input class="form-control" id="login_teamred" type="email" name="login_teamred">
              </div>

              <div class="form-group">

                <label for="exampleInputPassword1">
                  Mot de passe : 
                </label>
                <input class="form-control" id="MDP_TEAMRED" type="password" name="MDP_TEAMRED">
              </div>
              <div class="form-group">

                <label for="exampleInputPassword1">
                  Mot de passe 2 : 
                </label>
                <input class="form-control" id="MDP2_TEAMRED" type="password" name="MDP2_TEAMRED">
              </div>

              <label for="exampleInputPassword1">
                Prénom : 
              </label>
              <input class="form-control" id="prenom_teamred" type="text" name="prenom_teamred">
              <br>
            <!--  <div class="form-group">
                <label for="exampleInputPassword1">
                  Choisir date de validitée (La durée de validitée d'un challenge est de 4 heures) : 
                </label>
                <br>
                <input id="datetime" type="datetime-local" name="datetime">
              </div>-->
              <div class="form-group">
                <center><p><button type="submit" class="btn btn-primary" name="seconnecter_teamred">
                  Ajouté
                </button><p></center>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php 
  $challenge = $_GET['challenge'];

  include 'bdd.php';

//FOR TEAM BLUE
  if (isset($_POST['seconnecter_teamblue']))
  { 
    $NewLogin=$_POST["login_teamblue"];
    $NewPrenom=$_POST['prenom_teamblue'];
    $NewPassword=$_POST['MDP_BLUE'];
    $NewPassword2=$_POST['MDP2_BLUE'];


    $_SESSION['login'] = $NewLogin;
    $_SESSION['prenom'] = $Statut;

    $Statut = "user";

    if($NewLogin!="" && $NewPassword!="" && $Statut!="choisir un statut")
    {
      if($NewPassword==$NewPassword2)
      {
        $requete = "SELECT * FROM `log` WHERE User = :login ";
        $donnees=array(":login"=>$NewLogin);
        $resultat = $conn->prepare($requete); 
        $resultat->execute($donnees);
        $ligne = $resultat->fetch();

        if($ligne['User']== $NewLogin )
        {

          $message='profil déja existant ';
          echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
        }else 
        {
          //Default no team
          $equipe = "BLUE";

          $requete = "INSERT INTO `log`( `User`, `Mdp`, `Prenom`, `Statut`, `equipe`, `challenge`) VALUES ( :NewLogin , :NewPassword, :NewPrenom, :Statut, :equipe, :challenge )";
          $donnees=array(":NewLogin"=>$NewLogin,":NewPassword"=>md5($NewPassword),":NewPrenom"=>$NewPrenom,":Statut"=>$Statut, ":equipe"=>$equipe, ":challenge"=>$challenge);
          $resultat = $conn->prepare($requete); 
          $resultat->execute($donnees);
          $ligne = $resultat->fetch();

          if($ligne==0)
          {

            $shell = shell_exec("start_ct.sh");
            echo $shell;
            $message=' Profil Ajouté';
            echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
          }else 
          {
            $message='Erreur le profil n as pas été créé ';
            echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
          }
        }
      }else
      {
        $message='Les deux mot de passe ne sont pas les meme ';
        echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
      }
    }else
    {
      $message='Veuillez remplir tous les champs ';
      echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
    }
  } 

//FOR TEAM RED
  else  if (isset($_POST['seconnecter_teamred']))
  { 
    $NewLogin=$_POST["login_teamred"];
    $NewPrenom=$_POST['prenom_teamred'];
    $NewPassword=$_POST['MDP_TEAMRED'];
    $NewPassword2=$_POST['MDP2_TEAMRED'];
   // $Statut=$_POST['Statut'];

    $_SESSION['login'] = $NewLogin;
    $_SESSION['prenom'] = $Statut;

    $Statut = "user";

    if($NewLogin!="" && $NewPassword!="" && $Statut!="choisir un statut")
    {
      if($NewPassword==$NewPassword2)
      {
        $requete = "SELECT * FROM `log` WHERE User = :login ";
        $donnees=array(":login"=>$NewLogin);
        $resultat = $conn->prepare($requete); 
        $resultat->execute($donnees);
        $ligne = $resultat->fetch();

        if($ligne['User']== $NewLogin )
        {

          $message='profil déja existant ';
          echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
        }else 
        {
          //Default no team
          $equipe = "RED";
          $requete = "INSERT INTO `log`( `User`, `Mdp`, `Prenom`, `Statut`, `equipe`, `challenge`) VALUES ( :NewLogin , :NewPassword, :NewPrenom, :Statut, :equipe, :challenge )";
          $donnees=array(":NewLogin"=>$NewLogin,":NewPassword"=>md5($NewPassword),":NewPrenom"=>$NewPrenom,":Statut"=>$Statut, ":equipe"=>$equipe, ":challenge"=>$challenge);
          $resultat = $conn->prepare($requete); 
          $resultat->execute($donnees);
          $ligne = $resultat->fetch();

          if($ligne==0)
          {
            $message=' Profil Ajouté';
            echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
          }else 
          {
            $message='Erreur le profil n as pas été créé ';
            echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
          }
        }
      }else
      {
        $message='Les deux mot de passe ne sont pas les meme ';
        echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
      }
    }else
    {
      $message='Veuillez remplir tous les champs ';
      echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
    }
  }

  ?>

  <?php
  include 'bdd.php';
  $login = $_SESSION['login'];
  $Statut = $_SESSION['Statut'];

  if($Statut == "admin"){

  } else {
    header("location:erreur_connexion.php"); 
  }

        //var
  $tableauNew = array();
  $requetesql = "SELECT * FROM log";
    //exec request sql 
  $reponse = $conn->query($requetesql);
  ?>
  <h3 style="background-color: white;"><center>Table des utilisateurs</center></h3>
  <div class="span7">   
    <div class="widget stacked widget-table action-table">
      <!--<div class="widget-header" style="text-align: center;">
        
      </div> <!-- /widget-header -->

      <div class="widget-content">

        <table class="table table-striped table-bordered" style="background-color: white;">
          <thead>
            <tr>
              <th>ID</th>
              <th>USER</th>
              <th>PRENOM</th>
              <th>STATUT</th>
              <th>POINTS</th>
              <th>EQUIPE</th>
              <th class="td-actions">SUPPR. PROFIL</th>
            </tr>
          </thead>
          <tbody>

            <style type="text/css">
            table
            {
              counter-reset:case;
            }

            td:before
            {
              counter-increment:case;

            }</style>

            <?php 
            while ($donnees = $reponse->fetch())
            {
              ?>
              <tr>
                <th><?php echo $donnees['Id']; ?></th>            
                <th><?php echo $donnees['User']; ?></th>
                <th><?php echo $donnees['Prenom']; ?></th>
                <th><?php echo $donnees['Statut']; ?></th>
                <th><?php echo $donnees['point_total']; ?></th>
                <th><?php 
                $team = $donnees['equipe'];

                if($team == "BLUE"){
                  echo " <center><h4 style='color: blue;'> ". $donnees['equipe'] . " </h4></center> ";
                } else if ($team == "RED"){
                  echo " <center><h4 style='color: red;'> ". $donnees['equipe'] . " </h4></center> ";
                } else if ($team == "NONE"){
                  echo " <center><h4'> ". $donnees['equipe'] . " </h4></center> ";
                } else {
                  echo $donnees['equipe']; 
                }

                ?></th>


                <td class="td-actions">
                  <form  method="POST" role="form" >
                    <center><p><input class="btn btn-danger" type="button" value="Supprimer" onclick="javascript:location.href='supprimer_2.php?id=<?php print($donnees['Id']); ?>';"/></button><p></p></center>
                  </form>
                </td>
              </tr>
              <?php
            }
            ?>
          </tbody>
        </table>
      </div> <!-- /widget-content -->
    </div> <!-- /widget -->



    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>

    <div  style="background-color: white;" class="container-fluid">
      <?php include 'footer.php'; ?>
    </div>
  </body>
  </html>
