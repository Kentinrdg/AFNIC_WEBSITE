<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>accueil</title>
  
  <link href="css/navbar.css" rel="stylesheet">
  <link href="css/table_user.css" rel="stylesheet">

</head>
<body>

<ul style="width: 100%; margin-left: 0;">
    <li><a  href="admin.php">Admin</a></li>
    <li><a  href="ajout_admin.php">Ajout admin</a></li>
    <li><a  href="challenge_admin.php">Challenge</a></li>
    <li><a id="toto" href="table_user.php">Utilisateurs</a></li>
</ul>

	<?php
	  //Connect to BDD
	  $conn = new PDO ("mysql:host=192.168.0.44;dbname=projet","admin","admin"); //  localhost -u root -p | 192.168.0.44 -u admin -p admin

	  session_start();
	  

	  

	  
	  	  //var
	  $tableauNew = array();
	  $requetesql = "SELECT * FROM log";
	  //exec request sql 
	  $reponse = $conn->query($requetesql);
	  ?>
	  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
	  <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>

	  <!------ Include the above in your HEAD tag ---------->


	  <div class="span7">   
	  	<div class="widget stacked widget-table action-table">

	  		<div class="widget-header">

	  			<h3>Table des user</h3>
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
	  						content:counter(case);
	  					}</style>
	  					<?php	$i=0;		while ($donnees = $reponse->fetch())
	  					{?>


	  						<tr>
								 		 	<!--$nbligne=nbligne+1;
								 		 		$nom[i]= $donnees['User'];-->
								 		 		<?php 

								 		 		$i=$i+1;
								 		 		$array = [
								 		 			$i => $donnees['Id'],
								 		 		];
													//echo $array[$i];?>
													<th><?php echo $donnees['Id']; ?></th>
													<?php $toto=$donnees['User'];?>
													<th><?php echo $donnees['User']; ?></th>
													<th><?php echo $donnees['Mdp']; ?></th>
													<th><?php echo $donnees['Prenom']; ?></th>
													<th><?php echo $donnees['Statut']; ?></th>

													<td class="td-actions">
														<form  method="POST" role="form" >
															<p><button type="submit" class="btn-default"  name="Supprimer" value=case>Supprimer</button><p>
															</form>

														</td>
													</tr>

													<?php
												}?>
											</tbody>
										</table>

									</div> <!-- /widget-content -->

								</div> <!-- /widget -->
								<?php echo $donnees['Id']; 
								echo $_POST['Supprimer'];?>
								<?php

								if(isset($_POST['Supprimer']))
								{
			//echo 'coucou';
									$popo="";
									$popo=

									$username = "";
									$_SESSION['id']= $array[$i];
									$username = $_SESSION['id'];



									$requete = "DELETE FROM log WHERE ID = :username";
									$donnees=array(":username"=>$username);
									$resultat = $conn->prepare($requete); 
				//$resultat->bindParam(':username', $username);
									$resultat->execute($donnees);
									$test = $resultat->fetch();
									if($test == 0)
									{
					//echo "<p>Le compte de ".$username." a bien supprimé.<p>";
					//echo "<p>Veuillez patienter..<p>";
										header("Location:toto.php");
					//$message = 'Profil Supprimer';
					//echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
									} 
									else
									{
										echo "<p>Impossible de supprimé le profil.<p>";
									}
								}




			/*
				
				 
		 */
			?>
		</div>
	</body>
	</html>