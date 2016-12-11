<?php
/*
 * Modele récupérer les informations de la BDD "Dynatable"
 */
class Data extends BDD {
//__Récupère l'ensemble des restaurants
	function getAllData() {
        $bdd = parent::getBdd();
        $sql = 'SELECT id, Raison_Sociale, Type_cuisine, Ville, Mail
                FROM restaurant
                ORDER BY id';

		$datas = array();
        $resto = $bdd->query($sql);
		while ($resultat = $resto->fetch() ) {
            $datas[] = $resultat;
        }
        return $datas; // Accès au résultat
    }
	
//__Récupère les restaurants de la ville de Marseille
	function getDataTown() {
        $bdd = parent::getBdd();
        $sql = 'SELECT id, Raison_Sociale, Type_cuisine, Ville, Mail
                FROM restaurant
                WHERE Ville = "Marseille"
                ORDER BY id';

		$datas = array();
        $resto = $bdd->query($sql);
		while ($resultat = $resto->fetch() ) {
            $datas[] = $resultat;
        }
        return $datas; // Accès au résultat
    }
	
//__Récupère les restaurants de la ville de Marseille
	function getDataCook() {
        $bdd = parent::getBdd();
        $sql = 'SELECT id, Raison_Sociale, Type_cuisine, Ville, Mail
                FROM restaurant
                WHERE Type_cuisine = "Gastronomique"
                ORDER BY id';

		$datas = array();
        $resto = $bdd->query($sql);
		while ($resultat = $resto->fetch() ) {
            $datas[] = $resultat;
        }
        return $datas; // Accès au résultat
    }
	
}