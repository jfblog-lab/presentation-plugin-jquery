<?php
/*
 * Contrôleur de notre page de maps
 * gère la dynamique de l'application. Elle fait le lien entre l'utilisateur et le reste de l'application
 */
	
	include_once("model/BDD.php");
	include_once("model/Calendar.php");
	include_once("model/Debug.php");
	
	$calendar=new Calendar();
	
    try {
		$idDate = $_GET['rdvIdDate'];
		$infos = $calendar->getCalendarDate($idDate);
		
		require_once("view/vueJour.php");
		
       
    } catch (Exception $e) {
        $msgErreur = $e->getMessage();
        require_once("view/vueErreur.php");
    }
?>
