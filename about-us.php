<html>

<head>

	<title>About Us - YEC</title>

	<?php include("main-style.php"); ?>

	<?php include("analytics.php"); ?>	

	<!-- Set the active menubar tab -->

	<script>

	$(document).ready(function(){

		$("#menu-about-us").css("background", "#151515");

	});


	</script>

	<!-- Slowly fade in the top button -->

	<script>

	$( window ).scroll(function() {
		$("#topbutton").fadeIn("slow");		
	});

	</script>

	<style>

	.headings{
		color: blue;
	}

	</style>



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

			<h1 class="headings">What is YEC?
			</h1>

			<h2>

				We at YEC, want to be at the junction of the triangle that is formed by the Academia, the Industry, Energy sector in specific, and the Government. We want to act as a gateway between these three agencies, each of which plays an important role in the Energy sector.


			</h2>

			<h1 class="headings">Why?</h1>

			<h2>

				The next question we must address is why must we have a junction between these three agencies at all? Isn't everything great the way it is? <br/> <br/>

				The answer to that question is very simple. Everything is working, and it would continue to work the same way, without a glitch. <br/>

				But we want to improve things. Change things, and move forward. So, that when we leave this world, it is slightly better than when we entered it. <br/>


			</h2>

			<br/>

			<h1 class="headings">About the founder
			</h1>

			<h2>YEC was founded by <a href="in.linkedin.com/pub/himanshu-gupta/17/77a/834">Himanshu Gupta</a>.
			</h2>

		</div>

		<div class="col-md-2" style="background: ;"> 

			<?php include("connect-buttons.php"); ?>

		</div>

	</div>

	<button id="topbutton" onclick="window.scrollTo(0,0);" class="btn btn-primary" style="bottom: 20px; right:30px; position: fixed; display: none">Top</button>


</body>

</html>
