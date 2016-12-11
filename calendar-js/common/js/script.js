$(document).ready(function(){
	var cal = $('#calendar').calendario({
		weeks : ['Dimanche', 'Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
		weekabbrs : ['Dim', 'Lun','Mar','Mer','Jeu','Ven','Sam'],
		months : ['Janvier', 'Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'],
		monthabbrs : ['Jan', 'Fév','Mars','Avr','Mai','Juin','Juil','Août','Sept','Oct','Nov','Déc'],
		caldata : webdata,
		startIn: 1, // 0-Dimanche, 1-Lundi,.... 6-Samedi
	});
	
	$month = $('#custom-month').html(cal.getMonthName());
	$year = $('#custom-year').html(cal.getYear());
	
	$('#custom-next').on('click', function(){
		cal.gotoNextMonth(updateMonthYear);
	});
	
	$('#custom-prev').on('click', function(){
		cal.gotoPreviousMonth(updateMonthYear);
	});
	
	$('#custom-current').on('click', function(){
		cal.gotoNow(updateMonthYear);
	});
	
	function updateMonthYear(){
		$month.html(cal.getMonthName());
		$year.html(cal.getYear());
	}
});