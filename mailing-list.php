<div style="margin-left: 5px; margin-right: 5px; text-align: center; ">

	<hr/>

	<input id="emailidreal" type="text" name="email" class="form-control" placeholder="Enter your email ID"></input>

	<br/>

	<button id="submitData" class="btn btn-success">Add to mailing list</button>

	<hr/>

	<div id="response"></div>

</div>

<div class="modal fade" id="successful" style="z-index:10003" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content" >

			<div class="modal-header" style="text-align: center; ">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Email ID successfully added.</h4>
			</div>

			<div class="modal-body" style="text-align: center; ">

				<p> Your email ID has been added to the mailing list. You will start getting the newsletter from the next issue.
				</p>

			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="unsuccessful" style="z-index:10003" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content" >

			<div class="modal-header" style="text-align: center; ">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Request could not be executed</h4>
			</div>

			<div class="modal-body" style="text-align: center; ">

				<p> Something's not right. We are unable to process your request :'( Please try again after some time.
				</p>

			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="valunsu" style="z-index:10003" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content" >

			<div class="modal-header" style="text-align: center; ">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Validation Unsuccessful</h4>
			</div>

			<div class="modal-body" style="text-align: center; ">

				<p> Your email ID could not be validated. Note that email IDs must always be of the form john.doe@domain.com
				</p>

			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
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

				if(data == "0")

					$("#successful").modal('show');

				if(data == "1")

					$("#unsuccessful").modal('show');

				if(data == "2")

					$("#valunsu").modal('show');
				
			});
	});

});

</script>