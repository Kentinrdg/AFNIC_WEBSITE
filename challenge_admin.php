      
<!DOCTYPE html>

<html lang="fr">
<head>

  <title>Challenge Administrateur</title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <link href="css/challenge.css" rel="stylesheet">
  <style>

  body {
    background: url(images/montagne1.jpg); 
  }

</style>
</head>

<body>

  <?php
    //Connect to BDD
  include 'bdd.php';
  //$conn=new PDO ("mysql:host=localhost;dbname=test","root","");
   // $conn = new PDO ("mysql:host=192.168.0.44;dbname=projet","admin","admin"); //  localhost -u root -p | 192.168.0.44 -u admin -p admin

  session_start();
  $login = $_SESSION['login'];
  $Statut = $_SESSION['Statut'];

  if($Statut == "admin"){

  } else {
    header("location:erreur_connexion.php"); 
  }
  ?>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">JNAK - CPIR</a>
      </div>
      <ul class="nav navbar-nav" style="font-size:15px">
        <li><a  href="admin.php">Admin</a></li>
        <li class="active"><a  href="challenge_admin.php">Challenge</a></li>
        <li><a  href="table_user.php">Utilisateurs</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <form method="POST" role="form">
            <button type="submit" class="btn btn-danger" name="deconnexion">
              Déconnexion
            </button>
          </form>
        </li>
      </ul>
    </div>
  </nav>

  <?php 
  if (isset($_POST['deconnexion'])){
    session_destroy();
    header("Location: index.php");
  }
  ?>
  

  <br>
  <br>

  <div>
    Bonjour <?php echo $_SESSION['login']; ?>, 
    bienvenue sur la page Challenge permettant de séléctionner un challenge. 
  </div>

  <br>
</br>

<div id="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <img alt="Bootstrap Miniature d'abord" src="images\linux.png">
            <div id="caption">
              <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Challenge n°1 (facile)
              </font></font></h3>
              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
              Le challenge n°1 est le plus facile. </font><font style="vertical-align: inherit;">Il permet de récupérer les flags via des fails HTML. </font><font style="vertical-align: inherit;">Le but finalement de ce challenge étant de... 
              </font></font></p>
              <p>
                <a href="challenge/cha1.php" target="_new">
                  <center>
                   <button type="button" class="bouton4">Lancer challenge</button>
                 </center>
               </a>
             </p>
           </div>
         </div>
       </div>
       <div class="col-md-4">
        <div class="thumbnail">
          <img alt="Bootstrap Vignette Deuxième" src="images\cft.jpg">
          <div id="caption">
            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
              Challenge n°2 (moyen)
            </font></font></h3>
            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
            Le challenge n°2 est le moyen.  </font><font style="vertical-align: inherit;">Il permet de récupérer les flags via des fails HTML. </font><font style="vertical-align: inherit;">Le but finalement de ce challenge étant de... 
            </font></font></p>
            <p>
              <center>
                <button type="button" onclick="window.location.href='change_go.php'" class="bouton4">Lancer challenge</button>
              </center>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <img alt="Bootstrap Vignette Troisième" src="images\codecode.jpg">
          <div id="caption">
            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
              Challenge n°3 (difficile)
            </font></font></h3>
            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
            Le challenge n°3 est le difficile.  </font><font style="vertical-align: inherit;">Il permet de récupérer les flags via des fails HTML. </font><font style="vertical-align: inherit;">Le but finalement de ce challenge étant de... 
            </font></font></p>
            <p>
              <center>
                <button type="button" onclick="window.location.href='change_go.php'" class="bouton4">Lancer challenge</button>
              </center>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>

<div  style="background-color: white;" class="container-fluid">
  <?php include 'footer.php'; ?>
</div>
</body>
</html>
