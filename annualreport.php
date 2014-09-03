<html>

<head>

   <title>Youth Energy Commission - Annual Report </title>

   <?php include("mainInclude.php"); ?>

   <!-- Set the active menubar tab -->

   <script>

   $(document).ready(function(){

      $("#annualreport").addClass("active");

   });

   </script>
   
</head>

<body>

   <div class="container-fluid" >

      <div class="col-md-2" style="background: ;">

         <a href="http://yecindia.com" style="text-decoration: none;">
            <img src="logo.jpg" width="150" height="150"/><br/>
         </a>

      </div>

      <div class="col-md-8" style="background:; text-align: center; ">

         <span style="font-size: 40px; line-height:3em">Youth Energy Commission </span>

         <?php include("menubar.php"); ?>

      </div>

      <div class="col-md-2" style="background: ; text-align: center; ">

         <?php include("socialIcons.php"); ?>

      </div>

   </div>

   <hr/>

   <div class="container-fluid">

      <div class="col-md-2" >

         <?php include("noticeboard.php"); ?>


      </div>


      <div class="col-md-8" style="background: ">

         <?php include('annualReportText.php'); ?>

      </div>

      <div class="col-md-2" style="background: ;">

         <?php include("assocButtons.php"); ?>
         
         <br/>

         <?php include("twitterfeed.php"); ?>

      </div>

   </div>

</div>

</div>

</body>

<script>

$(document).ready(function(){

   $(".carousel").carousel({

      interval: 3000,
      pause: "hover"

   });

});
</script>

</html>
