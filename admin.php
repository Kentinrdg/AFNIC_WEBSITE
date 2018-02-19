      
      <!DOCTYPE html>

      <html lang="fr">
        <head>
         
          <title>Ajout adminisrateur</title>
          <link href="css/navbar.css" rel="stylesheet">
       <style>

       </style>   

        </head>
        
    <body>
    <ul style="width: 100%; margin-left: 0;">
        <li><a  id="toto" href="admin.php">Admin</a></li>
        <li><a  href="ajout_admin.php">Ajout admin</a></li>
        <li><a  href="challenge_admin.php">Challenge</a></li>
        <li><a  href="table_user.php">Utilisateurs</a></li>
    </ul>
    	<?php 
			  session_start();
        $_SESSION['login'];
        $_SESSION['pwd'];
    	?>

      <p><h1>
        Bonjour, <?php $_SESSION['login'] ?>
      </p></h1>





      </body>
      </html>
