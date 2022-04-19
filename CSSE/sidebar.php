<?php 
$strconn=mysqli_connect("localhost","root","","quiz_new");
$sql="SELECT * FROM chapter WHERE SubjectID='2'";
$result=mysqli_query($strconn,$sql);
?>
<?php echo '<pre>';?>
<h1>Index</h1>
<ul>
<?php
	$num=1;
	while($row=mysqli_fetch_assoc($result)){
	

	echo '<li><a href="chapter'.$num.'.php">Chapter'.$num.':'.$row['Title'].'</a><br></li>';
	$num++;
	}
	?>
	<!-- <li><a href="chapter1.php">Chapter 1:What is CSS?</a><br></li>
	<li><a href="chapter2.php">Chapter 2:Three <br>Ways to Insert CSS</a><br></li>
	<li><a href="chapter3.php">Chapter 3:CSS <br>Colors</a><br></li>
	<li><a href="chapter4.php">Chapter 4:Border <br>Style</a><br></li>
	<li><a href="chapter5.php">Chapter 5:CSS <br>Margins</a><br></li>
	<li><a href="chapter6.php">Chapter 6:CSS <br>Padding</a><br></li> -->
</ul>
<?php echo '</pre>';?>