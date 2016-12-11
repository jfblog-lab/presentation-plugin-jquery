<?php
/*
 * Contrôleur de notre page de calendrier
 * gère la dynamique de l'application. Elle fait le lien entre l'utilisateur et le reste de l'application
 */
	
    try {
		
		require_once("view/vueIndex.php");
		
    } catch (Exception $e) {
        $msgErreur = $e->getMessage();
        require_once("view/vueErreur.php");
    }
?>
