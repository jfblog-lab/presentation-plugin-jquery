<?php
/*
 * Classe BDD pour se connecter à la BDD
 * permet l'accès à la BDD à partir des fonctions des classes enfants
 */


class BDD {
	var $localhost = "", $user = "", $password = "";

//__Effectue la connexion à la BDD
//__Instancie et renvoie l'objet PDO associé
    function getBdd() {
		//__variable locale lié à la classe
		$localhost = 'mysql:host=localhost;dbname=dynatable;charset=utf8';
		$user = 'root';
		$password = '';
		
    	$bdd = new PDO($localhost, $user, $password);
   		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
        return $bdd;
    }
}

$BDD = new BDD();
