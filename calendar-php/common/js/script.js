$(document).ready(function() {
	
	$('.fancybox').fancybox({
		width: 600,
		padding: 0,
		
		openEffect: 'elastic',
		openSpeed: 150,
		
		closeEffect: 'elastic',
		closeSpeed: 150,
		
		closeClick: true
	});
	
	// calendario : fonction pour le calendrier
	var cal = $( '#calendar' ).calendario( {
		weeks : [ 'Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi' ],
		weekabbrs : [ 'Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam' ],
		months : [ 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Decembre' ],
		monthabbrs : [ 'Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sep', 'Oct', 'Nov', 'Dec' ],
		caldata : webdata,
		
		// 0 - Sunday, 1 - Monday, ... , 6 - Saturday
		startIn : 1,
	}),

	$month = $( '#custom-month' ).html( cal.getMonthName() ),
	$year = $( '#custom-year' ).html( cal.getYear() );

	$( '#custom-next' ).on( 'click', function() {
		cal.gotoNextMonth( updateMonthYear );
	} );
	$( '#custom-prev' ).on( 'click', function() {
		cal.gotoPreviousMonth( updateMonthYear );
	} );
	$( '#custom-current' ).on( 'click', function() {
		cal.gotoNow( updateMonthYear );
	} );

	function updateMonthYear() {	
		$month.html( cal.getMonthName() );
		$year.html( cal.getYear() );
	}

	// ajouter les autres fonctionnalités de bases ci-dessous
});
