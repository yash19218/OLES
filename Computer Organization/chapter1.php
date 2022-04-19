<html>
<head>
	<meta charset="utf-8">
	<title>eLearning - Free Educational Responsive Web Template </title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="../css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="../css/style.css">
	
</head>
<body>
	<?php
		include "nav.php";
	?>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1 style="text-align: center;">Computer Organiszation & Architecture</h1>
				</div>
			</div>
		</div>
	</header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 col-md-push-3" style="margin-bottom:10px;">
				<?php
					for($i=1;$i<=39;$i++)
					{
						echo '<img style="border:2px solid;margin-top:2px;" align="right"  src="images/Capture-'.$i.'.png"></img>';
					}
				?>
				
				<!-- <img align="right" src="images/Capture2.png"></img> -->
			</div>
			<div class="col-md-2 col-md-pull-9" style="margin-top:10px;">
				<?php  include "sidebar.php"; ?>
			</div>
			
		</div>
	</div>	
					
</body>	
</html>
	

