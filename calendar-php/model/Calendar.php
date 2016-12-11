<?php
/*
 * Modele de classe PHP : Calendar.php
 * Classe d'affichage de RDV sur le calendrier
 */

class Calendar extends BDD{
//__variable lié à la classe

//__Affiche tous les RDV sur le calendrier
    function getCalendar( ) {
        $bdd = parent::getBdd();
		
		$sql = 'SELECT * ';
		$sql .= 'FROM `rdv`, `rdv_date` ';
		$sql .= 'WHERE rdv.rdv_iddate = rdv_date.rdv_iddate ';
		$sql .= 'ORDER BY rdv.rdv_iddate';
		
        $datas = $bdd->query($sql);
		
		while ($resultat = $datas->fetch(PDO::FETCH_OBJ)) {
            $count[] = $resultat;
        }
		
		return $count; // Accès au résultat
    }

//__Affiche les RDV par journée
    function getCalendarDate( $id ) {
        $bdd = parent::getBdd();
		
		$sql = 'SELECT * ';
		$sql .= 'FROM `rdv`, `rdv_date` ';
		$sql .= 'WHERE rdv.rdv_iddate = rdv_date.rdv_iddate ';
		$sql .= 'AND rdv_date.rdv_iddate = '.$id;
		$sql .= ' ORDER BY rdv.rdv_iddate';
		
        $datas = $bdd->query($sql);
		
		while ($resultat = $datas->fetch(PDO::FETCH_OBJ)) {
            $count[] = $resultat;
        }
		
		return $count; // Accès au résultat
    }

//__Affiche le nombre de RDV sur du calendrier
    function getCountCalendar( ) {
        $bdd = parent::getBdd();
		
		$sql = 'SELECT count(*)';
		$sql .= ' FROM `rdv`';
		
        $datas = $bdd->query($sql);
		
		if ($resultat = $datas->fetch(PDO::FETCH_ASSOC)) {
            $count = $resultat;
        }
		
		return $count; // Accès au résultat
    }
}