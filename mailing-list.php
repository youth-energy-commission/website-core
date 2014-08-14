<div style="margin-left: 20px; margin-right: 20px; text-align: center; ">

	<hr/>

	<input id="emailidreal" type="text" name="email" class="form-control" placeholder="Enter your email ID"></input>

	<br/>

	<button id="submitData" class="btn btn-success">Add to mailing list</button>

	<hr/>

	<div id="response"></div>

</div>


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