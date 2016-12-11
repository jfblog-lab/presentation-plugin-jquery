<?php
/*
 * Contrôleur de notre page d'accueil
 * gère la dynamique de l'application. Elle fait le lien entre l'utilisateur et le reste de l'application
 */
	
	include_once("model/BDD.php");
	include_once("model/Data.php");
	
	$page = "ville"; //__variable pour la classe "active" du menu-header
	
	$data=new Data(); // initialisation de la classe Data
	$restaurants = $data->getDataTown(); // prend toutes les informations de la base
	
    try {
    	require_once("view/vueVille.php");
       
    } catch (Exception $e) {
        $msgErreur = $e->getMessage();
        require_once("view/vueErreur.php");
    }
?>