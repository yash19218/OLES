<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
	<meta name="author" content="webThemez.com">
	<title>E-Learning</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="../css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="../css/style.css">
	
</head>
<?php
    include "nav.php";
    
	?>
<body>


	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Run your code here</h1>
				</div>
			</div>
		</div>
	</header>

	<!-- container -->
  <div class="container">
		<div class="row">
			<div class="col-md-6">
      <form action="c.php" method="post">
			<textarea rows="10" cols="70" class="form-control,text_edit" 
			placeholder="Run Code here" name="message" id="my_text"
			maxlength="999" style="resize:none;margin-top:10px"></textarea>
			<br><br>		
			<input type="submit" value="Run" id="st" class= "btn">
      </form>
		</div>  
		</div>
	</div>









	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
 <script src="contact/jqBootstrapValidation.js"></script>
  <script src="contact/contact_me.js"></script>
	<script src="assets/js/custom.js"></script> 

	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="assets/js/google-map.js"></script>


</body>
</html>






</div>