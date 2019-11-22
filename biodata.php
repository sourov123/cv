<?php
$nam=$_POST['name'];
	$ph=$_POST['phn'];
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hiii, <?php echo $nam ?></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Alatsi|Lobster&display=swap" rel="stylesheet">
<style>
	body{
		background-attachment: fixed;
		margin: 0;
		padding: 0;
        animation: mov 100s infinite  alternate;
	}
	@keyframes mov {
		   0% {background-image: linear-gradient(to bottom,#84F0DA,#9299A6);
		transition: all 100s ease-in;}
	  50% {background-image: linear-gradient(to left,#E3C390,#84F0DA);
	transition: all 100s ease-in;}
		  80% {background-image: linear-gradient(to bottom,#84F0DA,#9299A6);
	transition: all 100s ease-in;}
    100% { background-image: linear-gradient(#E3C390,#9299A6,#84F0DA);
			transition: all 50s ease-in;
	}
		
	
	
	</style>
	</head>
	<body>
	<div class="container mt-5">
	<h3 style="text-align: center; color:#3D1802;font-family: 'Lobster', cursive;">--------------Wait <span style="color:#112FA2;"><?php echo $nam ?></span> your CV Ready to few Day------------</h3>
	<h2 style="position: absolute; top: 40%; left: 50%; transform: translate(-50%,-50%); font-style: italic; font-size: 45px; box-shadow: 2px 2px 4px #000; padding: 10px 10px; font-weight: 800;"><span style="color:#350E01;">Name : <?php echo $nam ?></span><br>Phone : <span style="color:#2D0203;  font-size: 35px;"><?php echo $ph ?></span></h2>
	
	</div>
		
			<h5 style="position: absolute; top: 60%; left: 50%; transform: translate(-50%,-50%); font-size: 30px; font-family: 'Lobster';">-------------------- Website under construction --------------</h5>
			

		
	</body>
</html>