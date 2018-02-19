      
      <!DOCTYPE html>

      <html lang="fr">
        <head>
         
          <title>Ajout adminisrateur</title>
          
          <link href="css/style_profil.css" rel="stylesheet">
          <link href="css/navbar.css" rel="stylesheet">
       
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
    <li><a  id="toto" href="admin.php">Admin</a></li>
    <li><a  href="ajout_admin.php">Ajout admin</a></li>
    <li><a  href="challenge_admin.php">Challenge</a></li>
    <li><a  href="table_user.php">Utilisateurs</a></li>
</ul>


      </body>
      </html>
