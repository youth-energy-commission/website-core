<html>

<head>

	<title>Youth Energy Commission - Home </title>

	<?php include("main-style.php"); ?>

	<?php include("analytics.php"); ?>
	

	<!-- Set the active menubar tab -->

	<script>

		$(document).ready(function(){

			$("#menu-events").css("background", "#151515");
		});


	</script>
	
	
	
</head>

<body>

	<div class="container-fluid"  style="text-align: center;">

		<?php include("name-and-logo.php"); ?>

	</div>

	<div class="container-fluid">

		<div class="col-md-2" style="background: ;">

			<div id="topbar" style="text-align: center">

				<?php include("menubar.php"); ?>

			</div>
		</div>

		<div class="col-md-8" style="background:;">

			<?php include("eventsText.php"); ?>

		</div>

		<div class="col-md-2" style="background: ;"> 

			<?php include("connect-buttons.php"); ?>

		</div>

	</div>

</body>

</html>
