<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Saturday Getaway</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
<div class="header">
  <h2>Saturday Getaway</h2>
</div>

<div class="row">
  <div class="leftcolumn">
	<p></p>
  </div>
  <div class="centercolumn">
	<hr class="new1">
		<div class="container">
			<img src="img/bronte_park_trim.png" class="picture">
			<div class="text">
				<b>April 17, 2021</b></br>
				Meditation at Bronte Park</br>
				Attendance: 1/6</br>
			</div>
		</div>
		<div class="container">
			<img src="img/central_island_trim.png" class="picture">
			<div class="text">
				<b>April 24, 2021</b></br>
				Picnic on Central Island</br>
				Attendance:1/6</br>
			</div>
		</div>
		<div class="container">
			<img src="img/woodbine_trim.png" class="picture">
			<div class="text">
				<b>May 1, 2021</b></br>
				Yoga at Woodbine Beach</br>
				Attendance:1/6</br>
			</div>
		</div>
		<div class="container">
			<img src="img/meadow_trim.png" class="picture">
			<div class="text">
				<b>Events Coming-Up</b>
			</div>
		</div>
	<hr class="new1">
 	</div> 

  <div class="rightcolumn">
	<p></p>
  </div>  
  
</div>

<?php
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("dqwang1989@gmail.com","My subject",$msg);
?>



<!-- <div class="footer">
  <h2>Footer</h2>
</div> -->
</body>
</html>