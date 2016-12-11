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
    	$infos = $calendar->getCalendar();
		$count = $calendar->getCountCalendar();
		
		$id = $count['count(*)'];
		
		$json = "{";
		foreach($infos as $info){
			$id--;
			$rdvDate = $info->rdv_date;
			$rdvIdDate = $info->rdv_iddate;
			
			if ($id == 0){
				$json .= "'".$rdvDate."':'<a class=\"fancybox fancybox.iframe\" href=\"jour.php?rdvIdDate=$rdvIdDate\" >Voir les èvènements</a>'";
			} else {
				$json .= "'".$rdvDate."':'<a class=\"fancybox fancybox.iframe\" href=\"jour.php?rdvIdDate=$rdvIdDate\" >Voir les èvènements</a>',";
			}
		}
		$json .= "}";
		
		require_once("view/vueIndex.php");
		
       
    } catch (Exception $e) {
        $msgErreur = $e->getMessage();
        require_once("view/vueErreur.php");
    }
?>
