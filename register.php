<?php
$conn = mysqli_connect("localhost","root","","mha");
if(!$conn) 	{
    die("Error has occured".mysqli_connect_error());
}
$fname=$_REQUEST['fname'];
$mname=$_REQUEST['mname'];
$lname=$_REQUEST['lname'];
$dob=$_REQUEST['dob'];
$email=$_REQUEST['email'];
$mobile=$_REQUEST['mobile'];
$password=$_REQUEST['password'];
$conf_password=$_REQUEST['cpassword'];
$gender=$_REQUEST['gender'];

$sql = "INSERT INTO user_register (First_Name,Middle_Name,Last_Name,DoB,Gender,Email,Mobile_no,Password,Con_Password) VALUES ('$fname','$mname','$lname','$dob','$gender','$email','$mobile','$password','$conf_password')";

if(mysqli_query($conn,$sql)) {
echo "alert('Data entered successfully,');";
//header("location:home.html");    
}
else{
	die("Error in inserting data into database".mysqli_error($conn));
}