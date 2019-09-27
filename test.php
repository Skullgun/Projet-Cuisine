<?php //traitement php de la page : le formulaire renvoie sur ce script !

	//test si le formulaire est soumis :
	//si oui, la variable $_POST n'est pas vide et contient les valeurs des input du formulaire
	if(!empty($_POST))
	{
		try{
			
			//recup des valeurs dans des variables
			$nom = $_POST["nom"];
			$prenom = $_POST["prenom"];
			echo "Infos : ", $nom, " ", $prenom; //pour vérifier en debug !

			//connexion à la base de données
			$db="Skullgun"; //le nom de la base de données
			$username="root"; //l'utilisateur mysql
			$password="mdp!"; //et son pwd 
			$bdd = null;
			try {
				$bdd = new PDO("mysql:dbname=Skullgun ;host=localhost", 'root', 'mdp!');
			}
			catch(exception $e) {
				die('Erreur :'.$e->getMessage());
			}
			
			//préparation de la requete d'insertion
			//c'est une "requête paramétrée"
			$rep=$bdd->prepare("insert into reservation (nom, prenom) values (:nom, :prenom)");
			$rep->bindParam('nom', $nom, PDO::PARAM_STR);
			$rep->bindParam('prenom', $prenom, PDO::PARAM_STR);
			$rep->execute();
			echo "Inscription effectuée !"; //pour vérifier en debug !
		}
		catch(Exception $e){
			die('Erreur :'.$e->getMessage());
		} 	
	}


?>



</html>