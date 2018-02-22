<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Table d'utilisateurs</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="css/bootstrap.min.js"></script>
	<link href="css/challenge.css" rel="stylesheet">
	<link href="css/popup.css" rel="stylesheet">
	<link href="css/table_user.css" rel="stylesheet">

	<style>
	.success-popup  {
		transition: .3s ease all;
		font-family: 'Roboto', sans-serif;
	}


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
				<li><a  href="admin.php">Admin</a></li>
				<li><a  href="challenge_admin.php">Challenge</a></li>
				<li class="active"><a  href="table_user.php">Utilisateurs</a></li>
			</ul>
		</div>
	</nav>

	<?php
	include 'bdd.php';

	session_start();
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

				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>ID</th>
							<th>USER</th>
							<th>MDP</th>
							<th>PRENOM</th>
							<th>STATUT</th>
							<th class="td-actions"></th>
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
								<th><?php echo $donnees['Mdp']; ?></th>
								<th><?php echo $donnees['Prenom']; ?></th>
								<th><?php echo $donnees['Statut']; ?></th>
								<td class="td-actions">
									<form  method="POST" role="form" >
										<p><input type="button" value="Supprimer" onclick="javascript:location.href='supprimer.php?id=<?php print($donnees['Id']); ?>';"/></button><p>
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

			<br>
		</br>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

		<div class="a9">
			<div clas="a9"></div> <a class="button" href="#popup1">Inscrire admin</a>

			<div id="popup1" class="overlay">
				<div class="popup"><br />
					<h3>Inscription Administrateur</h3>

					<a class="close" href="#">×</a><br>
					<!--<a class="close" href="#">×</a><br>-->
					<form  method="POST" role="form" >

						Prénom: <br/> <input name="prenom" name="prenom" placeholder="prenom"/><br/>
						User:<br /> <input name="user" name="user" placeholder="user" /><br />
						Password:<br /> <input name="password" type="Password" name="password" placeholder="*******" /><br />
						Définir rôle : <br/> 	 

						<select name="selectoption">
							<option value="user">Utilisateur</option>
							<option value="admin">Administrateur</option>
						</select><br/><br/>


						<button class="btn btn-success"  value="send" name="send" id= "send">Inscrire </button> 
						<?php
						if(isset($_POST['send']))

							$selectOption = $_POST['selectoption'];

	  					//$message= $selectOption;
	  					//echo '<script type="text/javascript">window.alert("'.$message.'");</script>';

						$NewPrenom = $_POST['prenom'];
						$NewLogin = $_POST['user'];
						$NewPassword = $_POST['password'];
						$Statut = $selectOption;


						include 'bdd.php';
						$sql = $conn->prepare("INSERT INTO log(User, Mdp, Prenom, Statut)VALUES (? ,? ,?, ?)");
						$sql->bindParam(1, $NewLogin);
						$sql->bindParam(2, $NewPassword);
						$sql->bindParam(3, $NewPrenom);
						$sql->bindParam(4, $Statut);
						$result = $sql->execute();



						if (!$result) {
							print_r($sql->errorInfo());
						} else {
							$message=' Profil Ajouté';
							echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
							echo '<script type="text/javascript">window.refresh();</script>';
						}

						?>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>