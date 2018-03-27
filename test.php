
         <?php   

         include 'bdd.php';
         
         $requete = "SELECT * FROM `log` ";
         //$donnees=array(":login"=>$NewLogin);
         $resultat = $conn->query($requete); 
         //$resultat->execute($donnees);
         $ligne = $resultat->fetch();

         $var_dump($ligne);

         
         $shell = shell_exec('sudo pct list');
         var_dump($shell);
         $shell_start_pct = shell_exec('sudo pct start 112');
         $shell_start_pct = shell_exec('sudo pct stop 112');


            ?>