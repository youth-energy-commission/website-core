<html>

<head>

	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</head>

<body>

	<div style="margin-left: 20px; margin-right: 20px; text-align: center; ">

		<hr/>

		<input id="emailidreal" type="text" name="email" class="form-control" placeholder="Enter your email ID"></input>

		<br/>

		<button id="submitData" class="btn btn-success">Add to mailing list</button>

		<hr/>

		<div id="response"></div>

	</div>

</body>

<script type="text/javascript">

$(document).ready(function(){

	$("#submitData").click(function(){
		$.post(
			"verify.php",
			{
				'email': $("#emailidreal").val()
			},
			function(data, textStatus)
			{
				$("#response").html(data);
			});
	});

});

</script>

</html>