<?php
include_once('conn.php');
$fname=$_POST['f_name'];
$lname=$_POST['l_name'];
$email=$_POST['email'];
$gen=$_POST['male'];
$pass=$_POST['password'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
//echo $name.$fname.$email;

$ins= "INSERT INTO user_details (id,f_name,l_name,email,password,address,mobile,gender) VALUES('','$fname','$lname','$email','$pass','$address','$mobile','gender')";
$res=mysqli_query($con,$ins);
if($res==true)
{
	echo "Values Inserted";
}
else
{
	echo "Values Not inserted";
}
$inslog="INSERT INTO admin (id,email,password) VALUES ('','$email','$pass')";
$r=mysqli_query($con,$inslog);
if($r==true)
{
	echo "You Are Registered";
}
else
{
	echo "Registration Failed";
}
header{'location:login.php'}
?>