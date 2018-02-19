<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Titre de la page</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="script.js"></script>

	<style>
	.table-bordered {
		border: 1px solid #dddddd;
		border-collapse: separate;
		border-left: 0;
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
		border-radius: 4px;
	}

	.table {
		width: 100%;
		margin-bottom: 20px;
		background-color: transparent;
		border-collapse: collapse;
		border-spacing: 0;
		display: table;
	}

	.widget.widget-table .table {
		margin-bottom: 0;
		border: none;
	}

	.widget.widget-table .widget-content {
		padding: 0;
	}

	.widget .widget-header + .widget-content {
		border-top: none;
		-webkit-border-top-left-radius: 0;
		-webkit-border-top-right-radius: 0;
		-moz-border-radius-topleft: 0;
		-moz-border-radius-topright: 0;
		border-top-left-radius: 0;
		border-top-right-radius: 0;
	}

	.widget .widget-content {
		padding: 20px 15px 15px;
		background: #FFF;
		border: 1px solid #D5D5D5;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		border-radius: 5px;
	}

	.widget .widget-header {
		position: relative;
		height: 40px;
		line-height: 40px;
		background: #E9E9E9;
		background: -moz-linear-gradient(top, #fafafa 0%, #e9e9e9 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fafafa), color-stop(100%, #e9e9e9));
		background: -webkit-linear-gradient(top, #fafafa 0%, #e9e9e9 100%);
		background: -o-linear-gradient(top, #fafafa 0%, #e9e9e9 100%);
		background: -ms-linear-gradient(top, #fafafa 0%, #e9e9e9 100%);
		background: linear-gradient(top, #fafafa 0%, #e9e9e9 100%);
		text-shadow: 0 1px 0 #fff;
		border-radius: 5px 5px 0 0;
		box-shadow: 0 2px 5px rgba(0,0,0,0.1),inset 0 1px 0 white,inset 0 -1px 0 rgba(255,255,255,0.7);
		border-bottom: 1px solid #bababa;
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FAFAFA', endColorstr='#E9E9E9');
		-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#FAFAFA', endColorstr='#E9E9E9')";
		border: 1px solid #D5D5D5;
		-webkit-border-top-left-radius: 4px;
		-webkit-border-top-right-radius: 4px;
		-moz-border-radius-topleft: 4px;
		-moz-border-radius-topright: 4px;
		border-top-left-radius: 4px;
		border-top-right-radius: 4px;
		-webkit-background-clip: padding-box;
	}

	thead {
		display: table-header-group;
		vertical-align: middle;
		border-color: inherit;
	}

	.widget .widget-header h3 {
		top: 2px;
		position: relative;
		left: 10px;
		display: inline-block;
		margin-right: 3em;
		font-size: 14px;
		font-weight: 600;
		color: #555;
		line-height: 18px;
		text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.5);
	}

	.widget .widget-header [class^="icon-"], .widget .widget-header [class*=" icon-"] {
		display: inline-block;
		margin-left: 13px;
		margin-right: -2px;
		font-size: 16px;
		color: #555;
		vertical-align: middle;
	}
</style>
</head>
<body >
	<?php
	  //Connect to BDD
	  $conn = new PDO ("mysql:host=192.168.0.44;dbname=projet","admin","admin"); //  localhost -u root -p | 192.168.0.44 -u admin -p admin
	  ?>
	  <div align="center">
	  	<div class="span7" align="center">   
	  		<div class="widget stacked widget-table action-table">
	  			<div class="widget-header">
	  				<i class="icon-th-list"></i>
	  				<h3>Table</h3>
	  			</div> <!-- /widget-header -->

	  			<div class="widget-content">

	  				<table class="table table-striped table-bordered">
	  					<thead>
	  						<tr>
	  							<th>ID</th>
	  							<th>USER</th>
	  							<th>PASSWORD</th>
	  							<th>NAME</th>
	  							<th>STATUS</th>
	  							<!--<th class="td-actions"></th>-->
	  						</tr>
	  					</thead>

	  					<?php 
	  					session_start();
	  	  //var
	  					$tableauNew = array();
	  					$requetesql = "SELECT * FROM log";
	  //exec request sql 
	  					$reponse = $conn->query($requetesql);

	  // On affiche chaque entrée une à une
	  					while ($donnees = $reponse->fetch())
	  					{
	  						?>

	  						<tr>
	  							<th>
	  								<?php echo $donnees['Id']; ?>
	  							</th>
	  							<th>
	  								<?php echo $donnees['User']; ?>
	  							</th>
	  							<th>
	  								<?php echo $donnees['Mdp']; ?>			
	  							</th>
	  							<th>
	  								<?php echo $donnees['Prenom']; ?>
	  							</th>
	  							<th>
	  								<?php echo $donnees['Statut']; ?>
	  							</th>
	  							<!--<th><?php echo "<i class='btn-icon-only icon-remove'></i>"; ?></th>	-->
	  						</tr>

	  						<?php
	  					}
	 						 $reponse->closeCursor(); // Termine le traitement de la requête
	 						 ?>
	 						</table>
	 					</div>
	 				</div>
	 			</div>
	 			<br>
	 			<form align='center' method="POST" role="form">
	 				<p>
	 					User : <input class="form-control" id="userName"type ="text" name="userName"></input>
	 				</p>
	 				<p>
	 					<button type="submit" class="btn-default" name="Supprimer">Supprimer</button>
	 					<p>
	 					</form>

	 					<div align='center'>
	 						<?php
	 						if(isset($_POST['Supprimer']))
	 						{
			//echo 'coucou';
	 							$username = "";
	 							$_SESSION['username']= $_POST['userName'];
	 							$username = $_SESSION['username'];
	 							$selectUser = "SELECT * FROM `log` WHERE user = :username";
	 							$donnees = array(":username"=>$username);
	 							$resultat = $conn->prepare($selectUser);
	 							$resultat->execute($donnees);
	 							$testSelectUser = $resultat->fetch();
			//var_dump($testSelectUser['user']);
	 							if($testSelectUser['user'] == $username)
	 							{
	 								$username = $_SESSION['username'];
	 								echo $username;
	 								$requete = "DELETE FROM `log` WHERE user = :username";
	 								$donnees=array(":username"=>$username);
	 								$resultat = $conn->prepare($requete); 
				//$resultat->bindParam(':username', $username);
	 								$resultat->execute($donnees);
	 								$test = $resultat->fetch();
	 								if($test == 0)
	 								{
	 									header("Location:test.php");
	 								} 
	 								else
	 								{
	 									echo "<p>Impossible de supprimé le profil.<p>";
	 								}
	 							}
	 							else
	 							{
				//echo 'toto';
	 								$message = 'Profil non existant';
	 								echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
	 							}

	 						}
	 						else
	 						{
	 							echo 'Formulaire Vide';
	 						}
	 						?>
	 					</div>
	 				</div>
	 			</body>
	 			</html>