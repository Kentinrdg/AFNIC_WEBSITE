<?php
	$conn = new PDO ("mysql:host=192.168.0.44;dbname=projet","admin","admin"); //  localhost -u root -p | 192.168.0.44 -u admin -p admin
	$requete = "DELETE FROM log WHERE ID = :id";
	$donnees=array(':id'=>$_GET['id']);
	$resultat = $conn->prepare($requete); 
//$resultat->bindParam(':username', $username);
	$resultat->execute($donnees);
	
	$test = $resultat->fetch();
	if($test == 0)
	{
//echo "<p>Le compte de ".$username." a bien supprimé.<p>";
//echo "<p>Veuillez patienter..<p>";
		header("Location:table_user.php");
//$message = 'Profil Supprimer';
//echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
	} 
	else
	{
		echo "<p>Impossible de supprimé le profil.<p>";
	}
?>