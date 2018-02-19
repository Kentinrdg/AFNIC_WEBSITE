      
      <!DOCTYPE html>

      <html lang="fr">
        <head>
         

          <title>Ajout adminisrateur</title>



          
          <link href="css/style2.css" rel="stylesheet">
          <link href="css/style.css" rel="stylesheet">
       

          

        </head>
        
    <body>

<ul style="width: 100%; margin-left: 0;">
    <li><a href="index.php">accueil</a></li>
    <li><a id="toto" href="ajout.php">inscription</a></li>
    <li><a id="profil" href="profil.php">profil</a></li>

    <li><a href="#5">Contact</a></li>
</ul>

<?php 
					session_start();
					
					// Create connection
					$conn=new PDO ("mysql:host=192.168.10.41;dbname=projet","admin","admin");

					if (isset($_POST['seconnecter']))
					{	
								

								$NewLogin=$_POST["login"];
								$NewPassword=$_POST['MDP'];
								$NewPassword2=$_POST['MDP2'];
								$Statut=$_POST['Statut'];

								$_SESSION['mail'] = $NewLogin;
								$_SESSION['prenom'] = $Statut;

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
											exit();
										
										//echo "toto";
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
							$message='veuillez remplire tous les champs ';
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
   		           Saisir email  du nouvelle utilitsateur
   		         </label>
   		         <input class="form-control" id="exampleInputEmail1" type="text" name="login">
   		       </div>
   		       <div class="form-group">
   		          
   		         <label for="exampleInputPassword1">
   		           Saisir le mot de passe
   		         </label>
   		         <input class="form-control" id="exampleInputPassword1" type="password" name="MDP">
   		       </div>
   		       <div class="form-group">
   		          
   		         <label for="exampleInputPassword1">
   		           Saisir le mot de passe
   		         </label>
   		         <input class="form-control" id="exampleInputPassword1" type="password" name="MDP2">
   		       </div>
   		   
   		        <label for="exampleInputPassword1">
   		           Saisir le prenom
   		         </label>
   		         <input class="form-control" id="exampleInputPassword1" type="password" name="Statut">
   		       
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
