<!DOCTYPE html>
<html lang="en">
<head>

	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="../../css/bootstrap.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet'>
	<link href="../../css/index.css" rel="stylesheet">

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
				<a class="navbar-brand" href="../../index.php">JNAK - CPIR</a>
			</div>

			<ul class="nav navbar-nav" style="font-size:15px">
				<li class="active"><a href="../index.php">Accueil</a></li>
				<li><a href="../../ajout.php">Inscription</a></li>
				<li><a href="../../profil.php">Profil</a></li>
				<li><a href="../../contact.php">Contact</a></li>

			</ul>
			<?php 
			session_start();
			if(isset($_SESSION['Statut'])){

			} else {
				$_SESSION['Statut'] = "";
				$Statut = $_SESSION['Statut'];
			}

			include '../../bdd.php';

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


<?php  

if(!empty($_POST['auth-login']) && !empty($_POST['authbutton'])){
	$login = $_POST['auth-login'];
	$button = $_POST['authbutton'];

	header("Location: result.php");
}

?>

<div class="container">
	<div class="row">
		<div class="col-md-4">	
			<div class="container">
				<div class="card card-container">
					<form method="POST" role="form">

						<h3 class="text-center">
							Lancer le challenge
						</h3>
						<div class="form-group">
							<center>
								<a href="jar/ctf.jar">
									<input type="button"  class="btn btn-primary" value = "Démarrer le challenge" >
								</a>
							</center>
						</div>

						<div class="form-group">
							<label>
								Veuillez entrer le mot de passe trouvé :
							</label>
						</div>
						<label for="labelPWD">
							Password : 
						</label>
						<input class="form-control" id="chall1" type="texte" name="mdpCh1">
						<br>
						<div class="form-group">
							<center>
								<button type="submit" class="btn btn-danger" name="verifmdpch1">
									Vérifier les informations entrées
								</button>
							</center>
						</div>
					</form>
					<?php
					if(isset($_POST['verifmdpch1']))
					{
						$passwordCh = $_POST['mdpCh1'];

						$requete = "SELECT * FROM `challenge3` WHERE password = :passwordCh1 ";
						$donnees=array(":passwordCh1"=>$passwordCh);
						$resultat = $conn->prepare($requete); 
						$resultat->execute($donnees);

						if($ligne = $resultat->fetch())
						{

							$key = "";

							$ligne['point'];
							$login = $_SESSION['login'];
							
							$mdp=MD5($_SESSION['pwd']);
							

							$requete = "SELECT `User`, `point_total` FROM `log` WHERE User = :loginsession	AND Mdp = :mdpsession";
							$donnees=array(":loginsession"=>$login,":mdpsession"=>$mdp);
							$resultat = $conn->prepare($requete); 
							$resultat->execute($donnees);
							if($key = $resultat->fetch())
							{
					//echo 'coucou<br>';
					//echo $key['User'];
					//echo $key['point_total'];
					//echo "les point du challenge".$ligne['point'];
								$pointAdditionner = $key['point_total'] + $ligne['point'];
					//echo $pointAdditionner;

								$userName = $key['User'];
								$requete = "UPDATE log SET point_total = :pointAdditionner WHERE User = :user";
								$donnees=array(":pointAdditionner"=>$pointAdditionner,":user"=>$userName);
								$resultat = $conn->prepare($requete); 
								$resultat->execute($donnees);
							}
						} else {
							echo '<script type="text/javascript">alert("Le mot de passe entré est incorrect. Veuillez réssayer :). Bon courage !");</script>';
						}
					}
					?>
				</div>
			</div>
		</div>
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<center>
						Ton profil
					</center>
				</div>
				<div class="panel-body"><img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
					<p id="profile-name" class="profile-name-card"></p>
					<b><u>Login :</u></b>
					<?php 
					echo $_SESSION['login'];
					?>

					<br>
					<b><u>Point total :</u></b>
					<?php 
					$login = $_SESSION['login'];
					// $_SESSION['pwd'];
					$mdp=MD5($_SESSION['pwd']);
					$requete = "SELECT `User`, `point_total` FROM `log` WHERE User = :loginsession	AND Mdp = :mdpsession";
					$donnees=array(":loginsession"=>$login,":mdpsession"=>$mdp);
					$resultat = $conn->prepare($requete); 
					$resultat->execute($donnees);
					if($key = $resultat->fetch())
					{
						echo $key['point_total'];
					}
					?>

				</div>
			</div>
		</div>

	</div>
</div>

</body>
</html>