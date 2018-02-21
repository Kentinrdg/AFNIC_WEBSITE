      
<!DOCTYPE html>

<html lang="fr">
<head>

  <title>Ajout adminisrateur</title>

  <link href="css/navbar.css" rel="stylesheet">
  <link href="css/challenge.css" rel="stylesheet">
  <style>

  body {
    background: url(images/montagne1.jpg); 
  }

</style>
</head>

<body>

 <?php 
 session_start();
 $_SESSION['login'];
 $_SESSION['pwd'];
 ?>

 <ul style="width: 100%; margin-left: 0;">
  <li><a   href="admin.php">Admin</a></li>
  <li><a id="toto" href="challenge_admin.php">Challenge</a></li>
  <li><a  href="table_user.php">Utilisateurs</a></li>
</ul>

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
              Cras juste odio, dapibus ac facilisis dans, egestas eget quam. </font><font style="vertical-align: inherit;">Donec id élit non mi-porta gravida à eget metus. </font><font style="vertical-align: inherit;">Nullam id dolor id nibh ultricies véhicule id ut elit.
              </font></font></p>
              <p>
                <button type="button" onclick="window.location.href='change_go.php'" class="bouton4">Lancer challenge</button>
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
              Cras juste odio, dapibus ac facilisis dans, egestas eget quam. </font><font style="vertical-align: inherit;">Donec id élit non mi-porta gravida à eget metus. </font><font style="vertical-align: inherit;">Nullam id dolor id nibh ultricies véhicule id ut elit.
              </font></font></p>
              <p>
                <button type="button" onclick="window.location.href='change_go.php'" class="bouton4">Lancer challenge</button>
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
              Cras juste odio, dapibus ac facilisis dans, egestas eget quam. </font><font style="vertical-align: inherit;">Donec id élit non mi-porta gravida à eget metus. </font><font style="vertical-align: inherit;">Nullam id dolor id nibh ultricies véhicule id ut elit.
              </font></font></p>
              <p>
                <button type="button" onclick="window.location.href='change_go.php'" class="bouton4">Lancer challenge</button>
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
</body>
</html>
