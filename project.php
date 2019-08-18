<!DOCTYPE html>

<!-- INFORMATION

My Profile - Assignment 1 - IIT

Created by Rahul Chandra
RMIT University

August 9 2019

CSS Template:
W3 Schools
https://www.w3schools.com/w3css/4/w3.css

-->

<html>

<title>Project Idea</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />


<style>
	body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
	body {font-size:24px;text-align: center;font-weight: bolder; color: slategrey}<p>This is the content for Layout P Tag</p>
	.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
	.w3-half img:hover{opacity:1}
	body {
		background-color: #fff;
	}
	* {
  	box-sizing: border-box;
	}

	/* Create three equal columns that floats next to each other */
	.column {
	float: left;
  	width: 50%;
  	padding: 10px;
  	height: 300px;
	}

	/* Clear floats after the columns */
	.row:after {
  	content: "";
  	display: table;
  	clear: both;
	}	
</style>

<body>
	
<!-- Sidebar -->
<nav class="w3-sidebar w3-white w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:20%;font-weight:lighter;" id="Sidebar"><br>
  <div class="w3-container">
    <img src="images/MA-Logo-01.png" alt="Mayfair" style="width:100%;height:100%"><br>
  </div>
	<p></p>
  <div class="w3-bar-block">
    <a href="personalInfo.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-sand"><h3><center>Personal Information</center></h3></a>
    <a href="interest.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-sand"><h3><center>Interest in IT</center></h3></a> 
    <a href="idealJob.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-sand"><h3><center>Ideal Job</center></h3></a>
	<a href="personalProfile.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-sand"><h3><center>Personal Profile</center></h3></a>
    <a href="project.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-sand"><h3><center>Project Ideas</center></h3></a>
    <a href='exit.php' onclick='w3_close()' class='w3-bar-item w3-button w3-hover-red'><h5><center><font color='#0D2F4C'>EXIT</font></center></h5></a>
  </div>
</nav>
	
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:23%;margin-right:5%">
	  <h1 class="w3-xxlarge w3-text-black"><b><font color='#0D2F4C'>Project Idea</font></b></h1>
		   <hr style="width:100%;border:3px solid #AF892F" class="w3-round">
	<div class="row">
 	 	<div class="column" style="background-color:#fff;" align="left">
	      <img class="w3-image" src="images/ResourcesSP.png" alt="Mayfair" align="center"></img>
		<p>Mayfair aims to enhance student learning through our student portal that is a state of the art avenue which houses all learning material.</p><p>Not only does this allow us to reduce our carbon footprint and keep up with social and corporate responsibility but also ensures student ease, so time can be better spent on learning instead of organising.</p><p>Parents also gain access to the student accounts and hence are able to stay well informed about student progress.</p>
		</h3>
  		</div>
  		<div class="column" style="background-color:#fff;" align="left">
	      <img class="w3-image" src="images/ResourcesTP.png" alt="Mayfair" align="center"></img>
	  	<p>Gain a better understanding of your texts through our text-review guides. With in-depth notes on character analysis, themes, symbols, motifs etc. these guides are tailor made for texts prescribed on the official VCAA text-list.</p><p>These guides are for those looking to gain a clearer understanding of the essay writing structures and the recipe of an A+ essay for the final VCAA end-of-year examinations and school-assessed coursework.</p>
		<br>
		<a href="http://www.mayfairacademy.com.au">Visit Website</a>
		</h3>
  		</div>
	</div>
	</div>
	</div>
	
	
<!-- End page content -->
</div>
	
</body>
</html>
