      
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
        $_SESSION['login'];
        $_SESSION['pwd'];
    	?>

<ul style="width: 100%; margin-left: 0;">
    <li><a href="index.php">Acceuil</a></li>
    <li><a  href="ajout_admin.php">Inscription</a></li>
    <li><a id="toto" href="challenge_admin.php">Challenge</a></li>
    <li><a  href="table_user.php">Utilisateurs</a></li>
    <li><a  href="#5">Contact</a></li>
</ul>


      </body>
      </html>
