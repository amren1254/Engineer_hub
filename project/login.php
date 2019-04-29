<?php

	include_once('conn.php');
    
	if(isset($_POST['login']))
	{
	$user = $_POST['uname'];	
	$pass = $_POST['password'];
	
	//Checking Users
	$sql= " SELECT * FROM admin WHERE email='$user' AND password='$pass'";
		//echo $user.$pass;
	$res=mysqli_query($con,$sql);
	/*if($res)
	{
		echo "Query successful";
	}*/
	$rs= mysqli_fetch_array($res);
	if($rs)
	{
		echo "Fetching Successful".$rs[0];
	}
	if($user == $rs[1] and $pass == $rs[2])
	{
		echo "<script> document.location='profile.php'</script>";
		
	}
	else
	{
		echo "<h1 align='center'>Access Denied</h1>";
	}
	}
?> 



<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>login</title>
	<link href="login.css" rel="stylesheet" type="text/css">
	
</head>

<body>
	<div class="login">
		<form action="" method="POST">
			<h2 style="color:white">Log In</h2>
			<input type="text" name="uname" placeholder="Username" required>
			<input type="password" name="password" placeholder="password" required><br><br>
			<td colspan="2"><input type="submit" value="submit" name="login"></td>
			
			<br>
			<script type="text/javascript">
				fuction aa()
			{
				var xmlhttp;
				xmlhttp=new XMLHttpRequest();
				xmlhttp.open("GET","login.php?username="+document.getElementsByTagName('uname').value+"&password="+document.getElementsByTagName('pass').value,false);
				xmlhttp.send(null);
			}
			</script>
			<div id="container">
				<a href="#" style="margin-right: 0px;font-size:13px; font-family: Tahoma,Geneva;">Reset password</a>
				<a href="#" style="margin-right: 0px;font-size:13px; font-family: Tahoma,Geneva;">Forgot Password</a>
			</div><br><br><br><br><br><br>
			Don't have account?<a href="sign_up.php">&nbsp;register</a>
		</form>
	</div>
	<footer>
		<div>
			<nav>
				<ul>
					
					<li><a href="home_page.php">Home</a></li>
					<li><a href="about_us.php"> About </a></li>  
					<li><a href="sign_up.php"> Registration </a></li>
				
				</ul>
			</nav>
        </div>
		</footer>
</body>
</html>