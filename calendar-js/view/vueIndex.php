<!DOCTYPE html>
<!--[if IE 9]><html class="no-js ie9"><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js"><!--<![endif]-->
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Responsive Calendar with calendario.js</title>

		<!-- insertion css -->
		<link rel="stylesheet" type="text/css" href="common/css/screen.css" />
		<link rel="stylesheet" type="text/css" href="common/css/responsive.css" />

		<!-- insertion javascript -->
		<script src="common/js/modernizr.custom.63321.js"></script>
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
		<script type="text/javascript" src="common/js/jquery.calendario.js"></script>
		<script type="text/javascript" src="common/js/data.js"></script>
		<script type="text/javascript" src="common/js/script.js"></script>
	</head>
	<body>
		<div class="container">	
			<div class="custom-calendar-full custom-calendar-wrap">
				<div class="custom-header clearfix">
					<h2>responsive calendar</h2>
					<h3 class="custom-month-year">
						<span id="custom-month" class="custom-month"></span>
						<span id="custom-year" class="custom-year"></span>
						<nav>
							<span id="custom-prev" class="custom-prev"></span>
							<span id="custom-next" class="custom-next"></span>
							<span id="custom-current" class="custom-current" title="Got to current date"></span>
						</nav>
					</h3>
				</div>
				
				<div id="calendar" class="fc-calendar-container"></div>
			</div>
		</div><!-- /container -->
	</body>
</html>
