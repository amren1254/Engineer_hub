<?php
	include_once('conn.php');
	session_start();
	/*$name=$_POST['name'];
	$password=$_POST['password'];
	$_SESSION['$email'];
	$_SESSION['$password'];
	*/
	$name= " SELECT fname FROM user_details";
	$res= mysqli_query($con,$name);
	//$show=mysqli_fetch_array($res);
	//echo "<h2 align='center'><b>$show[0]</b></h2>";
	
?>
<html>
<head>
<meta charset='utf-8'>
<title>Dashboard | profile</title>
<link rel="stylesheet" type="text/css" href="profile.css">
<style>
.text-block {
  position: absolute;
  bottom:80%;
  right: 5%;
  top:10%;
  left:10%;
  background-color: black;
  color: white;
  padding-left: 20px;
  padding-right: 20px;
  
 width:80%;
  height:80%;
}
</style>
</head>
<body>
<header>
    
            <h1 align="center"> Welcome To the Engineers Hub</h1>
            <h1 align="center"> </h2>
</header>    
<h3><?php //echo "<h1 align='center'>Welcome $show[0]</h1>";?></h3>

<img src="ok6Jp4.jpg"width="100%"height="100%" style="-webkit-filter: blur(10px);
  filter: blur(2px);">
<div class="text-block">
    <h4 STYLE="font-size:30px;"><a href="home_page.php">ENGINEERS HUB</h4></a>
    <p style="font-size:20px;  margin-left:40px;">Select your stream</p>
   <a href="cse.html"> <input type="button" value="CSE" style="margin-left:180px; width:100px;height:60px;"></a>
    <a href="https://www.youtube.com/results?search_query=freshersworld+aptitude"><input type="button" value="APPTITUDE LECTURES" style="background-color:#b35900; width:300px; height:80px;margin-left:200px;"></a>
<br>
<a href="me.html"><input type="button" value="ME" style="margin-left:180px; width:100px;height:60px;"><br>
<a href="ec.html"><input type="button" value="EC" style="margin-left:180px; width:100px;height:60px;"></a>
 <a href="https://www.youtube.com/results?search_query=reasoning+lectures+for+competitive+exams"><input type="button" value="REASONING LECTURES" style="background-color:#b35900; width:300px; height:80px;margin-left:200px;"><br></a>

<a href="civil.html"><input type="button" value="CIVIL" style="margin-left:180px; width:100px;height:60px;"><br>
  </div>

	<footer>
		<div>
			<nav>
				<ul>
					
					<li><a href="home_page.php"> Home</a></li>
					<li><a href="about_us.php"> About </a></li>  
					<li><a href="sign_up.php"> Registration </a></li>
					<li><a href="feedback.php"> Feedback </a></li>
				
				</ul>
			</nav>
        </div>
		</footer>
    <hgroup>
</body>
</html>