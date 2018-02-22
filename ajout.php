      
<!DOCTYPE html>

<html lang="fr">
<head>


	<title>Ajout adminisrateur</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="css/bootstrap.min.js"></script>
	<link href="css/formulaire.css" rel="stylesheet">


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
				<li><a href="index.php">Accueil</a></li>
				<li class="active"><a href="ajout.php">Inscription</a></li>
				<li><a href="profil.php">Profil</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
	</nav>

	<?php 
	session_start();

	include 'bdd.php';

	if (isset($_POST['seconnecter']))
	{	
		$NewLogin=$_POST["login"];
		$NewPassword=$_POST['MDP'];
		$NewPassword2=$_POST['MDP2'];
		$Statut=$_POST['Statut'];

		$_SESSION['mail'] = $NewLogin;
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

									//echo "toto";
				}else 
				{

					$requete = "INSERT INTO `log`( `User`, `Mdp`, `Prenom`) VALUES ( :NewLogin , :NewPassword , :Statut )";
					$donnees=array(":NewLogin"=>$NewLogin,":NewPassword"=>$NewPassword,":Statut"=>$Statut);
					$resultat = $conn->prepare($requete); 
					$resultat->execute($donnees);
					$ligne = $resultat->fetch();

					if($ligne==0)
					{
						$message=' Profil Ajouté';
						echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
						header('Location: profil.php'); 
						//exit();
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

	<div id ="formu1" >
		<center>
			<form method="POST" role="form">
				<h3 class="text-center">
					Ajout utilisateur
				</h3>
				<div class="form-group">
					<label for="exampleInputEmail1">
						Mail : 
					</label>
					<input class="form-control" id="login" type="text" name="login">
				</div>
				<div class="form-group">

					<label for="exampleInputPassword1">
						Mot de passe : 
					</label>
					<input class="form-control" id="MDP" type="password" name="MDP">
				</div>
				<div class="form-group">

					<label for="exampleInputPassword1">
						Mot de passe 2 : 
					</label>
					<input class="form-control" id="MDP2" type="password" name="MDP2">
				</div>

				<label for="exampleInputPassword1">
					Prénom : 
				</label>
				<input class="form-control" id="prenom" type="text" name="prenom">

				<div class="form-group">
					<p><button type="submit" class="btn-default" name="seconnecter">
						Ajouté
					</button><p>

					</div>
				</form>

			</center>

		</div>


	</body>
	</html>
