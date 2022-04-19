<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
	<meta name="author" content="webThemez.com">
	<title>eLearning - Free Educational Responsive Web Template </title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<?php
		$subid=$_GET['subid'];
		// include "nav.php";
		$strconn=mysqli_connect("localhost","root","","quiz_new");
		if(!$strconn)
			echo "Connection failed".mysqli_connect_error();
		else{}
		$query = "SELECT Title,Dinfo FROM subject WHERE subid='$subid' ";
		$result = mysqli_query($strconn,$query);
		/*if($result)
		{
			echo "Sucess";
		}
		else{
			echo "failed";
		}*/
		while($row = mysqli_fetch_assoc($result))
		{
			$title = $row["Title"];
			$dinfo = $row["Dinfo"];
		}
	?>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1><?php echo $title; ?></h1>
				</div>
			</div>
		</div>
	</header>
		<div class="container-fluid" style="margin-top:10px;margin-left:82px;margin-right:450px;">
			<!-- <h1><?php echo $title; echo ' Fundamentals'; ?></h1><br><label><?php echo $dinfo; ?></label><button onclick="location.href='html/chapter1.php'" class="btn btn-block">Start Learing>></button> -->
			<h1><?php echo $title; echo ' Fundamentals'; ?></h1><br><label><?php echo $dinfo; ?></label><a href='<?php echo $title; ?>/chapter1.php'><button class="btn btn-block">Start Learing>></button></a>
		</div>
		<div class="container-fluid" style="margin-left:82px;margin-right:450px;">
			<h1>Chapters :</h1>
			<?php
			$subid=$_GET['subid'];
			$query1 = "SELECT Title FROM chapter WHERE SubjectID='$subid'";
			$result1 = mysqli_query($strconn,$query1);
			/*if($result1)
			{
				echo "success";
			}*/
			while($row = mysqli_fetch_assoc($result1))
			{
			
				echo '<ul><li>Chapter : '.$row['Title'].'</li></ul>';
			} 
			?>
			<!--<li>Chapter 2: Write HTML Using Notepad TextEdit</li><li>Chapter 3: HTML Headings</li><li>Chapter 4:HTML Attributes </li>
			<li>Chapter 5:HTML Horizontal Rules</li><li>Chapter 6: HTML Text Formatting</li><li>Chapter 7: The HTML<?php $str='<q>'; echo htmlspecialchars($str); ?> element defines a short quotation.</li>
			<li>Chapter 8: HTML Comment Tags</li><li>Chapter 9: Chapter 9:HTML Lists</li><li>Chapter 10: The<?php $str='<div>'; echo htmlspecialchars($str); ?> Element</li>
			<li>Chapter 11: HTML Iframes</li><li>Chapter 12: The<?php $str='<form>'; echo htmlspecialchars($str); ?> Element</li>
			<li>Chapter 13: The<?php $str='<select>'; echo htmlspecialchars($str); ?> Element</li>
			<li>Chapter 14: Input Type Text</li>-->
			
			<a href='download/index.php'><button class="btn btn-block">Download free E-Books</button></a><br>
		</div>

</body>
</html>
