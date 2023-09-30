<?php
$servername="localhost";
$username="root";
$qpassword="";
$shailesh = "peoplecare";
$email=$_POST['email'];
$newpass=$_POST['password'];
// $confirmpass=$_POST['confirmpass'];
$con=mysqli_connect($servername,$username,$qpassword,$shailesh);
$sql="update  set password='$newpass'where email='$email'";
if($con->query($sql)===true)
{
    echo"password updated successfully";
}
else
{
    echo "error updating password:".$con->error;
}
