<?php 
$strconn=mysqli_connect("localhost","root","","quiz_new");
$sql="SELECT * FROM chapter WHERE SubjectID='1'";
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
	<!-- <li><a href="chapter2.php">Chapter 2:Write <br>HTML Using Notepador TextEdit</a><br></li>
	<li><a href="chapter3.php">Chapter 3:HTML <br>Headings</a><br></li>
	<li><a href="chapter4.php">Chapter 4:HTML <br>Attributes</a><br></li>
	<li><a href="chapter5.php">Chapter 5:HTML <br>Horizontal Rules</a><br></li>
	<li><a href="chapter6.php">Chapter 6:>HTML <br>Text Formatting</a><br></li>
	 <li><a href="chapter7.php">Chapter 7:The HTML<?php $str='<q>'; echo htmlspecialchars($str); ?> element <br>defines a short <br>quotation.</a><br></li>
	<li><a href="chapter8.php">Chapter 8:HTML <br>Comment Tags</a><br></li>
	<li><a href="chapter9.php">Chapter 9:HTML <br>Lists</a><br></li>
	<li><a href="chapter10.php">Chapter 10:The <br><?php $str='<div>'; echo htmlspecialchars($str); ?> Element</a><br></li>
	<li><a href="chapter11.php">Chapter 11:HTML <br>Iframes</a><br></li>
	<li><a href="chapter12.php">Chapter 12:The <br><?php $str='<form>'; echo htmlspecialchars($str); ?> Element</a><br></li>
	<li><a href="chapter13.php">Chapter 13:The <br><?php $str='<select>'; echo htmlspecialchars($str); ?> Element</a><br></li>
	<li><a href="chapter14.php">Chapter 14:Input <br>Type Text</a><br></li> -->

</ul>
<?php echo '</pre>';?>