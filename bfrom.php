<?php
if(isset($_POST['send']))
{
	$name=$_POST['name'];
	$add=$_POST['add'];
	$phn=$_POST['phn'];
	/*
	$email=$_phn['email'];
	$date=$_phn['date'];
	$gender=$_phn['gender'];
	$high=$_phn['high'];
	$inname=$_phn['inname'];
	$passing=$_phn['passing'];
	$mark=$_phn['mark'];
	$bname=$_phn['bname'];
	$passing2=$_phn['passing2'];
	$sname=$_POST['sname'];
	$mark2=$_phn['mark2'];
	$chk1=$_phn['chk1'];
	$chk2=$_phn['chk2'];
	$chk3=$_phn['chk3'];
	$chk21=$_phn['chk21'];
	$chk22=$_phn['chk22'];
	$chk23=$_phn['chk23'];
	$chk24=$_phn['chk24'];
	$pskill=$_POST['pskill'];
	$leng=$_POST['leng'];
*/
	echo "<script>alert('SEND SUCCESS');</script>";

}




?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Biodata Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Alatsi|Lobster&display=swap" rel="stylesheet">
<style>
	body{
		overflow: auto;
		margin: 0;
		padding: 0;
        animation: mov 100s infinite  alternate;
	}
	@keyframes mov {
		   0% {background-image: linear-gradient(to bottom,#84F0DA,#9299A6);
		transition: all 100s ease-in;}
	  50% {background-image: linear-gradient(to left,#6BC1A3,#E3C390,#84F0DA);
	transition: all 100s ease-in;}
		  80% {background-image: linear-gradient(to bottom,#9299A6,#84F0DA);
	transition: all 100s ease-in;}
    100% { background-image: linear-gradient(360deg,#E3C390,#9299A6,#84F0DA);
			transition: all 50s ease-in;
	}
		
		
		
	}
	.bg{
		
		transition: all 90s ease-in;
    animation: mover 100s infinite  alternate;

	}
	.form-check-input{
		cursor: pointer;
	}
@keyframes mover {
    0% { background-image: linear-gradient(to bottom left,#ff9900,#ffff99);
		transition: all 100s ease-in;}
	  50% { background-image: linear-gradient(to bottom left,#ffff99,#ff9900);
	transition: all 100s ease-in;}
	  80% { background-image: linear-gradient(to right bottom,#ff9900,#ffff99);
	transition: all 100s ease-in;}
    100% { background-image:linear-gradient(to left,#ff9900,#ffff99,#ff9900);
			transition: all 90s ease-in;
	}
}
	</style>




</head>
<body>

<div class="container mt-4 mb-4 bg" style="border-radius: 15px;">
<h4 class="text-center text-white mb-3 pb-2 pt-1" style=" background-color:#452902; box-sizing: border-box; border-bottom-left-radius: 22px; border-bottom-right-radius: 22px; letter-spacing: 2px; font-family: 'Lobster', cursive;
">-: Fill Your Details :-</h4>
	<form action="biodata.php" autocomplete="off" method="post">
    
    
    <div class="form-row mt-2">
    <div class="form-group col-md-4">
      <label  style=" color:#08429C; font-family: font-family: 'Roboto', sans-serif;">Name<span style="color: #F81D21;">*</span></label>
      <input type="text" class="form-control-plaintext" id="name" name="name" placeholder="Enter Name" autocomplete="off" style="border-bottom: 2px inset #1F0404; outline-style: none;">
    </div>
    
     <div class="form-group col-md-8">
      <label  style="color:#08429C; font-family: 'Roboto', sans-serif;">Full Address<span style="color: #F81D21;">*</span></label>
      <input type="text" class="form-control-plaintext" id="add" name="add" placeholder="Enter full address" autocomplete="off" style="border-bottom: 2px inset #1F0404; outline-style: none;">
    </div>
  
  </div>
   <div class="form-row mt-2">
   <div class="form-group col-md-3">
      <label style=" color:#08429C; font-family: 'Roboto', sans-serif;">Mobile Number<span style="color: #F81D21;">*</span></label>
      <input type="text" class="form-control-plaintext" maxlength="10" id="phn" name="phn" placeholder="Enter Mobile number" autocomplete="off" style="border-bottom: 2px inset #060122; outline-style: none;">
    </div>
       
  <div class="form-group col-md-4">
      <label  style=" color:#08429C; font-family: font-family: 'Roboto', sans-serif;">Email<span style="color: #F81D21;">*</span></label>
      <input type="email" class="form-control-plaintext" id="email" name="email" placeholder="Enter email" autocomplete="off" style="border-bottom: 2px inset #060122; outline-style: none;">
    </div>
      
       <div class="form-group col-md-3">
      <label style=" color:#08429C; font-family: 'Roboto', sans-serif;">Date of Birth<span style="color: #F81D21;">*</span></label>
      <input type="date" class="form-control-plaintext pb-1" id="date" name="date" placeholder="Enter your date birth" style="border-bottom: 2px inset #060122; outline-style: none;">
    </div>
    
  <div class="form-group col-md-2">
      <label style="color:#08429C; font-family: 'Roboto', sans-serif;">Gender<span style="color: #F81D21;">*</span></label>
       <select class="form-control-plaintext" id="gender" name="gender"  style="border-bottom: 2px inset #1F0404; outline-style: none;">
    <option value="">Selected Gender..</option>
    <option value="male">Male</option>
    <option value="Fmale">Female</option>
 <option value="other">other</option>
  </select>
    </div>
    
		</div>
		
		
 <div class="form-row mt-2">
   <div class="form-group col-md-2">
   <label style=" color:#08429C; font-family: 'Roboto', sans-serif;">Highest Qulification<span style="color: #F81D21;">*</span></label>
  <select class="form-control-plaintext" id="high" name="high" autocomplete="off" style="border-bottom: 2px inset #1F0404; outline-style: none;">
    <option selected>Choose...</option>
     <option value="12th Pass">12th Pass</option>
    <option value="B.Sc.(Hons)">B.Sc.(Hons)</option>
    <option value="B.Sc.(Pass)">B.Sc.(Pass)</option>
     <option value="B.A(Hons)">B.A(Hons)</option>
      <option value="B.A(Pass)">B.A(Pass)</option>
    <option value="B.Tech">B.Tech</option>
     <option value="Diploma">Diploma</option>
  </select>
    </div>
    
    <div class="form-group col-md-5">
      <label style=" color:#08429C; font-family: 'Roboto', sans-serif;">Instrucation Name<span style="color: #F81D21;">*</span></label>
      <input type="text" class="form-control-plaintext" id="inname" name="inname" placeholder="Enter Address" autocomplete="off" style="border-bottom: 2px inset #1F0404; outline-style: none;">
    </div>
    
    <div class="form-group col-md-2">
      <label style="color:#08429C; font-family: 'Roboto', sans-serif;">Year Passing<span style="color: #F81D21;">*</span></label>
       <select class="form-control-plaintext" id="passing" name="passing" autocomplete="off" style="border-bottom: 2px inset #1F0404; outline-style: none;">
    <option selected>Choose....</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
     <option value="2017">2017</option>
      <option value="2018">2018</option>
    <option value="2019">2019</option>
     <option value="2020">2020</option>
     <option value="Pursuing">Pursuing</option>
  </select>
    </div>
    
  <div class="form-group col-md-3">
      <label  style="color:#08429C; font-family: 'Roboto', sans-serif;">Highest Marks<span style="color:#F81D21;">*</span></label>
        <input type="text" class="form-control-plaintext" id="mark" name="mark" placeholder="Enter Marks CGPA/PERSENTEG" autocomplete="off" style="border-bottom: 2px inset #1F0404; outline-style: none;">
</div>
</div>

 <div class="form-row mt-2"> 
    <div class="form-group col-md-3">
      <label style="color:#08429C; font-family: 'Roboto', sans-serif;">Board Name<span style="color:#F81D21;">*</span></label>
      <input type="text" class="form-control-plaintext" id="bname" name="bname" placeholder="Enter board name" autocomplete="off" style="border-bottom: 2px inset #1F0404; outline-style: none;">
    </div>
    
    <div class="form-group col-md-2">
      <label style="color:#08429C; font-family: 'Roboto', sans-serif;">Year Passing<span style="color: #F81D21;">*</span></label>
       <select class="form-control-plaintext" id="passing2" name="passing2" autocomplete="off" style="border-bottom: 2px inset #1F0404; outline-style: none;">
    <option selected>Choose....</option>
    <option value="2010">2010</option>
    <option value="2011">2011</option>
     <option value="2012">2012</option>
      <option value="2013">2013</option>
    <option value="2014">2014</option>
     <option value="2015">2015</option>
  </select>
    </div>
    
  <div class="form-group col-md-4">
      <label  style="color:#08429C; font-family: 'Roboto', sans-serif;">School Name<span style="color:#F81D21;">*</span></label>
        <input type="text" class="form-control-plaintext" id="sname" name="sname" placeholder="Enter school name" autocomplete="off" style="border-bottom: 2px inset #1F0404; outline-style: none;">
</div>
  <div class="form-group col-md-3">
      <label style="color:#08429C; font-family: 'Roboto', sans-serif;">Highest Marks(%)<span style="color: #F81D21;">*</span></label>
        <input type="text" class="form-control-plaintext" id="mark2" name="mark2" placeholder="Enter Marks" autocomplete="off" style="border-bottom: 2px inset #1F0404; outline-style: none;">
    </div>
</div>
<div class="form-row pt-2 pb-2">
<div class="col-md-6 pl-0">
<label style="color:#08429C; font-family: 'Roboto', sans-serif; font-size: 19px;">Intrests:-<span style="color: #F81D21;">* </span></label>
<div class="form-check form-check-inline ml-2">
  <input class="form-check-input" type="checkbox" id="chk1" name="chk1" value="Computer">
  <label class="form-check-label">Computer</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="chk2" name="chk2" value="Electrical Technology">
  <label class="form-check-label" >Electrical Technology</label>
</div>
<div class="form-check form-check-inline ">
  <input class="form-check-input" type="checkbox" id="chk3" name="chk3" value="Phtography">
  <label class="form-check-label" >Phtography</label>
</div>
   </div>
   
   
     <div class="col-md-6 pl-0 pr-0">
<label style="color:#08429C; font-family: 'Roboto', sans-serif;">Hobbies:-<span style="color: #F81D21;">* </span></label>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="chk21" name="chk21" value="Gardening">
  <label class="form-check-label">Gardening</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="chk22" name="chk22" value="Drawing">
  <label class="form-check-label" >Drawing</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="chk23" name="chk23" value="Playing Cricket">
  <label class="form-check-label" >Playing Cricket</label>
</div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="chk24" name="chk24" value="Listening Music">
  <label class="form-check-label" >Listening Music</label>
</div>
   </div>

    </div>
	<div class="form-row mt-2">
	  <div class="form-group col-md-6">
      <label  style=" color:#08429C; font-family: font-family: 'Roboto', sans-serif;">Professional Skills<span style="color: #F81D21;">*</span></label>
      <input type="text" class="form-control-plaintext" id="pskill" name="pskill" placeholder="Enter Professional Skills" autocomplete="off" style="border-bottom: 2px inset #060122; outline-style: none;">
    </div>
      <div class="form-group col-md-6">
      <label  style="color:#08429C; font-family: font-family: 'Roboto', sans-serif;">Lenguage Known<span style="color: #F81D21;">*</span></label>
      <input type="text" class="form-control-plaintext" id="leng" name="leng" placeholder="Enter Lenguage Known" autocomplete="off" style="border-bottom: 2px inset #060122; outline-style: none;">
    </div>
		</div>

		<div class="col-md-12 d-flex justify-content-between pl-0 pr-0">
		
		<button type="reset" class="btn btn-danger" style="border-radius: 0px;">Reset Detalis</button>

			<button type="submit" class="btn btn-primary" id="send" name="send" style="border-radius: 0px;">Submit Detalis</button>
	
		</div>
	
	
</form>
<h4 class="text-center text-white pt-1 pb-2 mt-3" style="background-color:#210304;box-sizing: border-box; border-top-left-radius: 22px; border-top-right-radius: 22px; letter-spacing: 3px;font-family: 'Lobster', cursive;">-: Your CV Created :-</h4>
</div>
</body>
</html>