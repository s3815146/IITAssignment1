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

<title>Ideal Job</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />


<style>
	body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
	body {font-size:20px;text-align: center;font-weight: bolder; color: slategrey}<p>This is the content for Layout P Tag</p>
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
  <!-- Public Feed -->
  <div class="w3-container" id="job" style="margin-top:15px">
	  <h1 class="w3-xxlarge w3-text-black"><b><font color='#0D2F4C'>Ideal Job</font></b></h1>
     <hr style="width:100%;border:3px solid #AF892F" class="w3-round">
     <div class="row">
 	 	<div class="column" style="background-color:#fff;">
	      <img class="w3-image" src="images/AcademicsVCE.png" alt="Mayfair" align="center"></img>
		 <p>Our 'Excellence Classes' are streamlined to cater to all learning levels, to ensure that students are able to succeed without stress.</p><p>Students are provided with access to a student portal that updates weekly with new content, resources and samples to further their learning.</p><p>Mayfair's teaching faculty is well versed in their respective fields of study, as well as able to connect with students on a personal note to make learning enjoyable.</p><p>Our teaching material is developed by experienced educators and is targeted at reinforcing key knowledge and skills that optimise the student experience.</p><p><b>Subjects Offered: VCE English, VCE English (EAL)</b></p>
  		</div>
  		<div class="column" style="background-color:#fff;">
		<img class="w3-image" src="images/SF.png" alt="Mayfair" align="center"></img><br><br>
	     <table width="100%" border="0">
		  <tbody>
			<tr>
			  <td>DAY</td>
			  <td>TIME</td>
			  <td>LOCATION</td>
			</tr>
			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			</tr>
			<tr>
			  <td>Monday</td>
			  <td>5:30 PM - 7:30 PM</td>
			  <td>Narre Warren</td>
			</tr>
			<tr>
			  <td>Tuesday</td>
			  <td>5:00 PM - 7:00 PM</td>
			  <td>Chadstone</td>
			</tr>
			<tr>
			  <td>Thursday</td>
			  <td>5:30 PM - 7:30 PM</td>
			  <td>Narre Warren</td>
			</tr>
			<tr>
			  <td>Saturday</td>
			  <td>10:00 AM - 12:00 PM</td>
			  <td>Narre Warren</td>
			</tr>
			<tr>
			  <td>Saturday</td>
			  <td>12:30 PM - 2:30 PM</td>
			  <td>Chadstone</td>
			</tr>
		  </tbody>
		</table>
 		<br><br>
		<table width="100%" border="0">
		  <tbody>
			<tr>
			  <td align="left"><u>$65/Week (2-Hour Session)</u></td>
			</tr>
			<tr>
			  <td align="left">1. Charged in installments of four sessions at a time via direct debit. </td>
			</tr>
			<tr>
			  <td align="left">2. $650 Upfront Payment (10 Weeks).</td>
			</tr>
		  </tbody>
		</table>
  		</div>
	</div>
	</div>
	
<!-- End page content -->
</div>
	
</body>
</html>
