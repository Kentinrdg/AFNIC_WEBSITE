      
<!DOCTYPE html>

<html lang="fr">
<head>

  <title>Ajout adminisrateur</title>

  <link href="css/style_profil.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style2.css" rel="stylesheet">


  <style>
  .bouton4 {
    padding:6px 0 6px 0;
    font:bold 13px Arial;
    background:#f5f5f5;
    color:#555;
    border-radius:2px;
    width:150px;
    border:1px solid #ccc;
    box-shadow:1px 1px 3px #999;
    text-align: center;
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
  <li><a href="index.php">Acceuil</a></li>
  <li><a id="ajout_admin" href="ajout_admin.php">Inscription</a></li>
  <li><a id="toto" href="challenge_admin.php">Challenge</a></li>
  <li><a href="#5">Contact</a></li>
</ul>

<br>
<br>

<div>
  Bonjour <?php echo $_SESSION['login']; ?>, 
  bienvenue sur la page Challenge permettant de séléctionner un challenge. 
</div>

<br>
<br>

<div style="text-align:center;">
  <button type="button" onclick="window.location.href='change_go.php'" class="bouton4">Lancer challenge</button>
</div>

<br>
</br>

<div id="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <img alt="Bootstrap Miniature d'abord" src="css\linux.png">
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
            <img alt="Bootstrap Vignette Deuxième" src="css\cft.jpg">
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
            <img alt="Bootstrap Vignette Troisième" src="css\codecode.jpg">
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