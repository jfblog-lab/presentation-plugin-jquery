<!DOCTYPE html>
<!--[if IE 9]><html class="no-js ie9"><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js"><!--<![endif]-->
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Responsive Calendar with calendario.js</title>
	</head>
	<body>
		<div class="container">
			<h3>Evènements(s) du jour</h3>
			
			<?php foreach ($infos as $info) : ?>
				<p><?php echo $info->rdv_motif; ?></p>
			<?php endforeach; ?>
		</div><!-- /container -->
	</body>
</html>
