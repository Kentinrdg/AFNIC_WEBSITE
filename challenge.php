      
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
	session_start();
	$login = $_SESSION['login'];
	$Statut = $_SESSION['Statut'];

	if($Statut == "admin"){

	} else {
		if(!isset($_SESSION['login'])){ 
			header("location:erreur_connexion.php"); 
		} 
	}
	?>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">JNAK - CPIR</a>
			</div>
			<ul class="nav navbar-nav" style="font-size:15px">
				<li><a href="index.php">Accueil</a></li>
				<li class="active"><a href="challenge.php">Challenge</a></li>
				<li><a href="profil.php">Profil</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row" >
			<div class="col-md-6" style="background-color: white;">
				<h3>
					Vous avez accès au 

					<?php 
					include 'bdd.php';
					$login = $_SESSION['login'];

					$resultats=$conn->query('SELECT challenge FROM log WHERE User = "'.$login.'"');
					$challenge = $resultats->fetch();

					$string=implode('|',$challenge);

					$challenge_selected = "NONE";

					if (stripos($string, 'cha1') !== FALSE) {
						echo "Challenge 1.";
						$challenge_selected  = "CHALLENGE_1";
					}
					if (stripos($string, 'cha2') !== FALSE) {
						echo "Challenge 2.";
						$challenge_selected  = "CHALLENGE_2";
					}

					if (stripos($string, 'cha3') !== FALSE) {
						echo "Challenge 3.";
						$challenge_selected  = "CHALLENGE_3";
					}
					$resultats->closeCursor();
					$team_selected = "NONE";
					$resultEquip=$conn->query('SELECT equipe FROM log WHERE User = "'.$login.'"');
					$resultTeam = $resultEquip->fetch();
					$stringTeam=implode('|',$resultTeam);
					if (stripos($stringTeam, 'BLUE') !== FALSE) {
						echo "<center> <p style='color: blue;'>TEAM BLEU</p> <center> ";
						$team_selected = "BLUE";
					}
					if (stripos($stringTeam, 'RED') !== FALSE) {
						echo " <center> <p style='color: red;'>TEAM RED </p> <center>";
						$team_selected = "RED";
					}
					?>

				</h3>
				<p>
					Vous allez commencer un challenge. Le but est de terminer tous les Challenges (Challenge 1 : Facile, Challenge 2 : Medium, Challenge 3 : Difficile). 
				</p> 
				<p>Chaque scénario de challenge contient différents "étapes". Le but étant de récupérer le plus de "flag" avant le temps imparti. L'équipe la plus rapide est la gagnante ou celle qui est la première a avoir capturer tous les flags proposer par le site. 
				</p>
				<p>Chaque flag trouvé rapporte un nombre de point. Il est possible de consulter via l'onglet "Profil".</p>
				<p>Bon courage et bon challenge.</p>

				<?php 


				if($challenge_selected == "CHALLENGE_1"){

					if($team_selected == "BLUE"){
						?> <button type='button' onclick="window.location.href='challenge/challenge_1/challenge_teambleu/cha1.php'" class='btn btn-block btn-primary'>Accèder au challenge</button> <?php
					} else if($team_selected == "RED"){
						?> <button type='button' onclick="window.location.href='challenge/challenge_1/challenge_teamrouge/cha1.php'" class='btn btn-block btn-primary'>Accèder au challenge</button> <?php
					} 
					
				} else if($challenge_selected == "CHALLENGE_2"){
					echo $challenge_selected;

					if($team_selected == "BLUE"){
						echo "<button type='button' onclick='window.location.href='/page2'' class='btn btn-block btn-primary'>Accèder au challenge</button>";
					} else if($team_selected == "RED"){
						echo "<button type='button' onclick='window.location.href='/page2'' class='btn btn-block btn-primary'>Accèder au challenge</button>";
					} 

				}  else if($challenge_selected == "CHALLENGE_3"){
					echo $challenge_selected;

					if($team_selected == "BLUE"){
						echo "<button type='button' onclick='window.location.href='/page2'' class='btn btn-block btn-primary'>Accèder au challenge</button>";
					} else if($team_selected == "RED"){
						echo "<button type='button' onclick='window.location.href='/page2'' class='btn btn-block btn-primary'>Accèder au challenge</button>";
					} 
				} 

				?>

				<br>
			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div  style="background-color: white;" class="container-fluid">
		<?php include 'footer.php'; ?>
	</div>
</body>
</html>
