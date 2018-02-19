      
      <!DOCTYPE html>

      <html lang="fr">
        <head>
         
          <title>Ajout adminisrateur</title>
          
          <link href="css/style_profil.css" rel="stylesheet">
          <link href="css/style.css" rel="stylesheet">
       
       <style>

       </style>   

        </head>
        
    <body>

    	<?php 
			  session_start();
		//	  echo $_SESSION['mail'];
			//  echo $_SESSION['prenom'];
    	?>

<ul style="width: 100%; margin-left: 0;">
    <li><a href="index.html">accueil</a></li>
    <li><a id="toto" href="ajout.php">inscription</a></li>
    <li><a id="profil" href="profil.php">profil</a></li>
    <li><a href="#5">Contact</a></li>
</ul>


 <h1 class="title-pen"> Profil <span></span></h1>
<div class="user-profile">
	<img class="avatar" src="css\profil.png" alt="Ash" />
    <div class="username"><?php echo $_SESSION['prenom'];	?></div>
  <div class="bio">
  	Novice
  </div>
    <div class="description">
    	Challenge accomplie : 
  </div>

</div>


      </body>
      </html>
