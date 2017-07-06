<?php

	//si i a bien submit dans post
	if(isset($_POST['submit'])){

		//sanitization
		$tachesani = filter_var($_POST['tache'], FILTER_SANITIZE_STRING);

		//validation
		if(!empty($tachesani)){

			//safe

		}

	try{

		// On se connecte à MySQL
		$bdd = new PDO('mysql:host=localhost;dbname=6-Todolist-sql;charset=utf8', 'root', 'naya');

	}

	catch(Exception $e){

		// En cas d'erreur, on affiche un message et on arrête tout
			die('Erreur : '.$e->getMessage());

	}

	//on recupere la table dans la base de donnée
	$resultat = $bdd->query('SELECT * FROM `todolist`');
	
?>

<!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8">

	<title>liste de tache</title>

</head>

<body>

	<section>

		<form>

		<?php

			//on affiche le contenue de la table a l'aide d'une boucle while
			while ($donnees = $resultat->fetch()){

		?>

		<label for="<?php echo $donnees['todo']; ?>">

		<?php

		echo " ";

		?>

		<input type="checkbox" name="tacheafaire" id=" 

		<?php 

		echo $donnees['todo'];

		?>

		">

		<?php 

		echo $donnees['todo'];

		echo "<br>";

		}

	}

		?>

		<input type="submit" name="save" value="enregistrer">

		</form>

	</section>

	<form action="" method="POST">

		<input type="text" name="tache" class="tache">

		<br>

		<input type="submit" name="submit" class="submit">

	</form>

</body>

</html>